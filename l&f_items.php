<?php
@include 'config.php';
session_start();


if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}


$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

$fetchQuery = "SELECT * FROM posts";
if (!empty($category)) {
    $fetchQuery .= " WHERE category = '$category'";
}
$fetchQuery .= " ORDER BY id DESC";
$result = mysqli_query($conn, $fetchQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "inc/head_links.php"; ?>
    <title>Lost & Found Items - Your Campus Lost and Found</title>
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
        .card:hover{
     box-shadow: 0px 8px 16px 5px rgba(0,0,0,0.2);
     transition: .5s ease;
  }
    </style>
</head>

<body>

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
                        <li class="list-group-item"><a href="l&f_items.php">All Items</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=gadgets">Gadgets</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=bags">Bags</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=document">Documents</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=accessories">Accessories</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=jewelry">Jewelry</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=watch">Watch</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=cards">Identity Cards</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=laptop">Laptop</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=keys">Keys</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=shoes">Shoes</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=cloth">Cloths</a></li>
                        <li class="list-group-item"><a href="l&f_items.php?category=more">More ...</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <h2 class="mt-5">Lost and Found Items</h2>
                <hr class="mx-5 mb-5 bg-primary border-primary opacity-100" style="width:13rem">

                <!-- Cards for Lost and Found Items -->
                <div class="row">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col-lg-4 col-md-6 mb-4">';
                        echo '<div class="card">';
                        echo '<img src="' . $row['image_path'] . '" class="card-img-top" alt="' . $row['item_type'] . ' Item">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $row['item_name'] . '</h5>';
                        echo '<p class="card-text text-primary">' . $row['item_type'] . '</p>';
                        echo '<p class="card-text">' . $row['post_title'] . '</p>';
                        // Inside the while loop where you display posts
echo '<a href="post_details.php?post_id=' . $row['id'] . '" class="btn btn-block btn-primary">Details</a>';

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
