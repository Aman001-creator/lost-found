<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
          include_once "inc\head_links.php";
    ?>
    
    <style>
  footer {  
    background:#0b006b;  
     color: #4942e4;  
     margin-top:100px;  
  }  

  footer h4{
    color: #fff;
  }
  
  footer a {  
     color: #fff;  
     font-size: 14px;  
     transition-duration: 0.2s;  
  }
  
  footer a:hover {  
     color: #c4b0ff;  
     text-decoration: none;  
  }  
  
  .copy {  
     font-size: 12px;  
     padding: 10px;  
     border-top: 1px solid #fff;  
  }  
  
  .footer-middle {  
     padding-top: 2em;  
     color: white;  
  }  
   
  ul.social-network {  
     list-style: none;  
     display: inline;  
     margin-left: 0 !important;  
     padding: 0;  
  }  
  
  ul.social-network li {  
     display: inline;  
     margin: 0 5px;  
  }  
     
  .social-network a.icoFacebook:hover {  
     background-color: #3B5998;  
  }  
  
  .social-network a.icoTwitter:hover {  
     background-color: #08a5df;  
  }  
  .social-network a.icoTwitter:hover i {  
     color: #fff;  
  }  
  
  .social-network a.icoLinkedin:hover {  
     background-color: #007bb7;  
  }  
  
  .social-network a.icoFacebook:hover i {  
     color: #fff;  
  }  
  
  .social-network a.icoLinkedin:hover i {  
     color: #fff;  
  }  
   
  .social-network a.socialIcon:hover {  
     color: #44BCDD;  
  }  
   
  .socialHoverClass {  
     color: #44BCDD;  
  }  
   
  .social-circle li a {  
     display: inline-block;  
     position: relative;  
     margin: 0 auto 0 auto;  
     -moz-border-radius: 50%;  
     -webkit-border-radius: 50%;  
     border-radius: 50%;  
     text-align: center;  
     width: 30px;  
     height: 30px;  
     font-size: 15px;  
  }  
  
  .social-circle li i {  
     margin: 0;  
     line-height: 30px;  
     text-align: center;  
  }
  
  .social-circle li a:hover i{  
     -moz-transform: rotate(360deg);  
     -webkit-transform: rotate(360deg);  
     -ms--transform: rotate(360deg);  
     transform: rotate(360deg);  
     -webkit-transition: all 0.2s;  
     -moz-transition: all 0.2s;  
     -o-transition: all 0.2s;  
     -ms-transition: all 0.2s;  
     transition: all 0.2s;  
  }  
  
  .triggeredHover {  
     -moz-transform: rotate(360deg);  
     -webkit-transform: rotate(360deg);  
     -ms--transform: rotate(360deg);  
     transform: rotate(360deg);  
     -webkit-transition: all 0.2s;  
     -moz-transition: all 0.2s;  
     -o-transition: all 0.2s;  
     -ms-transition: all 0.2s;  
     transition: all 0.2s;  
  }  
   
  .social-circle i {  
     color: #595959;  
     -webkit-transition: all 0.8s;  
     -moz-transition: all 0.8s;  
     -o-transition: all 0.8s;  
     -ms-transition: all 0.8s;  
     transition: all 0.8s;  
  }  
   
  .social-network a {  
     background-color: #F9F9F9;  
  }
  
  .social-network a:hover {  
   background: #ff304d;  
  } 

    </style>

</head>
<body>

     <!--footer-->

  <footer class="mainfooter" role="content">  
    <div class="footer-middle">  
    <div class="container">  
      <div class="row">  
        <div class="col-md-3 col-sm-6">  
          <div class="footer-pad">  
            <h4>Campus Lost & Found</h4>  
            <ul class="list-unstyled">   
              <li> <a href="l&f_items.php">Lost Items</a></li>  
              <li> <a href="l&f_items.php">Found Items</a></li>  
              <li> <a href="l&f_items.php">Claim Items</a></li>  

<li><a href="my_posts.php">My Posts</a></li>

            </ul>  
          </div>  
        </div>  
        <div class="col-md-3 col-sm-6">  
          <div class="footer-pad">  
            <h4>About Us</h4>  
            <ul class="list-unstyled">  
              <li><a href="term_&_cond.php">Terms & Condition</a></li>
              <li><a href="team.php">Development Team</a> </li>    
              <li><a href="privacy_policy.php">Privacy Policy</a></li>  
              <li><a href="faqs.php">FAQs</a></li>   
            </ul>  
          </div>  
        </div>  
        <div class="col-md-3 col-sm-6">  
          <div class="footer-pad">  
            <h4>Latest Updates</h4>  
            <ul class="list-unstyled">  
              <li> <a href="underconstruction.php"> Sep 2023 </a> </li>  
              <li> <a href="underconstruction.php"> Oct 2023 </a> </li>  
              <li> <a href="underconstruction.php"> Nov 2023</a> </li>  
              <li> <a href="underconstruction.php"> Dec 2023 </a> </li>   
            </ul>  
          </div>  
        </div>  
          <div class="col-md-3">  
              <h4> Follow Us </h4>  
              <ul class="social-network social-circle">  
               <li> <a href="https://www.facebook.com/vgi.greaternoida/" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a> </li>  
               <li> <a href="https://in.linkedin.com/school/vishveshwarya/" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a> </li>  
               <li> <a href="https://twitter.com/vgigreaternoida" class="icoTwitter" title="Twitter"> <i class="fa fa-twitter"> </i> </a> </li>
               <li> <a href="https://www.vgi.ac.in/" class="icoGooglePlus" title="Google Plus"> <i class="fa fa-google-plus-official"> </i> </a> </li>
      <li> <a href="https://www.youtube.com/channel/UCDsxIWVZQ05UcUF8_Ojp2ug"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a> </li>  
              </ul>               
      </div>  
      </div>  
      <div class="row">  
      <div class="col-md-12 copy">  
      <p class="text-center text-white"> © Copyright 2024 -- Third Eye - Your Campus Lost & Found. <br>  All rights reserved. </p>  
      </div>  
      </div>  
    </div>  
    </div>  
  </footer>  

    
</body>
</html>