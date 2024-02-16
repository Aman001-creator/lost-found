<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction - Your Campus Lost & Found</title>

    <?php
          include "inc\head_links.php";
    ?>


    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: grey;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #construction-image {
            max-width: 100%;
            height: auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>

    <div>
        <img id="construction-image" src="images\underconstruction1.png" alt="Under Construction">
    </div>

</body>
</html>
