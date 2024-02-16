<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}

if (isset($_GET['post_id'])) {
    $post_id = mysqli_real_escape_string($conn, $_GET['post_id']);


    $deleteQuery = "DELETE FROM posts WHERE id = '$post_id'";
    mysqli_query($conn, $deleteQuery);

    header('location:my_posts.php');
    exit();
}
?>
