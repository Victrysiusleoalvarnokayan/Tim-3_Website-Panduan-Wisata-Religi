<?php
include 'koneksi.php';

// Cek koneksi
if (!$koneksi) {
    die("Gagal konek: " . mysqli_connect_error());
}

// Inisialisasi variabel untuk menyimpan data
$events = [];
$error_message = "";

// Cek apakah parameter nama_tempat ada di URL
if (isset($_GET['nama_tempat'])) {
    // Ambil nama_tempat dari URL
    $nama_tempat = mysqli_real_escape_string($koneksi, $_GET['nama_tempat']);

    // Query untuk mengambil event berdasarkan nama_tempat
    $query = "SELECT e.id_event, e.nama_event, e.waktu, e.pic, e.harga_tiket, e.foto, o.nama_tempat
              FROM event e
              JOIN object_wisata o ON e.id_event = o.id_wisata
              WHERE o.nama_tempat = '$nama_tempat'";

    $result = mysqli_query($koneksi, $query);

    // Simpan data hasil query ke dalam array
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $events[] = $row;
        }
    } else {
        $error_message = "Tidak ada event untuk tempat ini.";
    }
} else {
    $error_message = "Nama tempat tidak ditemukan.";
}

// Tutup koneksi
mysqli_close($koneksi);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Event Tempat Ibadah</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php

  include('header.php');

  ?>
  <style>

    nav {
      position: relative;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      padding: 20px;
    }

    .grid-item {
      background: white;
      color: black;
      text-align: center;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow :hidden;
      text-overflow: ellipsis;

    }

    .grid-item:hover {
      background-color: #deb887;
      transform: scale(1.05);
      transition: 0.3s;
    }

    .grid-item img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .grid-item h3 {
      margin-top: 10px;
      font-size: 1.25rem;
    }

    .grid-item a {
      text-decoration: none;
      cursor: pointer;
      color: black;
    }

    .grid-item a:hover {
      text-decoration: underline;
      color: aqua;
    }
  </style>
</head>
<style>
  body {
    background-image: url('https://hidayatullah.com/wp-content/uploads/2022/09/Pluralisme-agama-semua-agama-tidak-sama.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #fff;
  }
</style>
<body class="bg-burlywood text-white">
  <main>
    <h1 class="text-4xl font-bold font-roboto text-black" style="text-align: center;">Event Tempat Ibadah</h1>
    <p class="text-xl font-light text-black" style="text-align: center;">Jelajahi berbagai event menarik</p>

    <div class="grid-container">
    <?php if (!empty($events)): ?>
        <?php foreach ($events as $row): ?>
          <div class="grid-item">
            <img src="<?= htmlspecialchars($row['foto']); ?>" alt="<?= htmlspecialchars($row['nama_tempat']); ?>">
            <h2><?= htmlspecialchars($row['nama_event']); ?></h2>
            <p>Waktu:  <?= htmlspecialchars($row['waktu']); ?></p>
            <p>Tempat: <?= htmlspecialchars($row['nama_tempat']); ?></p>
            <p>PIC: <?= htmlspecialchars($row['pic']); ?></p>
            <p>Tiket: <?= htmlspecialchars($row['harga_tiket']); ?></p>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p><?= htmlspecialchars($error_message); ?></p>
      <?php endif; ?>
    </div>
  </main>
</body>
</html>