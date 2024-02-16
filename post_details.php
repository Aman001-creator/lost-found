<?php
@include 'config.php';
session_start();


if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
    exit();
}


if (isset($_GET['post_id'])) {
    $post_id = mysqli_real_escape_string($conn, $_GET['post_id']);
    

    $fetchQuery = "SELECT * FROM posts WHERE id = '$post_id'";
    $result = mysqli_query($conn, $fetchQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        $postDetails = mysqli_fetch_assoc($result);
    } else {

        header('location:404.php');
        exit();
    }
} else {

    header('location:404.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "inc/head_links.php"; ?>
    <title><?php echo $postDetails['item_name']; ?> - Lost & Found Items</title>
    <style>

        @media (min-width: 992px) {
        .card-horizontal {
            display: flex;
            flex-direction: row;
        }

        .card-horizontal .img-container {
            flex: 1;
            max-width: 1000px; 
        }

        .card-horizontal .text-container {
            flex: 1;
        }

        .card-img-top {
            width: 100%;
            height: auto;
        }
    }
    </style>
</head>

<body>


    <?php include_once "inc/header.php"; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mx-5 mb-3"><?php echo $postDetails['item_name']; ?> Details</h2>
                <hr class="mx-5 mb-5 bg-primary border-primary opacity-100" style="width:13rem">

                <div class="card card-horizontal">
                    <div class="img-container border">
                        <img src="<?php echo $postDetails['image_path']; ?>" class="card-img-top" alt="<?php echo $postDetails['item_type']; ?> Item">
                    </div>
                    <div class="text-container">
                        <div class="card-body">
                            <h5 class="card-title  px-2"><?php echo $postDetails['item_name']; ?></h5>
                            <p class="card-text px-2"><?php echo $postDetails['item_type']; ?></p>
                            <p class="card-text px-2"><?php echo $postDetails['person_name']; ?></p>
                            <p class="card-text px-2"><?php echo $postDetails['contact']; ?></p>
                            <p class="card-text px-2"><?php echo $postDetails['location']; ?></p>
                            <p class="card-text px-2"><?php echo $postDetails['description']; ?></p>
                            <br>
                            <a href="l&f_items.php" class="btn btn-primary">Back to Posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once "inc/top.php"; ?>

    <?php include_once "inc/footer.php"; ?>

</body>

</html>
