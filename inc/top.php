<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
          include_once "inc\head_links.php";
    ?>

<style>
        #scrollTopBtn{
            display: none;
            position: fixed;
            bottom: 15px;
            right: 15px;
            z-index: 99;
            font-size: 16px;
            padding: 15px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        #scrollTopBtn:hover{
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <button id="scrollTopBtn" onclick="scrollToTop()" class="fa fa-arrow-up fa-2xl"></button>
    <script>
        document.addEventListener("DOMContentLoaded",function(){
            var scrollTopBtn = document.getElementById("scrollTopBtn");

            window.onscroll = function(){
                toggleScrollTopButton();
        };

        function toggleScrollTopButton(){
            if(document.body.scrollTop > 20 || document.documentElement.scrollTop >20){
                scrollTopBtn.style.display = "block";
            }
            else{
                scrollTopBtn.style.display = "none";
            }
        }

            function scrollToTop(){
                window.scrollTo({top:0, behaviour:"smooth"});
            }
            if(scrollTopBtn){
                scrollTopBtn.onclick = scrollToTop;
            }
        });

    </script>
</body>
</html>