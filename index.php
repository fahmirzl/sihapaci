<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pangan Cimahi</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
        .app-navbar {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php 
    include "includes/navbar.php";
    include "includes/sidebar.php";
    ?>

    <section class="hero-section">
        <div class="hero-content animate-fadein">
            <h1>Selamat Datang di Sistem Informasi Harga Pangan</h1>
            <p>Temukan informasi terkini dan terpercaya mengenai harga bahan pangan di Kota Cimahi secara real-time.</p>
            <div class="cta-buttons">
                <button class="btn btn-primary">Lihat Harga</button>
                <button class="btn btn-outline">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>