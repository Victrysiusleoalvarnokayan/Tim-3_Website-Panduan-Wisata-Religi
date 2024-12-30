<?php
include 'koneksi.php';

// Cek koneksi
if (!$koneksi) {
    die("Gagal konek: " . mysqli_connect_error());
}

// Query data dari tabel object_wisata
$sql = "SELECT * FROM tempat_ziarah";
$result = mysqli_query($koneksi, $sql);

// Inisialisasi array untuk menyimpan data
$data = [];

// Jika ada data, simpan ke array
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

// Tutup koneksi
mysqli_close($koneksi);

// Data sudah ada di array $data dan siap digunakan
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tempat Sejarah - Serenity Trails</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Great+Vibes&display=swap"
    rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Peta Wisata - Jelajahi berbagai destinasi wisata religi di Batam.">
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
      <h1 class="text-4xl font-bold font-roboto text-black" style="text-align: center;">Tempat Ziarah</h1>
      <p class="text-xl font-light text-black" style="text-align: center">Jelajahi berbagai destinasi wisata</p>

    <div class="grid-container">
      <?php foreach ($data as $row): ?>
        <!-- Destinasi 1 -->
        <div class="grid-item">
          <img src="<?= htmlspecialchars($row['foto']); ?>" alt="<?= htmlspecialchars($row['nama_tempat']); ?>">
          <h2><?= htmlspecialchars($row['nama_tempat']);?></h2>
          <p>Telepon: <?= htmlspecialchars($row['telepon']); ?></p>
          <p>Pengelola: <?= htmlspecialchars($row['pic']); ?></p>
          <p><?= htmlspecialchars($row['informasi']); ?></p>
          <a href="<?= htmlspecialchars($row['koordinat']); ?>" target="_blank">Lihat Maps</a>
          </a>
        </div>
      <?php endforeach; ?>

    </div>