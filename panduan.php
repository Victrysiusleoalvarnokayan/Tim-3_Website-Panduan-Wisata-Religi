<?php
// Kode PHP
?>
<html>
<head>
    <title>Panduan Tempat Wisata Religi</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="css/kategori_style.css"> 
=======
    <link rel="stylesheet" href="style.css"> 
>>>>>>> 8d2b38bba24b111502ae28be49e3eec30232d443
</head>
<style>
    body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: burlywood;
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
.content {
    text-align: center;
    padding: 20px;
}
.content h1 {
    background-color: #000;
    color: #fff;
    display: inline-block;
    padding: 10px 20px;
    border-radius: 25px;
    font-size: 24px;
}
.cards {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 20px;
}
.card {
    background-color: #000;
    color: #fff;
    border-radius: 15px;
    overflow: hidden;
    width: 450px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.card img {
    width: 100%;
    height: 150px;
    object-fit: cover; /* Menjaga proporsi gambar */
}
.card p {
    font-size: 14px;
    margin: 10px ;
    text-align: left; /* Mengatur teks menjadi rata kiri */
}    
p {
    text-align: left;
    margin-left: 0;


}
</style>

<body>
    <div class="header">
        <img alt="Serenity Trails Logo" height="50" src="serenity.jpeg" width="100"/>
            <nav>
                <a href="home.html">Home</a>
                <a href="kategori.php">Category</a>
                <a href="destinasi.html">Destination</a>
                <a href="informasi.html">Information</a>
            </nav>
        <div class="user-icon">
            <i class="fas fa-user-circle"></i>
            <img alt="user-icon" src="img/image.jpeg">
            <a href="login.html"></a>
        </div>
    </div>
    <div class="content">
        <h1>Panduan Wisata Religi </h1>
        <div class="cards">
            <div class="card">
                <img alt="Masjid Sultan Mahmud Riayat Syah" height="150" src="img/masjid_sultan1.jpeg" width="250"/>
                <h2>Masjid Sultan Mahmud Riayat Syah</h2>
                <p>Lokasi: <strong>Tanjung Uncang, Kecamatan Batu Aji, Kota Batam.</p>
                <p>Diresmikan: <strong>Tahun 2019, masjid ini merupakan yang terbesar di Kepulauan Riau.</p>
                <p>Arsitektur: <strong>Memadukan gaya arsitektur Timur Tengah dengan nuansa Melayu. Masjid ini memiliki kubah utama berukuran besar tanpa tiang penyangga di dalamnya, serta ornamen khas Melayu yang indah.</p>
                <p>Waktu Operasional: <strong>Mengikuti jadwal salat umum.</p>
                <p>Kapasitas: <strong>Mampu menampung hingga 25.000 jamaah.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Masjid Agung Kota Batam" height="150" src="img/masjid_agung1.jpg" width="250"/>
                <h2>Masjid Agung Kota Batam</h2>
                <p>Lokasi: <strong>Jl. Engku Putri, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau.</p>
                <p>Diresmikan: <strong>Tahun 2005, masjid ini merupakan masjid yang terletak dibatam Kepulauan Riau.</p>
                <p>Arsitektur: <strong>Desain arsitektur modern dengan sentuhan Timur Tengah. Bangunan utama masjid memiliki kubah besar dan menara setinggi 70 meter, menjadikannya salah satu landmark kota Batam.</p>
                <p>Waktu Operasional: <strong>Senin-Minggu: 04.00-21.00</p>
                <p>Kapasitas: <strong>Mampu menampung hingga 10.000 jamaah.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Masjid Tanwirun Naja (Masjid Tanjak)" height="150" src="img/ibadah.jpg" width="250"/>
                <h2>Masjid Tanwirun Naja (Masjid Tanjak)</h2>
                <p>Lokasi: <strong>Patung Rajawali,Batu Besar,Kecamatan Nongsa,Batam</p>
                <p>Diresmikan: <strong>Tahun 2022, masjid ini merupakan tempat yang populer walapun tidak sebesar masjid agung batam.</p>
                <p>Arsitektur: <strong>Cukup modern dengan sentuhan budaya lokal. Dengan kubah yang besar dan menara yang menjulang, masjid ini memiliki ciri khas yang membedakannya dari masjid lainnya diBatam.</p>
                <p>Waktu Operasional: <strong>Senin-Minggu: Buka 24 Jam</p>
                <p>Kapasitas: <strong>Mampu menampung hingga 1.250 jamaah.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Masjid Cheng Hoo Bengkong Laut" height="150" 
                src="img/masjid_chenghoo1.jpg" width="250"/>
                <h2>Masjid Cheng Hoo Bengkong Laut</h2>
                <p>Lokasi: <strong>Tj. Buntung, Kec. Bengkong, Kota Batam, Kepulauan Riau.</p>
                <p>Diresmikan: <strong>Tahun 2015, masjid ini adalah salah satu destinasi wisata yang unik karena menggabungkan unsur budaya Tionghoa dan Islam.</p>
                <p>Arsitektur: <strong>Desainnya memadukan elemen budaya Tionghoa (seperti ornamen naga dan warna dominan merah) dengan arsitektur khas masjid (kubah dan mihrab).</p>
                <p>Waktu Operasional: <strong>Masjid terbuka setiap hari untuk umum, terutama saat waktu salat. Pengunjung juga dapat datang untuk berwisata, tetapi harus menghormati aturan tempat ibadah.</p>
                <p>Kapasitas: <strong>Masjid ini cukup besar, mampu menampung banyak jamaah, dan menjadi pusat kegiatan keagamaan serta budaya.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Vihara Budhi Bhakti" height="150" 
                src="img/vihara budhi bhakti.jpg" width="250"/>
                <h2>Vihara Budhi Bhakti</h2>
                <p>Lokasi: <strong>Jl. Pembangunan, Lubuk Baja Kota, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau.</p>
                <p>Diresmikan: <strong>Tahun 1986, Vihara ini telah menjadi salah satu tempat ibadah utama bagi umat Buddha di Batam sekaligus destinasi wisata budaya yang populer bagi wisatawan lokal dan internasional.</p>
                <p>Arsitektur: <strong>Vihara ini memiliki desain khas Tionghoa dengan ornamen naga, patung Buddha, dan lentera merah yang indah.</p>
                <p>Waktu Operasional: <strong>Buka setiap hari dari pagi hingga sore (umumnya pukul 08.00-18.00).</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 300-500 orang.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Pura Agung Amerta Bhuana" height="150" 
                src="img/pura_agung.jpg" width="250"/>
                <h2>Pura Agung Amerta Bhuan</h2>
                <p>Lokasi: <strong>Jl. Gajah Mada No.3, sei Ladi, Kec. Sekupang, Kota Batam, Kepulauan Riau</p>
                <p>Diresmikan: <strong>Tahun 1999, Pura ini dibangun sebagai tempat ibadah bagi umat Hindu di wilayah Batam dan sekitarnya, serta menjadi simbol keberagaman budaya dan agama di Kepulauan Riau</p>
                <p>Arsitektur: <strong>Pura ini memiliki gerbang khas Bali yang megah, ornamen ukiran batu, serta suasana spiritual yang kental. Tempat ini juga sering digunakan untuk upacara keagamaan seperti Nyepi dan Galungan, yang menjadi daya tarik tersendiri bagi wisatawan.</p>
                <p>Waktu Operasional: <strong>Pura ini umumnya terbuka untuk kegiatan ibadah umat Hindu setiap hari.</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 500 hingga 700 orang.</strong></p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Vihara Duta Maitreya Monastery" height="150" 
                src="img/maha_vihara_duta.JPG" width="250"/>
                <h2>Vihara Duta Maitreya Monastery </h2>
                <p>Lokasi: <strong>Komplek Maha Vihara Duta Maitreya Bukit Beruntung, Sungai Panas, Kec. Batam Kota, Kota Batam, Kepulauan Riau</p>
                <p>Diresmikan: <strong>Tahun 1991, Vihara ini menjadi salah satu vihara terbesar di Indonesia dan pusat kegiatan keagamaan serta kebudayaan bagi umat Buddha di Batam.</p>
                <p>Arsitektur: <strong>desain arsitektur yang khas dan megah, dengan patung-patung Buddha besar, serta ukiran-ukiran indah yang menggambarkan ajaran Buddha.</p>
                <p>Waktu Operasional: <strong>Umumnya dari pukul 08.00 pagi hingga 16.00 sore.</p>
                <p>Kapasitas: <strong>Mampu menampung hingga sekitar 2.000-3.000 orang.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="GPIB Immanuel Batam" height="150" 
                src="img/gereja_immanuel.jpg" width="250"/>
                <h2>GPIB Immanuel Batam </h2>
                <p>Lokasi: <strong> Jl. Raja Ali H., Kp. Seraya, Kec. Batu Ampar, Kota Batam, Kepulauan Riau</p>
                <p>Diresmikan: <strong>Tahun 1991, Gereja ini telah menjadi salah satu pusat ibadah utama bagi jemaat Kristen Protestan di Batam dan merupakan bagian penting dari sejarah perkembangan gereja di wilayah tersebut.</p>
                <p>Arsitektur: <strong>Memiliki desain arsitektur yang sederhana namun elegan, dengan atap yang tinggi dan jendela kaca patri yang indah. Suasana di dalam gereja sangat tenang dan nyaman, cocok untuk refleksi spiritual.</p>
                <p>Waktu Operasional: <strong>Biasanya kebaktian berlangsung pada pagi hari, dengan jam 08.00 – 09.30 WIB. Ada juga kebaktian sore pada hari Minggu, dan acara lainnya sesuai dengan kalender gereja.</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 500 hingga 700 orang.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Paroki Santo Damian" height="150" 
                src="img/gereja_santodamian.jpg" width="250"/>
                <h2>Paroki Santo Damian</h2>
                <p>Lokasi: <strong>Kompleks Green Town, Jl. Yos Sudarso, Bengkong Laut, Kec. Bengkong, Kota Batam, Kepulauan Riau</p>
                <p>Diresmikan: <strong>Tahun 1993, Gereja ini adalah tempat yang indah untuk beribadah dan juga sebuah lokasi yang menarik bagi mereka yang ingin memahami lebih dalam tentang komunitas Katolik diBatam.</p>
                <p>Arsitektur: <strong>Memiliki desain yang sederhana namun megah, dengan interior yang nyaman untuk beribadah. Altar yang terletak di tengah gereja memberi kesan spiritual yang mendalam.</p>
                <p>Waktu Operasional: <strong>Biasanya dimulai pada pukul 07.00 WIB (Misa Pagi) dan pukul 17.00 WIB (Misa Sore), namun jadwal ini dapat berubah sesuai dengan hari raya atau kegiatan gereja lainnya.</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 500 hingga 700 orang.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Gereja Paroki Santo Petrus" height="150" 
                src="img/gereja_santopetrus.jpg" width="250"/>
                <h2>Gereja Paroki Santo Petrus</h2>
                <p>Lokasi: <strong>Jl. Anggrek Blok II No. 1, Lubuk Baja Kota, Lubuk Baja, Lubuk Baja Kota, Kec. Lubuk Baja, Kota Batam, Kepulauan Riau</p>
                <p>Diresmikan: <strong>Tahun 1995, merupakan tempat ibadah yang damai dan indah, serta menyuguhkan pengalaman spiritual yang mengesankan bagi pengunjung.</p>
                <p>Arsitektur: <strong>memiliki desain arsitektur yang sederhana namun elegan, dengan interior yang nyaman untuk beribadah. Altar utama yang besar dan indah menjadi fokus utama di dalam gereja.</p>
                <p>Waktu Operasional: <strong>Senin-Jumat(18.00-19.00),
                                              Sabtu: 18.00-19.15, 
                                              Minggu: 09.00-10.15</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 800 hingga 1.000 orang.</p>
            </div>
        <div class="cards">
            <div class="card">
                <img alt="Gereja HKBP Batam" height="150" 
                src="hkbp.jpg" width="250"/>
                <h2>Gereja HKBP Batam</h2>
                <p>Lokasi: <strong>Jl. Kamboja No.1, Lubuk Baja Kota, Kec. Batam Kota, Kota Batam, Kepulauan Riau.</p>
                <p>Diresmikan: <strong>Tahun 1992, Gereja ini adalah gereja Protestan yang terletak di Batam, Kepulauan Riau. Sebagai bagian dari jaringan gereja HKBP yang memiliki banyak cabang di seluruh Indonesia, gereja ini menjadi tempat ibadah yang penting bagi umat Kristiani, khususnya umat Batak.</p>
                <p>Arsitektur: <strong>Gereja HKBP Batam memiliki desain arsitektur yang sederhana namun modern, dengan ruang ibadah yang luas dan nyaman.</p>
                <p>Waktu Operasional: <strong>Misa Pagi: Biasanya dimulai sekitar pukul 08.00 WIB,
                                         Misa Sore: Biasanya dimulai sekitar pukul 17.00 WIB.</p>
                <p>Kapasitas: <strong>Mampu menampung sekitar 700 hingga 1.000 orang.</p>
             </div>

            

            <div class="tips">
             <p class="tips">TIPS MENGUNJUNGI:<p>                
                <p>Waktu Terbaik: Kunjungi pada hari-hari besar keagamaan untuk merasakan suasana yang lebih hidup.</p> 
                <p>Etika: Hormati norma dan aturan yang berlaku di setiap tempat ibadah.</p>
                <p>Aturan Berpakaian: Sopan dan tertutup atau warna baju tidak mencolok,dan tidak menggunakan simbol dan logo kontroversial.</p>
                <p>Transportasi: Gunakan transportasi umum atau sewa kendaraan untuk memudahkan perjalanan antar lokasi.</p>
        </div>
    </div>
</body>
</html>