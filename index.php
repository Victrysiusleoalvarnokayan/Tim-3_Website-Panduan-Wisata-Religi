<?php
//php
?>
<!Doctype html>
<html lang="en">

<head>
    <title>Serenity Trails</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(Home.jpg);
            background-size: cover;
            background-position: center;
        }

        header {
            background-color: black;
            color: #fff;
            height: 65px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;
        }

        .logo img {
            width: 150px;
            height: auto;
            border-radius: 40%;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .user img {
            width: 35px;
            height: 35px;
            border-radius: 17.5px;
        }
    </style>
</head>
<header>
    <div class="header">
        <?php

        include('header.php');
    
        ?>
    <div>
</header>
<div class="container mx-auto relative z-10 text-center py-32">
    <h1 class="text-6xl font-bold font-roboto" style="color: black; ">Temukan keindahan Dan Kedamaian Di Berbagai Destinasi Religi Di Kota Batam</h1>
    <p class="mt-4 text-xl font-great-vibes" style="color: black">Official Team Serenity Trails</p>
</div>

    
</body>
</html>