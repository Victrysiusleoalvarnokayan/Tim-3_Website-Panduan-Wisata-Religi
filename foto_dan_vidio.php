<html>
<head>
    <title>Foto &amp; Video</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            padding: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .card-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 150px;
            flex-shrink: 0;
            position: relative;
            cursor: pointer;
        }
        .card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card .text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }
        .card .subtext {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: white;
            font-size: 12px;
            font-weight: normal;
            margin-top: 5px;
        }
        .add-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }
        .add-button button {
            background-color: white;
            border: 1px solid #dcdcdc;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            color: #007bff;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .add-button button i {
            margin-right: 10px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">Foto &amp; video</div>
        <div class="card-container">
            <div class="card" id="semua">
                <img alt="Masjid Raya Sultan Mahmud Riayat Syah" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ1Pt324p7jEAgk3qDtHv8yyLMr4s4RVMEeT1TXRQUqtvWRKl6" width="150"/>
                <div class="text">Masjid Raya Sultan Mahmud Riayat Syah</div>
            </div>
            <div class="card">
                <img alt="ihara Budhi Bhakti" height="150" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/13/ad/20/thousands-hands-guan.jpg?w=1400&h=800&s=1" width="150"/>
                <div class="text">Vihara Budhi Bhakti</div>
            </div>
            <div class="card">
                <img alt="Aereja Katolik Paroki Santo Petrus" height="150" src="https://lh3.googleusercontent.com/p/AF1QipNkk44MDDPL2X-9JqMz_MOwhbats5bZhT3dj6fH=s1360-w1360-h1020" width="150"/>
                <div class="text">Gereja Katolik Paroki Santo Petrus</div>
            </div>
            <div class="card">
                <img alt="Paroki Santo Damian" height="150" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSAkrmsqeqJU0VV8lRGZ3fj2Q5T6PfmUvfBR9sYCIxbmqtFhwDT" width="150"/>
                <div class="text">Paroki Santo Damian</div>
            </div>
            <div class="card">
                <img alt="Masjid Tanwirun Naja (Masjid Tanjak)" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUR_mTZVh2xvifUAOuVSk6LBuW7FHGcJJNE_VFkrsCg6n-zfwO" width="150"/>
                <div class="text">Masjid Tanwirun Naja (Masjid Tanjak)</div>
            </div>
            <div class="card">
                <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw0399byebkmMk0nq1Lqgc73q7jgy8lR6x0wFbuTh56vwlhqeT" width="150"/>
                <div class="text">GPIB Immanuel Batam</div>
            </div>
            <div class="card">
                <img alt="Masjid Laksamana Muhammad Cheng Ho" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9FvV5ha0EwiLLJtfErmDDJbl3sNZwzCDf9IqgJHyf7YLAg7Xx" width="150"/>
                <div class="text">Masjid Laksamana Muhammad Cheng Ho</div>
            </div>
            <div class="card">
                <img alt="Masjid Agung Batam (Masjid Raya Batam)" height="150" src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/masjid_agung.jpg" width="150"/>
                <div class="text">Masjid Agung Batam (Masjid Raya Batam)</div>
            </div>
            <div class="card">
                <img alt="Vihara Maha Vihara Duta Maitreya" height="150" src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/maha_vihara_duta.JPG" width="150"/>
                <div class="text">Vihara Maha Vihara Duta Maitreya</div>
            </div>
            <div class="card">
                <img alt="HKBP Batam Center"
             height="150" src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/gereja_hkbp_batamcenter.png" width="150"/>
                <div class="text">HKBP Batam Center</div>
            </div>
        </div>
        <div class="add-button">
            <button>
                <i class="fas fa-plus"></i>
                Tambahkan foto &amp; video
            </button>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="card-container">
                <div class="card">
                    <img alt="A tall white tower against a bright blue sky" height="150" src="https://maps.app.goo.gl/ZXUiiwWswCU6UGCp6" width="150"/>
                </div>
                <div class="card">
                    <img alt="A park with trees and a cloudy sky" height="150" src="https://www.google.com/maps/place/Masjid+Raya+Sultan+Mahmud+Riayat+Syah/@1.0517071,103.9347667,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipNwqa3tiiaVDY47xfNLp88_WLYfPv-t5DsM8PLN!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNwqa3tiiaVDY47xfNLp88_WLYfPv-t5DsM8PLN%3Dw203-h152-k-no!7i4000!8i3000!4m20!1m10!3m9!1s0x31d98da9804a4a4b:0xca79643145f876be!2sMasjid+Raya+Sultan+Mahmud+Riayat+Syah!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgARICGAI!16s%2Fg%2F11h3k0_15w!3m8!1s0x31d98da9804a4a4b:0xca79643145f876be!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgAQ!16s%2Fg%2F11h3k0_15w?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" width="150"/>
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150" src="https://www.google.com/maps/place/Masjid+Raya+Sultan+Mahmud+Riayat+Syah/@1.0510173,103.934729,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipPOLyVixsUa-Gyj30JHviJMYlOb_qRtbH1uZr8E!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipPOLyVixsUa-Gyj30JHviJMYlOb_qRtbH1uZr8E%3Dw203-h152-k-no!7i4032!8i3024!4m20!1m10!3m9!1s0x31d98da9804a4a4b:0xca79643145f876be!2sMasjid+Raya+Sultan+Mahmud+Riayat+Syah!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgARICGAI!16s%2Fg%2F11h3k0_15w!3m8!1s0x31d98da9804a4a4b:0xca79643145f876be!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgAQ!16s%2Fg%2F11h3k0_15w?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" width="150"/>
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150" src="https://www.google.com/maps/place/Masjid+Raya+Sultan+Mahmud+Riayat+Syah/@1.0517071,103.9347667,3a,75y,90t/data=!3m8!1e2!3m6!1sAF1QipMB12JsfoDa_mmWsSL_qBYR1KMAobPYO0Yr6np4!2e10!3e12!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMB12JsfoDa_mmWsSL_qBYR1KMAobPYO0Yr6np4%3Dw203-h270-k-no!7i6000!8i8000!4m20!1m10!3m9!1s0x31d98da9804a4a4b:0xca79643145f876be!2sMasjid+Raya+Sultan+Mahmud+Riayat+Syah!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgARICGAI!16s%2Fg%2F11h3k0_15w!3m8!1s0x31d98da9804a4a4b:0xca79643145f876be!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgAQ!16s%2Fg%2F11h3k0_15w?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" width="150"/>
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150" src="https://www.google.com/maps/place/Masjid+Raya+Sultan+Mahmud+Riayat+Syah/@1.0499339,103.9349573,3a,75y,90t/data=!3m8!1e5!3m6!1sAF1QipMiPnNqoKmH8gF7Zk4a3mcQjpmm7vb4-XeSWTWS!2e10!3e10!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipMiPnNqoKmH8gF7Zk4a3mcQjpmm7vb4-XeSWTWS%3Dw203-h114-k-no!7i1280!8i720!4m20!1m10!3m9!1s0x31d98da9804a4a4b:0xca79643145f876be!2sMasjid+Raya+Sultan+Mahmud+Riayat+Syah!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgARICGAI!16s%2Fg%2F11h3k0_15w!3m8!1s0x31d98da9804a4a4b:0xca79643145f876be!8m2!3d1.051199!4d103.9348098!10e5!14m1!1BCgIgARICCAQ!16s%2Fg%2F11h3k0_15w?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D" width="150"/>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("semua");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>