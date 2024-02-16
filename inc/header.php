<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
          include_once "inc\head_links.php";
    ?>
    <style>

  body, nav {
   margin: 0;
   padding: 0;
}

  .navbar{
    background-color: #0b006b;
  }

  .navbar-brand{
    color: #041F60 !important;
    font-weight: bolder;
    font-family: 'Arial';
  }

.navbar-nav a.nav-link {
    color: #fff !important;
    font-weight: bolder; 
    text-align:center;
    background-color:#0b006b;
    border-radius:5px;
    transition: 0.1s; 
}

.navbar-nav a.nav-link:hover {
    color: #fff !important;
    font-weight: bolder;
    background-color:rgba(134, 150, 254,0.5);
    text-shadow: 2px 2px 5px #000;
    border-radius:45px;
    transition: 0.1s; 
}

    </style>

</head>
<body>

    <!--navigation bar-->
    
  <nav class="navbar navbar-expand-lg  sticky-top">
    <div class="container">
    <a class="navbar-brand" href="user_page.php">
         <img src="images\logo1.png" alt="Logo" style="width:8rem;">
    </a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
       <span class="fa fa-bars fa-lg mt-2 text-white"></span>
     </button>
   
     <div class="collapse navbar-collapse" id="navb">
       <ul class="navbar-nav mx-auto">
         <li class="nav-item ">
           <a class="nav-link" href="user_page.php">Home</a>
         </li>
         <li class="nav-item ">
           <a class="nav-link" href="l&f_items.php">Lost & Found Items</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="post.php">Post an Item</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
       </ul>
       
       <ul class="navbar-nav">
        <li class="nav-item">
           <a class="nav-link" href="register_form.php">Register</a>
         </li>
         <li class="nav-item">
          <a class="nav-link" href="login_form.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
       </ul>
     </div>
    </div>
   </nav>
    
</body>
</html>