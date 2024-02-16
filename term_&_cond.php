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

    <title>Terms and Conditions - Your Campus Lost & Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>

    <style>
        section {
            max-width: 1200px;
            margin: 0 auto;
        }

    </style>

</head>
<body>

    <?php 
        include_once "inc/header.php";
    ?>

    <div class="container my-5">
        <h1 class="text-center">Terms and Conditions</h1>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:160px">
        <section>
        <p>Last Updated: [Today]</p>

        <p>Welcome to the Your Campus Lost & Found Website. By using this website, you agree to comply with and be bound by the following Terms and Conditions. Please read these terms carefully before using the website.</p>

        <h4>1. Acceptance of Terms</h4>
        <p>By accessing or using the Your Campus Lost & Found Website, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not use the website.</p>

        <h4>2. Purpose of the Website</h4>
        <p>The Your Campus Lost & Found Website is designed to facilitate the recovery of lost items within the campus community. Users can submit reports for lost items or search for found items to reclaim their belongings.</p>

        <h4>3. Reporting Lost Items</h4>
        <p><strong>3.1</strong> Users are responsible for providing accurate and truthful information when reporting lost items.<br>
        <strong>3.2</strong> False reporting or misuse of the platform may result in disciplinary action.</p>
        <h4>4. Found Items</h4>
        <p><strong>4.1</strong> Users who find items are encouraged to report them on the website.<br>
        <strong>4.2</strong> Found items should be kept in a safe and secure location until claimed by the rightful owner.</p>

        <h4>5. Privacy</h4>
        <p><strong>5.1</strong> Personal information provided on the website will be handled in accordance with our Privacy Policy.<br>
        <strong>5.2</strong> Users are advised not to disclose sensitive information in public comments or messages.</p>

        <h4>6. Liability</h4>
        <p><strong>6.1</strong> Your Campus Lost & Found is not responsible for the loss or damage of items reported on the website.<br><strong>6.2</strong> Users are responsible for their interactions and transactions with other users.</p>

        <h4>7. Moderation</h4>
        <p><strong>7.1</strong> The website administrators reserve the right to moderate content and remove inappropriate or offensive material.<br><strong>7.2</strong> Users violating these Terms and Conditions may be suspended or banned from using the website.</p>

        <h4>8. Changes to Terms</h4>
        <p>Your Campus Lost & Found reserves the right to modify or update these Terms and Conditions at any time. Users will be notified of significant changes.</p>

        <h4>9. Contact Information</h4>
        <p>For questions or concerns regarding these Terms and Conditions, please contact Your Campus Lost & Found at [thirdeye@gmail.com].</p>

        <p>By using the Your Campus Lost & Found Website, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>
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
