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
    
    <title>FAQs - Your Campus Lost & Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>

    <style>

        section {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align:center;
            color: #333;
        }

        p {
            color: #666;
        }

        img {
            max-width: 100%;
            height: auto;
        }
        
    </style>
</head>
<body>

    <?php 
        include_once "inc/header.php";
    ?>

    <div class="container my-5">
        <section>
        <h1>Frequently Asked Questions</h1>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:200px"><br>
        <p>Here are some frequently asked questions about our lost and found service. If you have additional questions, feel free to <a href="contact.php"> contact us</a>.</p>

        <h4>1. What is the purpose of the Lost & Found service?</h4>
        <p>The Lost & Found service is designed to help individuals report and find lost items within the campus community. Users can submit reports for lost items or search for found items to reclaim their belongings.</p>

        <h4>2. How can I report a lost item?</h4>
        <p>To report a lost item, you need to register on the website and then navigate to the "Report Lost Item" section. Fill out the required information about the lost item, and submit the report.</p>

        <h4>3. Can I remain anonymous when reporting a lost item?</h4>
        <p>Yes, you can choose to remain anonymous when reporting a lost item. However, providing contact information may help in the recovery process if someone finds your item.</p>

        <h4>4. How do I search for found items?</h4>
        <p>To search for found items, go to the "Search Found Items" section on the website. You can use filters such as category, location, and keywords to narrow down the results.</p>

        <h4>5. What categories of items are supported?</h4>
        <p>We support a variety of categories including gadgets, bags, documents, accessories, jewelry, watches, pets, laptops, keys, shoes, clothes, and more.</p>

        <h4>6. How do I contact someone who found my lost item?</h4>
        <p>If someone has found your lost item and reported it on our platform, you can view their contact information in the details of the found item. Reach out to them directly to arrange the retrieval of your item.</p>

        <h4>7. Can I update or delete my lost item report?</h4>
        <p>Yes, if you have registered on the website, you can log in and go to the "My Reports" section to manage your lost item reports. From there, you can update or delete your reports as needed.</p>

        <h4>8. What should I do if I found an item?</h4>
        <p>If you found an item, please report it on our website. Provide accurate details about the item and where it was found. Keeping the item safe until the owner claims it is recommended.</p>

        <h4>9. Is there a time limit for claiming found items?</h4>
        <p>We recommend claiming found items as soon as possible. However, we typically hold items for a certain period, after which unclaimed items may be handled according to our policy.</p>

        <h4>10. Can I post multiple lost or found items?</h4>
        <p>Yes, registered users can submit multiple reports for lost or found items. There are no limitations on the number of reports you can submit.</p>

        <!-- Include additional FAQs as needed -->
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