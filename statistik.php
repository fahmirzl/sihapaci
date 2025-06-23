<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik - Pangan Cimahi</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include "includes/navbar.php";
    include "includes/sidebar.php";
    ?>

    <section class="filter-section">
        <div class="filter-section-container">
            <div class="info-alert">
                📢 Data rata-rata, tertinggi, dan terendah harga komoditas di Cimahi.
            </div>
            <div class="filter-right">
                <div class="search-container">
                    <input type="month" class="search-input" placeholder="Cari Komoditas ..." />
                </div>
                <div class="dropdown-btn pasar-filter">
                    <span class="chevron">
                        <i class='bx bx-menu-filter'></i>
                    </span>
                    <select class="select-pasar-filter">
                        <option value="" data-pasar="Semua Pasar">Semua Pasar</option>
                        <option value="" data-pasar="Pasar Atas">Pasar Atas</option>
                    </select>
                    <p class="pasar-filter-text">Semua Pasar</p>
                </div>
            </div>
        </div>
    </section>
    <section class="statistic-table">
        <div class="table-container animate-fadein">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" /></th>
                        <th class="title-table">Nama Komoditas <i class='bx bx-price-tag-alt icon-table'></i></th>
                        <th class="title-table">Harga Rata-rata <i class='bx bx-approximate icon-table'></i> </th>
                        <th class="title-table">Harga Tertinggi <i class='bx bx-trending-up icon-table'></i></th>
                        <th class="title-table">Harga Terendah <i class='bx bx-trending-down icon-table'></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" checked /></td>
                        <td>Cabe Merah</td>
                        <td>12.500</td>
                        <td>13.000</td>
                        <td>12.000</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Cabe Keriting</td>
                        <td>45.000</td>
                        <td>47.000</td>
                        <td>43.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
        const SELECT_PASAR_FILTER = document.querySelector(".select-pasar-filter");
        SELECT_PASAR_FILTER.addEventListener("change", e => {
            const selectedOption = e.target.selectedOptions[0];
            const namaPasar = selectedOption.dataset.pasar;
            document.querySelector(".pasar-filter-text").textContent = namaPasar;
        });
    </script>
    <script src="scripts/script.js"></script>
</body>

</html>