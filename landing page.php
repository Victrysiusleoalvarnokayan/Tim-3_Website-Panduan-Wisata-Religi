<?php
//php
?>
<!Doctype html>
<html lang="en">
<head>
  <title>Serenity Trails</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap" rel="stylesheet"/>
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
    border-radius: 17.5px;
}
</style>
  </style>
 </head>
 <body class="bg-black text-white">
  <header class="bg-black text-white py-4">
   <div class="container mx-auto flex justify-between items-center">
    <div class="flex items-center">
     <img src="serenity.jpeg" class="h-10" height="50"  width="50"/>
    </div>
    <nav class="space-x-8">
     <a class="text-white text-lg font-roboto" href="landing page.php">
      Home
     </a>
     <a class="text-white text-lg font-roboto" href="#">
        Category
       </a>
       <a class="text-white text-lg font-roboto" href="#">
        Destination
       </a>
       <a class="text-white text-lg font-roboto" href="informasi.php">
        Information
       </a>
      </nav>
      <div>
       <i class="fas fa-user-circle text-3xl">
       </i>
      </div>
     </div>
    </header>
    <main class="relative">
     <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('https://placehold.co/1920x1080');">
    </div>
    <div class="container mx-auto relative z-10 text-center py-32">
     <h1 class="text-6xl font-bold font-roboto" style="color: black; ">Temukan keindahan Dan Kedamaian Di Berbagai Destinasi Religi Di Kota Batam</h1>
     <p class="mt-4 text-xl font-great-vibes" style="color: black">Official Team Serenity Trails</p>
    </div>
   </main>
  </body>
 </html>
  
