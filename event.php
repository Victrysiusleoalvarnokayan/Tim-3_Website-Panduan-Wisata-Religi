<?php
// event
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime List</title>
  <style>
    body {
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

    .event-list {
      text-align: center;
      padding: 20px;
    }

    .horizontal-scroll {
      width: 100%;
      overflow-x: scroll;
      scrollbar-color: transparent transparent;
      scroll-snap-type: x mandatory;
    }

    .horizontal-scroll::-webkit-scrollbar {
      display: none;
    }

    .container {
      display: flex;
      width: max-content;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .event-card {
      scroll-snap-align: center;
      background-color: #1e1e1e;
      border-radius: 10px;
      overflow: hidden;
      width: 180px;
      aspect-ratio: 11/16;
      position: relative;
    }

    .event-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;

    }

    .event-card p {
      margin: 10px 0;
      font-size: 16px;
      font-weight: bold;
    }

    .event-card figcaption {
      position: absolute;
      bottom: -3rem;
      background-color: rgba(0, 0, 0, 0.76);
      padding: 1rem 0;
      width: 100%;
      text-align: center;
      transition: all 200ms;
    }

    .event-card:hover figcaption {
      bottom: 0;

    }

    .event-card a {
      color: white;
      text-decoration: none;
    }

    .event-card a:hover {
      color: white;
      text-decoration: underline;
    }
  </style>

</head>

<body>
  <div class="header">
    <img alt="Serenity Trails Logo" height="50" src="serenity.jpeg" width="100"/>
        <nav>
            <a href="home.html">Home</a>
            <a href="Kategori.html">Category</a>
            <a href="destinasi.html">Destination</a>
            <a href="informasi.html">Information</a>
        </nav>
    <div class="user-icon">
        <i class="fas fa-user-circle"></i>
        <a href="Menu_Login.html"><img alt="user-icon" src="image.jpeg">
    </div>
</div>
  <div class="event-list">
    <h1>Event</h1>
    <div class="horizontal-scroll">
      <div class="container">
        <figure class="event-card">
          <img src="dharmasanti.jpg" alt="Darmasanti Waisak 2568 BE">
          <figcaption><a
              href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">Darmasanti
              Waisak></a></figcaption>
        </figure>
        <figure class="event-card">
          <img src="pawai tatung.jpg" alt="Vihara Cipta Darma, Seipanas, Vihara Budi Bakti">
          <figcaption>Pawai Tatung</figcaption>
        </figure>
        <figure class="event-card">
          <img src="maulid nabi masjid agung.jpg" alt="Maulid Nabi">
          <figcaption>Maulid Nabi</figcaption>
        </figure>
        <figure class="event-card">
          <img src="gua maria teluk dalam.jpg" alt="Penutupsn Bulan Rosario">
          <figcaption>Penutupan Bulan Rosario</figcaption>
        </figure>
        <figure class="event-card">
          <img src="paduan suara.jpeg" alt="Pesta Paduan Suara Pasprawi">
          <figcaption>Pesta Pasprawi</figcaption>
        </figure>
        <figure class="event-card">
          <img src="pembinaan.jpg" alt="Moderasi Beragama">
          <figcaption>Moderasi Beragama</figcaption>
        </figure>
        <figure class="event-card">
          <img src="kalam kudus.jpeg" alt="Open House Kalam Kudus">
          <figcaption>Open House</figcaption>
        </figure>
      </div>
    </div>
  </div>
</body>

</html>