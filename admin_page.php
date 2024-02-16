<?php
include_once "inc/top.php";
include_once "inc/head_links.php";

@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

$userType = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : '';

// Handle Edit Operation for User
if (isset($_GET['edit_id'])) {
    $editId = mysqli_real_escape_string($conn, $_GET['edit_id']);
    $editQuery = "SELECT * FROM user_form WHERE id = '$editId'";
    $result = mysqli_query($conn, $editQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        include 'edit_user.php';
        exit();
    }
}

// Handle Copy Operation for User
if (isset($_GET['copy_id'])) {
    $copyId = mysqli_real_escape_string($conn, $_GET['copy_id']);
    $copyQuery = "SELECT * FROM user_form WHERE id = '$copyId'";
    $result = mysqli_query($conn, $copyQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        $insertQuery = "INSERT INTO user_form (name, email, password, user_type, agree_terms) 
                        VALUES ('{$userData['name']}', '{$userData['email']}', '{$userData['password']}', '{$userData['user_type']}', '{$userData['agree_terms']}')";
        mysqli_query($conn, $insertQuery);
    }
}

// Handle Delete Operation for User
if (isset($_POST['delete_user'])) {
    $deleteId = mysqli_real_escape_string($conn, $_POST['delete_id']);
    $deleteQuery = "DELETE FROM user_form WHERE id = '$deleteId'";
    mysqli_query($conn, $deleteQuery);
}

// Handle Edit Operation for Post
if (isset($_GET['edit_post_id'])) {
    $editPostId = mysqli_real_escape_string($conn, $_GET['edit_post_id']);
    $editPostQuery = "SELECT * FROM posts WHERE id = '$editPostId'";
    $postResult = mysqli_query($conn, $editPostQuery);

    if ($postResult && mysqli_num_rows($postResult) > 0) {
        $postData = mysqli_fetch_assoc($postResult);
        include 'edit_post.php';
        exit();
    }
}

// Handle Delete Operation for Post
if (isset($_POST['delete_post'])) {
    $deletePostId = mysqli_real_escape_string($conn, $_POST['delete_post_id']);
    $deletePostQuery = "DELETE FROM posts WHERE id = '$deletePostId'";
    mysqli_query($conn, $deletePostQuery);
}

$fetchUserQuery = "SELECT * FROM user_form";
$userResult = mysqli_query($conn, $fetchUserQuery);

$fetchPostQuery = "SELECT * FROM posts";
$postResult = mysqli_query($conn, $fetchPostQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Your Lost and Found</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container-fluid {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        .delete-btn {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c0392b;
        }

        header {
            background-color: #0b006b;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: relative;
        }

        header h1 {
            margin: 0;
        }

        header a {
            color: #fff;
            text-decoration: none;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            text-decoration:none;
        }

        .container-fluid {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

    </style>
</head>
<body>

<header>
    <h1 class="py-2">Admin Panel</h1>
    <a href="logout.php" class="btn btn-primary">Logout</a>
</header>

<div class="container-fluid">
    <h2>User Table</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($userResult)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>{$row['user_type']}</td>";
            echo "<td><a  class='btn btn-info' href='admin_page.php?edit_id={$row['id']}'>Edit</a></td>";
            echo "<td>
                      <form action='admin_page.php' method='post'>
                        <input type='hidden' name='delete_id' value='{$row['id']}'>
                        <button type='submit' class='btn btn-danger' name='delete_user'>Delete</button>
                      </form>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>

    <br>
    <br>

    <h2>Post Table</h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Person Name</th>
            <th>Post Title</th>
            <th>Image Path</th>
            <th>Created At</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($postResult)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['post_title']}</td>";
            echo "<td>{$row['person_name']}</td>";
            echo "<td>{$row['post_title']}</td>";
            echo "<td>{$row['image_path']}</td>";
            echo "<td>{$row['created_at']}</td>";
           
            echo "<td><a  class='btn btn-info' href='admin_page.php?edit_post_id={$row['id']}'>Edit</a></td>";
            echo "<td>
                      <form action='admin_page.php' method='post'>
                        <input type='hidden' name='delete_post_id' value='{$row['id']}'>
                        <button type='submit'class='btn btn-danger' name='delete_post'>Delete</button>
                      </form>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
