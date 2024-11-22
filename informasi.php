<?php
//php
?>
<!Doctype html>
<html lang="en">

<head>
    <title>Serenity Trails</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap"
        rel="stylesheet" />
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: burlywood;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .header {
          background-color: #000;
          color: #fff;
          padding: 10px 0;
          text-align: center;
          position: relative;
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
    
        .header img {
          height: 50px;
          margin-left: 20px;
        }
    
        .header nav {
          display: flex;
          justify-content: center;
          flex-grow: 1;
        }
    
        .header nav a {
          color: #fff;
          text-decoration: none;
          margin: 0 15px;
          font-size: 18px;
          font-weight: 700;
        }
    
        .header .user-icon {
          margin-right: 20px;
        }
    
        .header .user-icon i {
          font-size: 30px;
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

        .content {
            display: flex;
            justify-content: space-around;
            padding: 30px;
        }

        .content .column {
            width: 20%;
            background-color: black;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .content .column h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .column a {
            color: white;
            text-decoration: none;
        }

        .column a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
  <div class="header">
    <img alt="Serenity Trails Logo" height="50" src="serenity.jpeg" width="100"/>
        <nav>
            <a href="landing page.php">Home</a>
            <a href="kategori.php">Category</a>
            <a href="destinasi.php">Destination</a>
            <a href="informasi.php">Information</a>
        </nav>
    <div class="user-icon">
        <i class="fas fa-user-circle"></i>
        <a href="Menu_Login.php"><img alt="user-icon" src="image.jpeg">
    </div>
</div>

    <div class="content">
        <div class="column">
            <h2><a href="event.php">Event</a></h2>
        </div>
        <div class="column">
            <h2>Foto/Video Tempat Wisata</h2>
        </div>
        <div class="column">
            <h2><a href="panduan.php">Panduan Wisata</a></h2>
        </div>
        <div class="column">
            <h2>Ulasan</h2>
        </div>
    </div>

</body>
</html>
