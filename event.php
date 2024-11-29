<?php
// php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serenity Trails</title>
  <?php

  include('header.php');
    
  ?>
  <style>
     body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(img/pluralisme.jpg);
    background-size: cover;
    background-position: center;
    }

  

  .event-list {
    text-align: center;
    padding: 20px;
  }

  .event-list h1{
    color: black;
    text-decoration: none;
  }

  .event-list h1:hover{
    text-decoration: none;
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
    width: 100%;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
  }

  .event-card {
    scroll-snap-align: center;
    background-color: white;
    border-radius: 10px;
    overflow: hidden;
    width: 300px;
    height: 400px;
    aspect-ratio: 11/16;
    position: relative;
    margin:15px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .event-card:hover {
    transform: scale(1.05);
    transition: 0.3s;
    background-color: #deb887;
  }

  .event-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;

  }

  .event-card p {
    font-weight: bold;
    margin: 15px 0 5px;
    font-size: 15px;
  }

  .event-card figcaption {
    position: absolute;
    bottom: -3rem;
    background-color: rgba(0, 0, 0, 0);
    padding: 1rem 0;
    width: 100%;
    text-align: left;
    transition: all 200ms;
    color: white;
    visibility: hidden;
    opacity: 0;
  }

  .event-card:hover figcaption {
    bottom: 0;
    visibility: visible ;
    opacity: 1;
    pointer-events: none;
  }

  .event-card figcaption a {
    color: aqua;
    text-decoration: none;
    display: inline;
    pointer-events: auto;
  }

  .event-card figcaption a:hover {
    color: aqua;
    text-decoration: none;
    display: inline;
  }

  </style>
</head>

<body>
  
  <div class="event-list">
  <h1 class="text-4xl font-bold font-roboto text-black">Event</h1>
    <div class="horizontal-scroll">
      <div class="container">
        <figure class="event-card">
          <img src="img/dharmasanti.jpg" alt="Darmasanti Waisak 2568 BE">
          <figcaption>
            <p>Darmasanti Waisak</p>
            <p>Hari Tanggal: Sabtu, 08/06/2024</p>
            <p>Tempat: Maha Vihara Duta Maitreya</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/pawai tatung.jpg" alt="Vihara Cipta Darma, Seipanas, Vihara Budi Bakti">
          <figcaption>
            <p>Pawai Tatung</p>
            <p>Hari,Tanggal: Minggu, 15/09/2024</p>
            <p>Tempat</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/maulid nabi masjid agung.jpg" alt="Maulid Nabi">
          <figcaption>
            <p>Maulid Nabi</p>
            <p>Hari,Tanggal: Minggu, 15/09/2024</p>
            <p>Tempat : Masjid Agung</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/gua maria teluk dalam.jpg" alt="Penutupsn Bulan Rosario">
          <figcaption>
            <p></p>Penutupan Bulan Rosario
            <p>Hari,Tanggal : 27 OKtober 2024</p>
            <p>Tempat : Gua Maria Teluk Dalam</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/paduan suara.jpeg" alt="Pesta Paduan Suara Pasprawi">
          <figcaption>
            <p>Pesta Pasprawi</p>
             <p>Hari,Tanggal: Kamis, 12/09/2024</p>
            <p>Tempat: Hotel Pasific</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/pembinaan.jpg" alt="Moderasi Beragama">
          <figcaption>
            <p>Moderasi Beragama</p>
            <p>Hari,Tanggal: Kamis, 28/08/2024</p>
            <p>Tempat:  Aula Fauzi Mahbub</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
        <figure class="event-card">
          <img src="img/kalam kudus.jpeg" alt="Open House Kalam Kudus">
          <figcaption>
            <p>Open House</p>
            <p>Hari,Tanggal: Sabtu, 19/10/2024</p>
            <p>Tempat : Kalam Kudus</p>
            <p>
              <a
                href="https://kepri.kemenag.go.id/page/det/zulkarnain-hadiri-perayaan-dharmasanti-waisak-se-kota-batam-2568-be-2024">lihat
                selengkapnya</a>
            </p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</body>

</html>