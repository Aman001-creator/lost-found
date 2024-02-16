<?php

@include 'config.php';
session_start();


if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}


if (isset($_GET['edit_post_id'])) {
    $editPostId = mysqli_real_escape_string($conn, $_GET['edit_post_id']);
    $editPostQuery = "SELECT * FROM posts WHERE id = '$editPostId'";
    $postResult = mysqli_query($conn, $editPostQuery);


    if ($postResult && mysqli_num_rows($postResult) > 0) {
        $postData = mysqli_fetch_assoc($postResult);
    } else {
    
        header('location: admin_page.php');
        exit();
    }
} else {

    header('location: admin_page.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_post'])) {
    $newTitle = mysqli_real_escape_string($conn, $_POST['post_title']);
    $newPersonName = mysqli_real_escape_string($conn, $_POST['person_name']);


    $updateQuery = "UPDATE posts SET post_title = '$newTitle', person_name = '$newPersonName' WHERE id = '$editPostId'";
    mysqli_query($conn, $updateQuery);

    header('location: admin_page.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post - Your Lost and Found</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Post</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?edit_post_id=" . $editPostId); ?>" method="post">
        <label for="post_title">Post Title:</label>
        <input type="text" id="post_title" name="post_title" value="<?php echo $postData['post_title']; ?>" required>

        <label for="person_name">Person Name:</label>
        <input type="text" id="person_name" name="person_name" value="<?php echo $postData['person_name']; ?>" required>

        <button type="submit" name="update_post">Update Post</button>
    </form>
</div>

</body>
</html>
