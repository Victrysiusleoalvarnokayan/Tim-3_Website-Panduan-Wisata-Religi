<?php
include 'koneksi.php';

$query = "SELECT * FROM news ORDER BY waktu DESC";
$result = mysqli_query($koneksi, $query);
$newsData = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $newsData[] = $row;
    }
}
?>

<html>

<head>
    <title>
        Main News
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: auto;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .main-title {
            grid-column: span 2;
            font-size: 2.5em;
            font-weight: 700;
            color: #1a1a1a;
        }

        .main-title span {
            color: #1a73e8;
        }

        .main-news {
            position: relative;
        }

        .main-news img {
            width: 100%;
            border-radius: 10px;
        }

        .main-news .overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
        }

        .main-news .overlay h2 {
            margin: 0;
            font-size: 1.5em;
            font-weight: 700;
        }

        .main-news .overlay p {
            margin: 5px 0 0;
            font-size: 1em;
        }

        .main-news .overlay span {
            font-size: 0.9em;
            color: #d1d1d1;
        }

        .side-news {
            max-height: 400px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .side-news .news-item {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .side-news .news-item img {
            width: 100%;
            border-radius: 10px;
        }

        .side-news .news-item h3 {
            margin: 0;
            font-size: 1.2em;
            font-weight: 700;
            color: #1a1a1a;
        }

        .side-news .news-item p {
            margin: 5px 0 0;
            font-size: 0.9em;
            color: #6c757d;
        }

        .side-news .news-item .badge {
            background-color: #ff4b5c;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8em;
            align-self: flex-start;
        }

        .bottom-news {
            grid-column: span 2;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .bottom-news .news-item {
            position: relative;
        }

        .bottom-news .news-item img {
            width: 100%;
            border-radius: 10px;
        }

        .bottom-news .news-item .overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
        }

        .bottom-news .news-item .overlay h3 {
            margin: 0;
            font-size: 1.2em;
            font-weight: 700;
        }

        .bottom-news .news-item .overlay span {
            font-size: 0.9em;
            color: #d1d1d1;
        }

        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #1a73e8;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2em;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @media(max-width:768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .bottom-news {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-title">
            <span>Main</span> news
        </div>
        <?php foreach ($newsData as $news): ?>
            <?php if ($news['kategori'] == 'main'): ?>
                <div class="main-news">
                    <img src="<?= $news['foto'] ?>" alt="<?= $news['tittle'] ?>" />
                    <div class="overlay">
                        <h2><?= $news['tittle'] ?></h2>
                        <p><?= $news['waktu'] ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <div class="side-news">
            <?php foreach ($newsData as $news): ?>
                <?php if ($news['kategori'] == 'side'): ?>
                    <div class="news-item">
                        <img src="<?= $news['foto'] ?>" alt="<?= $news['tittle'] ?>" />
                        <div class="badge">Breaking</div>
                        <h3><?= $news['tittle'] ?></h3>
                        <p><?= $news['waktu'] ?></p>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="bottom-news">
            <?php foreach ($newsData as $news): ?>
                <?php if ($news['kategori'] == 'bottom'): ?>
                    <div class="news-item">
                        <img src="<?= $news['foto'] ?>" alt="<?= $news['tittle'] ?>" />
                        <div class="overlay">
                            <h3><?= $news['tittle'] ?></h3>
                            <span><?= $news['waktu'] ?></span>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="floating-button">
        <i class="fas fa-plus">
        </i>
    </div>
</body>

</html>