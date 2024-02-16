<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$fetchQuery = "SELECT * FROM posts";
$result = mysqli_query($conn, $fetchQuery);

$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

$fetchQuery = "SELECT * FROM posts";
if (!empty($category)) {
    $fetchQuery .= " WHERE category = '$category'";
}
$fetchQuery .= " ORDER BY id DESC";
$result = mysqli_query($conn, $fetchQuery);

$search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';

$fetchQuery = "SELECT * FROM posts";
if (!empty($search)) {
    $fetchQuery .= " WHERE item_name LIKE '%$search%' OR description LIKE '%$search%'";
}
$fetchQuery .= " ORDER BY id DESC";

$result = mysqli_query($conn, $fetchQuery);
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Your Campus Lost & Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>

    <style>

  body {
   margin: 0;
   padding: 0;
}

  .search{
    border-radius: 45px;
    
  }

  .search-row{
    background-color: #c2d9ff;
  }
  
  .search-row .btn{
    background-color: #4942e4;
    border-radius: 5px;
    font-style:none;
  }
  .rounded{
    border-radius:45px;
  }

  .title-box{
     color: #000;
     border-bottom: solid 2px;
     padding-bottom: 0%;
     box-sizing: 40px;
  }

  .btn{
    background-color:#4942e4;
    border:none;
  }

  .btn:hover{
    background-color:#3831b0;
    border:none;
    transform:scale(0.95);
  }
  
  .card:hover{
     box-shadow: 0px 8px 16px 5px rgba(0,0,0,0.2);
     transition: .5s ease;
  }
  
  .read-more{
     color: #0a0065;
     font-size: 20px;
     width: auto;
     text-align: center;
     background-color: #868eff;
  }
  
  .hoverable-box {
     border: 1px solid #ddd;
     padding: 20px;
     margin-top:40px;
     margin: 10px;
     transition: transform 0.3s;
     height: 90%;
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
     text-align: center;
     background-color: #e3e3e3;
     border-radius: 10px;
  }
  
  .hoverable-box:hover {
     transform: scale(1.05);
     background-color: white;
     box-shadow: 2px 2px 10px #bfbfbf;
  }
  
  .box-icon {
     font-size: 40px;
     margin-bottom: 10px;
     color: #041F60;
  }
  
  .box-heading {
     font-size: 24px;
     font-weight: bold;
  }
  
        .bg-image {
            
            background-image: url('images/back_ground.jpg');
            background-size: cover;
            background-repeat:no-repeat;
            margin-top:40px;
            max-width:1200px;
            background-position: center;
            background-attachment: fixed;
            height: 30vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            border-radius:10px;
        }
        .bg-image h1{
          font-weight:bold;
          font-family:'Monotype Corsiva';
            font-size:3rem;
            text-shadow: 4px 4px 16px rgba(0, 0, 0, 1);
        }

</style>

</head>
<body>

    <?php 
        include_once "inc/header.php";
    ?>
    <div class="container-fluid">
    <div class="container">
    <div class="bg-image">
      <h1>Welcome to Your Campus Lost & Found</h1>
      </div>
      </div>

      <div class="container search-row py-2 my-5 rounded">
    <form action="user_page.php" method="GET" class="row">
        <div class="col-lg-10">
            <input class="form-control" type="text" name="search" placeholder="Search the lost item?" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        </div>
        <div class="col-lg-2">
            <button class="btn btn-block btn-primary rounded-pill" type="submit">Search</button>
        </div>
    </form>
</div>
  

  <!--browse by category-->

  <div class="container">
    <section class="border bg-white rounded shadow-sm py-2">
      <div class="category text-center">
        <h5>Browse By Category</h5>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:70px">
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=gadgets" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/mobile.png" style="width: 60px;" class="mb-2">
            <h6>Gadgets</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=bags" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/bags.jpg" style="width: 60px;" class="mb-2">
            <h6>Bags</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=document" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/document.jpg" style="width: 60px;" class="mb-2">
            <h6>Documents</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=accessories" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/accessories.png" style="width: 60px;" class="mb-2">
            <h6>Accessories</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=jewelry" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/jewelery.jpg" style="width: 60px;" class="mb-2">
            <h6>Jewelry</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=watch" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/watches.jpg" style="width: 60px;" class="mb-2">
            <h6>Watch</h6>
          </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=cards" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/Identity cards.jpg" style="width: 60px;" class="mb-2">
            <h6>Identity Cards</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=laptop" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/laptop.png" style="width: 60px;" class="mb-2">
            <h6>Laptop</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=keys" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/keys.png" style="width: 60px;" class="mb-2">
            <h6>Keys</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=shoes" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/shoes.png" style="width: 60px;" class="mb-2">
            <h6>Shoes</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=cloth" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/clothes.jpg" style="width: 60px;" class="mb-2">
            <h6>clothes</h6>
          </div>
          </a>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-6 text-center border">
          <a href="user_page.php?category=more" style="text-decoration: none; display: block;">
          <div class="d-flex flex-column align-items-center text-dark">
            <img src="/lost&found/category_images/more.png" style="width: 60px;" class="mb-2">
            <h6>More</h6>
          </div>
          </a>
        </div>
      </div>
    </div>
    </section>
  </div>

  <br>
  <br>
  
   <!-- Main Content Area -->
   <div class="container">
   <h3 class="text-center">Lost and Found Items</h3>
    <hr class="mx-auto bg-primary border-primary opacity-100" style="width:150px">

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

echo '<a href="post_details.php?post_id=' . $row['id'] . '" class="btn btn-block btn-primary">Details</a>';

                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>


  <!-- how to register -->

  <div class="container">
  <section class="border bg-white rounded shadow-sm  mx-0">
  <div class="text-center py-3">
    <h3>How to Post</h3>
    <hr class="mx-auto bg-primary border-primary opacity-100" style="width:80px">
  </div>
  <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="hoverable-box">
              <div class="box-icon">
                  <i class="fa fa-user"></i>
              </div>
              <div class="box-heading">Step 1: Register with us</div>
              <p>Don't know how to deal with lost or found items near you? Register with your name and email address. If you have registered already, you can use the same account for posting unlimited posts.</p>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="hoverable-box">
              <div class="box-icon">
                  <i class="fa fa-check-circle"></i>
              </div>
              <div class="box-heading">Step 2: Verify your account</div>
              <p>Confirm your registration through the verification link which has sent to the given email address and then you can manage the account details now. Use either username or email address for login to your account.</p>
          </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="hoverable-box">
              <div class="box-icon">
                  <i class="fa fa-bullhorn"></i>
              </div>
              <div class="box-heading">Step 3: Start reporting</div>
              <p>You can start creating the post for the lost or found items now to claim the item or hand over it to the rightful owner. Once done, we will post the ad on the large community where everybody can potentially take action in searching for what you have lost.</p>
          </div>
      </div>
  </div>
</section>
<section class="bg-white rounded shadow-sm">
  <p class="read-more rounded mt-5 py-5">Your personal information will not be disclosed with anyone.   
  <a href="privacy_policy.php"><button class="btn btn-primary rounded-pill">Read More</button></a>
  </p>
</section>
</div>
      </div>

    <?php 
        include_once "inc/top.php";
    ?>
    
    <?php
        include_once "inc/footer.php";
    ?>

</body>
</html>