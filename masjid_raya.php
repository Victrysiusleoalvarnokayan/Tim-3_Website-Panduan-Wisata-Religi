<?php

?>
<?php

?>
<html>
<head>
    <title>Masjid Raya Batam</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .logo {
            display: flex;
            align-items: center;
        }

        .navbar .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .navbar .menu {
            display: flex;
            gap: 20px;
        }

        .navbar .menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }

        .navbar .menu a:hover {
            text-decoration: underline;
        }

        .navbar .profile {
            font-size: 24px;
        }

        .hero {
            position: relative;
            text-align: center;
            color: white;
        }

        .hero img {
            width: 100%;
            height: auto;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero .title {
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            text-shadow: 1px 1px 0 black, -3px -3px 0 black
        }

        .hero .description {
            font-size: 16px;
            margin-top: 10px;
            max-width: 800px;
            text-align: left;
        }

        .hero .nav-arrows {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
        }

        .hero .nav-arrows i {
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img alt="Serenity Trails Logo" height="50"src="serenity.png" width="70" />
        </div>
        <div class="menu">
            <a href="#">Home</a>
            <a href="kategori.php">Category</a>
            <a href="#">Destination</a>
            <a href="#">Information</a>
        </div>
        <div class="profile">
            <i class="fas fa-user-circle">
            </i>
        </div>
    </div>
    <div class="hero">
        <img alt="Masjid Raya Kota Batam" height="150" src="masjid_agung.jpg" width="250" />
        <div class="overlay">
            <div class="title">MASJID SULTAN MAHMUD RIAYAT SYAH</div>
            <div class="description">
                Masjid Sultan Mahmud Riayat Syah adalah sebuah masjid megah yang terletak di Kota Batam, Provinsi
                Kepulauan Riau. Masjid ini menjadi salah satu ikon baru Kota Batam dan menjadi tujuan wisata religi yang
                menarik. Masjid Sultan Mahmud Riayat Syah adalah sebuah masjid yang patut dikunjungi baik bagi umat
                muslim maupun wisatawan. Kemegahan arsitektur, fasilitas yang lengkap, dan lokasinya yang strategis
                menjadikan masjid ini sebagai salah satu destinasi wisata religi yang menarik di Kota Batam.
            </div>
        </div>
        <div class="nav-arrows">
            <i class="fas fa-chevron-left"></i>
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
</body>

</html>