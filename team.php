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

    <title>Development Team - Your Campus Lost & Found</title>

    <?php
          include_once "inc\head_links.php";
    ?>
    
    <style>

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #0b006b;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .team-member {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #79A9F5;
            margin: 40px;
            margin-left:20px;
            padding:20px;
            padding-bottom: 30px; 
            padding-top:20px; 
            background-color: white;
            border-radius: 20px; 
            width: 85%;
            max-width: 500px; 
        }

        .team-member:hover {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #79A9F5;
            margin: 40px; 
            margin-left:20px;
            padding:20px;
            padding-bottom: 30px; 
            padding-top:20px;
            background-color: white;
            border-radius: 20px; 
            width: 85%;
            max-width: 500px;
            box-shadow: 2px 2px 5px 5px #dbe7fc;
            transition: 0.3s;
            transform:scale(1.01);
        }

        .team-member img {
            width: 200px; 
            height: 200px; 
            border-radius: 10px;
            margin-bottom: 10px;
            object-fit:cover;
            object-position:top;
            
        }

        .team-member-details {
            text-align: center;
            margin-top: 30px; 
        }

        .team-member h2 {
            margin: 0;
            margin-bottom: 15px;
            color:#3a1835; 
        }

        .team-member p {
            margin-bottom: 15px;
            color:#1863D6; 
        }

        .team-member button {
            padding: 10px 55px; 
            background-color:#0b006b;
            color: white;
            font-size:15px;
            font-weight:bold;
            border: none;
            border-radius: 8px; 
            cursor: pointer;
            transition:0.3s;
        }

        .team-member button:hover {
            padding: 10px 55px; 
            background-color: #8696fe;
            color: #0b006b;
            font-weight:bold;
            border: none;
            border-radius: 8px; 
            cursor: pointer;
        }

    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const teamContainer = document.getElementById('team-container');

            const teamMembers = [
                { name: 'Aman Kumar', role: 'Web Developer', photo: 'images/pic.png', linkedin: 'https://www.linkedin.com/in/aman-kumar-54244b253/' },
            ];

            teamMembers.forEach(member => {
                const memberDiv = document.createElement('div');
                memberDiv.classList.add('team-member');

                const photo = document.createElement('img');
                photo.src = member.photo;
                photo.alt = `${member.name}'s Photo`;

                const detailsDiv = document.createElement('div');
                detailsDiv.classList.add('team-member-details');

                const nameHeading = document.createElement('h2');
                nameHeading.textContent = member.name;

                const roleParagraph = document.createElement('p');
                roleParagraph.textContent = member.role;

                const button = document.createElement('button');
                button.textContent = 'See Profile';
                button.onclick = function () {
                    window.location.href = member.linkedin;
                };

                detailsDiv.appendChild(nameHeading);
                detailsDiv.appendChild(roleParagraph);

                memberDiv.appendChild(photo);
                memberDiv.appendChild(detailsDiv);
                memberDiv.appendChild(button);

                teamContainer.appendChild(memberDiv);
            });
        });
    </script>
</head>
<body>

    <header>
        <h1>Our Team</h1>
    </header>

    <div id="team-container"></div>

</body>
</html>












































<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Development Team - Your Campus Lost & Found</title>

    <?php
        include_once "inc\head_links.php";
    ?>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #0b006b;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .team-members-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .team-member {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #79A9F5;
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 20px;
            width: 25%; /* Adjust the width to fit three cards in one row */
            max-width: 300px;
            box-shadow: 2px 2px 5px 5px #dbe7fc;
            transition: 0.3s;
            cursor: pointer;
        }

        .team-member:hover {
            transform: scale(1.05);
        }

        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 10px;
            margin-bottom: 10px;
            object-fit: cover;
            object-position: top;
        }

        .team-member-details {
            text-align: center;
            margin-top: 20px;
        }

        .team-member h2 {
            margin: 0;
            margin-bottom: 10px;
            color: #3a1835;
        }

        .team-member p {
            margin-bottom: 15px;
            color: #1863D6;
        }

        .team-member button {
            padding: 8px 20px;
            background-color: #0b006b;
            color: white;
            font-size: 14px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .team-member button:hover {
            background-color: #8696fe;
            color: #0b006b;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const teamContainer = document.getElementById('team-container');

            const teamMembers = [
                { name: 'Aman Kumar', role: 'Web Developer', photo: 'images/pic.png', linkedin: 'https://www.linkedin.com/in/aman-kumar-54244b253/' },
                { name: 'Aman Kumar', role: 'Web Developer', photo: 'images/pic.png', linkedin: 'https://www.linkedin.com/in/aman-kumar-54244b253/' },
                { name: 'Aman Kumar', role: 'Web Developer', photo: 'images/pic.png', linkedin: 'https://www.linkedin.com/in/aman-kumar-54244b253/' },
            ];

            teamMembers.forEach(member => {
                const memberDiv = document.createElement('div');
                memberDiv.classList.add('team-member');

                const photo = document.createElement('img');
                photo.src = member.photo;
                photo.alt = `${member.name}'s Photo`;

                const detailsDiv = document.createElement('div');
                detailsDiv.classList.add('team-member-details');

                const nameHeading = document.createElement('h2');
                nameHeading.textContent = member.name;

                const roleParagraph = document.createElement('p');
                roleParagraph.textContent = member.role;

                const button = document.createElement('button');
                button.textContent = 'See Profile';
                button.onclick = function () {
                    window.location.href = member.linkedin;
                };

                detailsDiv.appendChild(nameHeading);
                detailsDiv.appendChild(roleParagraph);

                memberDiv.appendChild(photo);
                memberDiv.appendChild(detailsDiv);
                memberDiv.appendChild(button);

                teamContainer.appendChild(memberDiv);
            });
        });
    </script>
</head>
<body>

    <header>
        <h1>Our Team</h1>
    </header>

    <div id="team-container" class="team-members-container"></div>

</body>
</html> --> 
