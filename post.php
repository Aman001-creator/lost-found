<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}

$itemType = $itemName = $description = $location = $contact = $category = $personName = $postTitle = "";
$alertMessage = ""; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $itemType = mysqli_real_escape_string($conn, $_POST['item_type']);
    $itemName = mysqli_real_escape_string($conn, $_POST['item_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $personName = mysqli_real_escape_string($conn, $_POST['person_name']);
    $postTitle = mysqli_real_escape_string($conn, $_POST['post_title']);

   
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

   
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }

   
    if (file_exists($targetFile)) {
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 500000) {
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        // $alertMessage = '<div class="alert alert-danger" role="alert">Sorry, your file was not uploaded.</div>';
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // $alertMessage = '<div class="alert alert-success" role="alert">The file ' . basename($_FILES["image"]["name"]) . ' has been uploaded.</div>';
        } else {
            $alertMessage = '<div class="alert alert-danger" role="alert">Sorry, there was an error uploading your file.</div>';
        }
    }

    $insertQuery = "INSERT INTO posts (item_type, item_name, description, location, contact, category, person_name, post_title, image_path)
                    VALUES ('$itemType', '$itemName', '$description', '$location', '$contact', '$category', '$personName', '$postTitle', '$targetFile')";

    if (mysqli_query($conn, $insertQuery)) {
        $alertMessage .= '<div class="alert alert-success" role="alert">Post has been created successfully!</div>';
    } else {
        $alertMessage .= '<div class="alert alert-danger" role="alert">Error: ' . $insertQuery . '<br>' . mysqli_error($conn) . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Post Item - Your Campus Lost & Found</title>
    <?php include "inc\head_links.php"; ?>
    <style>
        .btn {
            background-color: #4942e4;
            border: none;
            max-width: 50%;
            margin: 0 auto;
        }

        .btn:hover {
            background-color: #3831b0;
            border: none;
            transform: scale(0.95);
        }
    </style>
</head>

<body>


    <?php include_once "inc/header.php"; ?>

    <div class="container">
        <h2 class="text-center mt-4">Post Lost or Found Item</h2>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:80px">

        <?php echo $alertMessage; ?>

        <form action="post.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="item_type">Item Type:</label>
                <select class="form-control" id="item_type" name="item_type" required>
                    <option value="lost">Lost</option>
                    <option value="found">Found</option>
                </select>
            </div>

            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" class="form-control" id="item_name" name="item_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Information(email only):</label>
                <input type="email" class="form-control" id="contact" name="contact" required>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <!-- <input type="text" class="form-control" id="category" name="category" required> -->
                <select class="form-control"  id="category" name="category" required>
                <option value="-1">Choose Category</option>
                <option value="gadgets">Gadgets</option>
                <option value="bags">Bags</option>
        <option value="documents">Documents</option>
        <option value="accessories">Accessories</option>
        <option value="jewelry">Jewelry</option>
        <option value="watch">Watch</option>
        <option value="identity Cards">Identity Cards</option>
        <option value="laptop">Laptop</option>
        <option value="keys">Keys</option>
        <option value="shoes">Shoes</option>
        <option value="cloths">Cloths</option>
        <option value="more">More ...</option>
    </select>
            </div>

            <div class="form-group">
                <label for="person_name">Name of Person (Lost/Found):</label>
                <input type="text" class="form-control" id="person_name" name="person_name" required>
            </div>

            <div class="form-group">
                <label for="post_title">Title of Post:</label>
                <input type="text" class="form-control" id="post_title" name="post_title" required>
            </div>

            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control-file text-center mx-auto" id="image" name="image"
                    accept="image/*">
            </div>

            <div class="form-group text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-block rounded-pill">Submit</button>
            </div>
        </form>
    </div>

    <?php include_once "inc/top.php"; ?>

    <?php include_once "inc/footer.php"; ?>

</body>

</html>
