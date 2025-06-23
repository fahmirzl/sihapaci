<div class="sidebar-app">
    <div class="sidebar-wrapper">
        <div class="sidebar-container">
            <div class="top-section">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/f6/Logo-Cimahi.png" class="main-icon"
                    alt="Main Icon">
                <span class="title">PANGAN CIMAHI</span>
            </div>
            <div class="menu-side-group">
                <a class="menu-side <?= ($current_page == 'index.php') ? 'active' : '' ?>" href="index.php">
                    <span class="side-icon"><i class='bx bx-home'></i></span>
                    <span>Beranda</span>
                </a>
                <a class="menu-side <?= ($current_page == 'komoditas.php') ? 'active' : '' ?>" href="komoditas.php">
                    <span class="side-icon"><i class='bx bx-box'></i></span>
                    <span>Komoditas</span>
                </a>
                <a class="menu-side <?= ($current_page == 'statistik.php') ? 'active' : '' ?>" href="statistik.php">
                    <span class="side-icon"><i class='bx bx-bar-chart'></i></span>
                    <span>Statistik</span>
                </a>
                <a class="menu-side close" id="close-sidebar">
                    <span class="side-icon"><i class='bx bx-no-entry'></i></span>
                    <span>Close</span>
                </a>
            </div>
        </div>
    </div>
</div>