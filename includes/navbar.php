<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="app-navbar">
    <div class="app-bar-container">
        <div class="left-section">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Logo-Cimahi.png" class="main-icon"
                alt="Main Icon">
            <span class="title">PANGAN CIMAHI</span>
        </div>
        <div class="center-section">
            <div class="group-menu-nav">
                <a class="menu-nav <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">
                    <span class="nav-icon"><i class='bx bx-home'></i></span>
                    <span>Beranda</span>
                </a>
                <a class="menu-nav <?= ($current_page == 'komoditas.php') ? 'active' : '' ?>" href="komoditas.php">
                    <span class="nav-icon"><i class='bx bx-box'></i></span>
                    <span>Komoditas</span>
                </a>
                <a class="menu-nav <?= ($current_page == 'statistik.php') ? 'active' : '' ?>" href="statistik.php">
                    <span class="nav-icon"><i class='bx bx-bar-chart'></i></span>
                    <span>Statistik</span>
                </a>
            </div>
        </div>
        <div class="right-section">
            <button class="ctas"><span>Hubungi Kami</span></button>
            <button class="menu-mobile">
                <i class='bx bx-menu-right icon'></i> 
            </button>
        </div>
    </div>
</header>