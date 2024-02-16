<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}


$user_name = $_SESSION['user_name'];
$fetchQuery = "SELECT * FROM posts WHERE user_id = '$user_name'";
$result = mysqli_query($conn, $fetchQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "inc/head_links.php"; ?>
    <title>My Posts - Your Campus Lost and Found</title>
    <style>
        .btn {
            background-color: #4942e4;
            border: none;
        }

        .btn:hover {
            background-color: #3831b0;
            border: none;
            transform: scale(0.95);
        }
    </style>
</head>

<body>

    <!-- Include header -->
    <?php include_once "inc/header.php"; ?>

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar-->
            <div class="col-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        Categories
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="my_posts.php">All Items</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=gadgets">Gadgets</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=bags">Bags</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=document">Documents</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=accessories">Accessories</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=jewelry">Jewelry</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=watch">Watch</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=cards">Identity Cards</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=laptop">Laptop</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=keys">Keys</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=shoes">Shoes</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=cloth">Cloths</a></li>
                        <li class="list-group-item"><a href="my_posts.php?category=more">More ...</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-9">
                <h2 class="mt-5">My Posts</h2>
                <hr class="mx-5 mb-5 bg-primary border-primary opacity-100" style="width:13rem">

                <div class="row">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-lg-4 col-md-6 mb-4">';
                        echo '<div class="card">';
                        echo '<img src="' . $row['image_path'] . '" class="card-img-top" alt="' . $row['item_type'] . ' Item">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['item_name'] . '</h5>';
                        echo '<p class="card-text">' . $row['description'] . '</p>';
                        echo '<a href="#" class="btn btn-primary">Details</a>';
                        echo '<a href="delete_post.php?post_id=' . $row['id'] . '" class="btn btn-danger">Delete</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Include top section -->
    <?php include_once "inc/top.php"; ?>
    <!-- Include footer -->
    <?php include_once "inc/footer.php"; ?>

</body>

</html>
