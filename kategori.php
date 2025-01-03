<?php
// Kategori
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kategori Destinasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&amp;family=Great+Vibes&amp;display=swap"rel="stylesheet" />
    <link rel="stylesheet" href="css/kategori_style.css">
    <?php

        include('header.php');

    ?>
</head>
<body>
    <div class="content">
        <h1>KATEGORI WISATA</h1>
    </div>
    <div class="content">
        <div class="card">
            <img alt="Tempat Ibadah Kota Batam" height="200" src="img/ibadah.jpg" width="300"/>
            <h2><a href="tempat_ibadah.php">Tempat Ibadah Kota Batam</h2></a>
            <p>Anda akan diberitahu tentang tempat ibadah di batam mulai dari islam, kristen, hindu, dan budha juga mengetahui info tentang bangunan tempat ibadah tersebut.</p>
        </div>
        <div class="card">
            <img alt="Tempat Ziarah Kota Batam" height="200" src="img/makam_raja_nong_isa.jpg" width="300"/>
            <h2><a href="tempat_ziarah.php">Tempat Ziarah Kota Batam</h2></a>
            <p>Anda akan melihat tempat ziarah yang biasa dikunjungi untuk wisata religi khususnya di kota Batam yang sudah cukup terkenal dan kerap di kunjungi jelang Hari Jadi Kota Batam.</p>
        </div>
        <div class="card">
            <img alt="Tempat Sejarah Kota Batam" height="200" src="img/sejarah.jpg" width="300"/>
            <h2><a href="tempat_sejarah.php">Tempat Sejarah Kota Batam</h2></a>
            <p>Kami memberikan anda referensi terkait wisata religi di kota Batam salah satunya adalah museum raja ali haji yang berada di pusat kota batam yang dapat anda lihat tempat sejarah di Kota Batam.</p>
        </div>
    </div>
</body>
</html>