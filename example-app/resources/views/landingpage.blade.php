<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTrack</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Warna latar belakang body putih */
            color: #000; /* Warna teks */
        }

        .header-container {
            padding: 0px;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .rectangle {
            padding: 5px;
            border-radius: 0px;
            color: #fff; /* Warna teks */
        }

        .rectangle-1 {
            background-color: #0095ff; /* Warna biru muda */
            margin-right: 0px;
            padding: 15px;
        }

        .rectangle-2 {
            background-color: #0960d1; /* Warna biru tua */
            margin-left: 0px;
            padding: 1px; /* Ubah ukuran padding */
        }

        .go-to-app {
            background-color: #0095ff; /* Warna biru muda */
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            position: absolute;
            top: 30px; /* Menggeser ke bawah */
            left: calc(85% - 20px); /* Menggeser ke kiri */
            border: 2px solid #fff; /* Warna garis bingkai putih */
        }

        .go-to-app:hover {
            background-color: #0769d1; /* Warna biru muda saat hover */
        }

        .content {
            text-align: center;
            color: #fff;
            padding: 20px;
            position: relative;
            float: middle;
        }

        .bottom-text {
            text-align: left;
            padding: 20px 30px; /* Atur padding atas dan bawah */
            overflow: hidden; /* Mencegah konten menyebar */
            margin-top: 20px; /* Sesuaikan margin top */
        }

        .bottom-text img {
            margin-left: 20px; /* Memberikan jarak antara gambar dengan teks */
            float: right; /* Pindahkan gambar ke kanan */
        }

        .btn {
            padding: 5px 20px;
            background-color: #0095ff;
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn:hover {
            background-color: #0769d1;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <div class="rectangle rectangle-1">
            <div class="logo-container">
                <header>
                    <h1>EduTrack</h1>
                </header>
            </div>
            <a href="#" class="go-to-app">Go to App</a>
        </div>
        <div class="rectangle rectangle-2">
            <header>
                <h2>Track your activity here!</h2>
            </header>
        </div>
    </div>
    <div class="content">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPzvyTEjxuzbWfaGe2JUJMrmw8FzPTXfwVoWvDgoQBQ&s" alt="Image">
    </div>
    <div class="bottom-text">
        <p>Raih informasi dan perkembangan akademik anak di sekolah secara REAL-TIME</p>
        <a href="#" class="btn">Get Started</a>
        <a href="#" class="btn">Learn More</a>
    </div>
</body>
</html>
