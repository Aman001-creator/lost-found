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
    
    <title>About Us - Your Campus Lost and Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>

    <style>

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        section {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
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

    <div class="container mt-5">

    <header>
        <h1>About Us</h1>
        <hr class="mx-auto bg-primary border-primary opacity-100" style="width:50px">
    </header>

    <section>
        <h2>Our Story</h2>
        <p>Founded with the belief that technology can simplify the process of retrieving lost items, "Your Campus Lost and Found" was born out of a desire to make a positive impact on the daily lives of students, faculty, and staff. We envisioned a centralized hub where lost items could be easily reported, found items could be quickly matched with their owners, and the campus community could come together to create a more connected and supportive environment.</p>

        <h2>What Sets Us Apart</h2>
        <p><strong>User-Friendly Platform:</strong> Our intuitive platform ensures a smooth experience for both those who have lost items and those who have found them.</p>
        <p><strong>Efficient Matching System:</strong> Powered by advanced algorithms, our matching system helps expedite the process of reuniting lost items with their owners. This means less time spent worrying about lost belongings and more time focusing on what matters most to you.</p>
        <p><strong>Community Collaboration:</strong> "Your Campus Lost and Found" thrives on the collaborative spirit of the campus community. Users can engage with each other through our platform, sharing information and updates to increase the chances of reuniting lost items with their owners.</p>

        <h2>How It Works</h2>
        <ol>
            <li><strong>Report a Lost Item:</strong> If you've lost something on campus, simply log in to our platform, provide details about the lost item, and let our system start its search.</li>
            <li><strong>Find a Lost Item:</strong> If you've found an item, report it on our platform, and our system will work to connect you with the rightful owner.</li>
            <li><strong>Reconnect with Your Belongings:</strong> Once a match is made, we facilitate the secure return of your lost item, ensuring a hassle-free reunion.</li>
        </ol>

        <h2>Join Us in Building a Connected Campus</h2>
        <p>"Your Campus Lost and Found" is more than just a platform; it's a community-driven initiative aimed at making campus life a little bit easier for everyone. Join us in fostering a sense of unity and responsibility on your campus.</p>

        <p>We believe that together, we can turn lost into found and build a campus where everyone feels supported and connected. Welcome to "Your Campus Lost and Found" – where lost items find their way back home.</p>
        <p>Learn more about the talented <a href="team.php">Developers</a> behind "Your Campus Lost and Found."</p>
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
