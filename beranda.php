<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity Trails</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        
        body {
            font-family: Arial, sans-serif;
            background-color: #9C9C8D; 
        }

        .header {
            background-color: black;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            width: 120px; 
        }

        .header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .header nav a:hover {
            text-decoration: underline;
        }

        .login {
            width: 50;
            height: 50;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        
        .content {
            display: flex;
            justify-content: space-around;
            padding: 30px;
        }

        .content .column {
            width: 20%;
            background-color: #D8D8D8; 
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }

        .content .column h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        
        .event-dropdown {
            display: inline-flex;
            align-items: center;
            padding: 15px;
            background-color: #D8D8D8;
        }

        .event-dropdown span {
            font-size: 18px;
            margin-right: 10px;
        }

        select {
            padding: 8px;
            font-size: 16px;
            appearance: none; /* Hapus default dropdown arrow */
            background-color: transparent;
            font-family: inherit;
        }

        .event-dropdown select:focus {
            outline: none;
        }

        


    </style>
</head>
<body>

    
    <header class="header">
        <img src="serenity.jpeg" alt="Serenity Trails Logo">
        <nav>
            <a href="#home">Home</a>
            <a href="#category">Category</a>
            <a href="#destination">Destination</a>
            <a href="#information">Information</a>
        </nav>
        <div class="login">
            <a href="Menu_Login.html"><img src="image.jpeg"></a>
        </div>
    </header>

    
    <div class="content">
        <div class="column">
            <select id="event"></select>
                <h2><option value="januari">Event</option></h2>
                <option value="event1">event1</option>
                <option value="event2">event2</option>
            </select>

        </div>
        <div class="column">
            <h2>Gallery</h2>
            <select id="gallery" name="gallery">
                <option value="foto">Foto</option>
                <option value="vidio">Video</option>
            </select>
        </div>
        
        </div>
        <div class="column">
            <h2>Ulasan</h2>
        </div>
    </div>

</body>
</html>
