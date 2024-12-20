<html>

<head>
    <title>Foto &amp; Video</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
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
                <img alt="Masjid Raya Sultan Mahmud Riayat Syah" height="150"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ1Pt324p7jEAgk3qDtHv8yyLMr4s4RVMEeT1TXRQUqtvWRKl6"
                    width="150" />
                <div class="text">Masjid Raya Sultan Mahmud Riayat Syah</div>
            </div>
            <div class="card">
                <img alt="ihara Budhi Bhakti" height="150"
                    src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/13/ad/20/thousands-hands-guan.jpg?w=1400&h=800&s=1"
                    width="150" />
                <div class="text">Vihara Budhi Bhakti</div>
            </div>
            <div class="card">
                <img alt="Aereja Katolik Paroki Santo Petrus" height="150"
                    src="https://lh3.googleusercontent.com/p/AF1QipNkk44MDDPL2X-9JqMz_MOwhbats5bZhT3dj6fH=s1360-w1360-h1020"
                    width="150" />
                <div class="text">Gereja Katolik Paroki Santo Petrus</div>
            </div>
            <div class="card">
                <img alt="Paroki Santo Damian" height="150"
                    src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSAkrmsqeqJU0VV8lRGZ3fj2Q5T6PfmUvfBR9sYCIxbmqtFhwDT"
                    width="150" />
                <div class="text">Paroki Santo Damian</div>
            </div>
            <div class="card">
                <img alt="Masjid Tanwirun Naja (Masjid Tanjak)" height="150"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUR_mTZVh2xvifUAOuVSk6LBuW7FHGcJJNE_VFkrsCg6n-zfwO"
                    width="150" />
                <div class="text">Masjid Tanwirun Naja (Masjid Tanjak)</div>
            </div>
            <div class="card">
                <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQw0399byebkmMk0nq1Lqgc73q7jgy8lR6x0wFbuTh56vwlhqeT"
                    width="150" />
                <div class="text">GPIB Immanuel Batam</div>
            </div>
            <div class="card">
                <img alt="Masjid Laksamana Muhammad Cheng Ho" height="150"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9FvV5ha0EwiLLJtfErmDDJbl3sNZwzCDf9IqgJHyf7YLAg7Xx"
                    width="150" />
                <div class="text">Masjid Laksamana Muhammad Cheng Ho</div>
            </div>
            <div class="card">
                <img alt="Masjid Agung Batam (Masjid Raya Batam)" height="150"
                    src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/masjid_agung.jpg"
                    width="150" />
                <div class="text">Masjid Agung Batam (Masjid Raya Batam)</div>
            </div>
            <div class="card">
                <img alt="Vihara Maha Vihara Duta Maitreya" height="150"
                    src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/maha_vihara_duta.JPG"
                    width="150" />
                <div class="text">Vihara Maha Vihara Duta Maitreya</div>
            </div>
            <div class="card">
                <img alt="HKBP Batam Center" height="150"
                    src="https://raw.githubusercontent.com/Victrysiusleoalvarnokayan/Tim-3_Website-Panduan-Wisata-Religi/refs/heads/main/img/gereja_hkbp_batamcenter.png"
                    width="150" />
                <div class="text">HKBP Batam Center</div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <class="card-container">
                <div class="card">
                    <img alt="A tall white tower against a bright blue sky" height="150" src="img/masjidsultan1.jpg"
                        width="150" />
                </div>
                <div class="card">
                    <img alt="A park with trees and a cloudy sky" height="150" src="img/masjid_sultan2.jpg"
                        width="150" />
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150"
                        src="img/masjid_sultan3.jpg" width="150" />
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150"
                        src="img/masjid_sultan.jpeg" width="150" />
                </div>
                <div class="card">
                    <img alt="A large building with a logo and text 'CHAIRINA ULFA'" height="150"
                        src="img/masjid_sultan2.jpg" width="150" />
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fas fa-plus"></i> Tambahkan Foto &amp; Video
                </button>

                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="tambah.php" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addModalLabel">Tambah Foto &amp; Video</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="foto_vidio" class="form-label">Foto &amp; Video</label>
                                        <input type="file" class="form-control" id="foto_vidio" name="foto_vidio"
                                            required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
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
                    btn.onclick = function () {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function () {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
</body>

</html>