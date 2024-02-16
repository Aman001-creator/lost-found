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
    
    <title>Privacy Policy - Your Campus Lost & Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>

    <style>

        h1 {
            text-align:center;
            color: #333;
        }

        section {
            max-width: 1200px;
            margin: 0 auto;
        }

        p {
            color: #666;
        }

        
    </style>
</head>
<body>

    <?php 
        include "inc/header.php";
    ?>

    <div class="container mt-5">
        <section>
        <h1>Privacy Policy</h1>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:75px">
        <p>Last Updated: [Today]</p>

        <p>Welcome to the Your Campus Lost & Found Website. This Privacy Policy outlines how we collect, use, and protect your personal information. By using our website, you agree to the terms of this Privacy Policy.</p>

        <h4>1. Information We Collect</h4>
        <p>1.1 <strong>Personal Information</strong></p>
        <p>We may collect personal information such as name, email address, contact details, and other relevant information when you register on our website or submit reports for lost or found items.</p>

        <p>1.2 <strong>Non-Personal Information</strong></p>
        <p>We may automatically collect non-personal information, including but not limited to, your IP address, browser type, device information, and usage data for analytics and website improvement purposes.</p>

        <h4>2. How We Use Your Information</h4>
        <p>2.1 <strong>Personal Information</strong></p>
        <p>We use personal information to facilitate the lost and found process, including contacting users regarding their reports, providing updates, and ensuring the proper functioning of the service.</p>

        <p>2.2 <strong>Non-Personal Information</strong></p>
        <p>We use non-personal information for analytical purposes to understand user behavior, improve our website, and enhance the overall user experience.</p>

        <h4>3. Information Sharing and Disclosure</h4>
        <p>3.1 Your personal information will not be shared with third parties without your explicit consent, except as required by law.</p>
        <p>3.2 Non-personal information may be shared for analytical purposes with third-party services, but it will not be linked to your personal identity.</p>

        <h4>4. Cookies</h4>
        <p>4.1 We use cookies to enhance your experience on our website. You can disable cookies in your browser settings, but it may affect the functionality of certain features.</p>

        <h4>5. Security</h4>
        <p>5.1 We take appropriate measures to secure your personal information. However, no method of transmission over the internet or electronic storage is 100% secure.</p>

        <h4>6. Changes to this Privacy Policy</h4>
        <p>6.1 We reserve the right to update or change our Privacy Policy at any time. The latest version will be posted on this page, and the effective date will be updated accordingly.</p>

        <h4>7. Contact Information</h4>
        <p>7.1 For questions or concerns regarding this Privacy Policy, please contact [Third Eye] at [thirdeye@gmail.com].</p>

        <p>By using the Your Campus Lost & Found Website, you acknowledge that you have read, understood, and agree to be bound by this Privacy Policy.</p>
    </section>
    </div>

    <?php 
        include_once "inc/top.php";
    ?>
    
    <?php
        include_once "inc/footer.php";
    ?>

</body>
</html>