<?php
@include 'config.php';

if (isset($_POST['update_user'])) {
  
    $userId = mysqli_real_escape_string($conn, $_POST['user_id']);
    $newName = mysqli_real_escape_string($conn, $_POST['edit_name']);

 
    $updateQuery = "UPDATE user_form SET name = '$newName' WHERE id = '$userId'";
    mysqli_query($conn, $updateQuery);

    header('location: admin_page.php');
    exit();
} else {
    header('location: admin_page.php');
    exit();
}
?>
