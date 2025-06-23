<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komoditas - Pangan Cimahi</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/micromodal.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php
    include "includes/navbar.php";
    include "includes/sidebar.php";
    ?>

    <section class="filter-section">
        <div class="filter-section-container">
            <div class="info-alert">
                📢 Menampilkan semua informasi harga pangan di kota Cimahi!
            </div>
            <div class="filter-right">
                <div class="search-container">
                    <i class='bx bx-search search-icon'></i>
                    <input type="text" class="search-input" placeholder="Cari Komoditas ..." />
                </div>
                <button class="dropdown-btn filter-komoditas">
                    <span class="chevron">
                        <i class='bx bx-menu-filter'></i>
                    </span>
                    Filter
                </button>
            </div>
        </div>
    </section>
    <section id="pangan">
        <div class="product-card animate-fadein" onclick="chartModal()">
            <div class="preview">
                <img src="public/bawang-merah.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Bawang Merah</div>
                <div class="pricing">
                    <div class="availability naik"><i class='bx bx-arrow-up-right-stroke'></i> <span
                            class="availability-txt">NAIK</span> </div>
                    <div class="price">IDR 17.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/bawang-bombay.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Bawang Bombay</div>
                <div class="pricing">
                    <div class="availability turun"><i class='bx bx-arrow-down-right-stroke'></i> <span
                            class="availability-txt">STABIL</span> </div>
                    <div class="price">IDR 20.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/bawang-putih.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Bawang Putih</div>
                <div class="pricing">
                    <div class="availability naik"><i class='bx bx-arrow-up-right-stroke'></i> <span
                            class="availability-txt">NAIK</span> </div>
                    <div class="price">IDR 25.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/beras.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Beras</div>
                <div class="pricing">
                    <div class="availability stabil"><i class='bx bx-stroke-pen'></i> <span
                            class="availability-txt">STABIL</span> </div>
                    <div class="price">IDR 13.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/cabe-merah.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Cabe Merah</div>
                <div class="pricing">
                    <div class="availability naik"><i class='bx bx-arrow-up-right-stroke'></i> <span
                            class="availability-txt">NAIK</span> </div>
                    <div class="price">IDR 55.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/daging-ayam-broiler.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Daging Ayam Broiler</div>
                <div class="pricing">
                    <div class="availability turun"><i class='bx bx-arrow-down-right-stroke'></i> <span
                            class="availability-txt">TURUN</span> </div>
                    <div class="price">IDR 36.000 / KG</div>
                </div>
            </div>
        </div>
        <div class="product-card animate-fadein">
            <div class="preview">
                <img src="public/tahu-putih.png" />
                <div class="view-detail">View Detail</div>
            </div>
            <div class="information">
                <div class="title">Tahu Putih</div>
                <div class="pricing">
                    <div class="availability stabil"><i class='bx bx-stroke-pen'></i> <span
                            class="availability-txt">STABIL</span> </div>
                    <div class="price">IDR 6.500 / KG</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Chart Start -->
    <div class="modal micromodal-slide" id="modal-chart" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-chart-title">
                        Analisis Harga Bawang Merah
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-chart-content">
                    <canvas id="hargaChart"></canvas>
                </main>
                <footer class="modal__footer">
                    <button class="modal__btn" data-micromodal-close
                        aria-label="Close this dialog window">Close</button>
                </footer>
            </div>
        </div>
    </div>
    <!-- Modal Chart End -->

    <!-- Modal Filter Start -->
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="modal__title" id="modal-1-title">
                        Filter
                    </h2>
                    <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    <form class="form-filter">
                        <select class="select-kota-kabupaten">
                            <option value="">Pilih Kota/Kabupaten</option>
                            <option value="Jawa Barat">
                                Jawa Barat
                            </option>
                        </select>
                        <select class="select-pasar" style="display: none">
                            <option>Pilih Pasar</option>
                        </select>
                        <select class="select-kondisi-harga">
                            <option>Pilih Kondisi Harga</option>
                        </select>
                    </form>
                </main>
                <footer class="modal__footer">
                    <button class="modal__btn modal__btn-primary">Continue</button>
                    <button class="modal__btn" data-micromodal-close
                        aria-label="Close this dialog window">Close</button>
                </footer>
            </div>
        </div>
    </div>
    <!-- Modal Filter End -->

    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <script>
        document.querySelector(".filter-komoditas").addEventListener("click", () => {
            MicroModal.show("modal-1", {
                disableScroll: true
            });
        });

        document.querySelectorAll(".product-card").forEach((el, i) => {
            el.style.animationDelay = `${i * 0.2}s`;
        });

        const SELECT_KOTA_KABUPATEN = document.querySelector(".select-kota-kabupaten");
        const SELECT_PASAR = document.querySelector(".select-pasar");
        SELECT_KOTA_KABUPATEN.addEventListener("change", e => {
            if (e.target.value !== "") {
                SELECT_PASAR.style.display = "block";
            }
        })

        const chartModal = () => {
            MicroModal.show("modal-chart", {
                disableScroll: true,
                disableFocus: true
            });

            const ctx = document.getElementById('hargaChart').getContext('2d');

            const tanggal = ['17 Jun 2025', '18 Jun 2025', '19 Jun 2025', '20 Jun 2025', '21 Jun 2025', '22 Jun 2025', '23 Jun 2025'];
            const harga = [10000, 10200, 9800, 10100, 9900, 10500, 10300];

            const gradient = ctx.createLinearGradient(0, 0, 0, 200);
            gradient.addColorStop(0, 'rgba(0, 200, 83, 0.2)');
            gradient.addColorStop(1, 'rgba(0, 200, 83, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: tanggal,
                    datasets: [{
                        label: 'Harga',
                        data: harga,
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: '#00c853',
                        tension: 0.4,
                        borderWidth: 2,
                        pointRadius: 0,
                        pointHoverRadius: 5
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            titleFont: {
                                family: 'Poppins',
                                size: 13,
                                weight: '500'
                            },
                            bodyFont: {
                                family: 'Poppins',
                                size: 12,
                                weight: '400'
                            },
                            callbacks: {
                                label: function (context) {
                                    const value = context.parsed.y;
                                    return 'Harga: Rp ' + value.toLocaleString();
                                }
                            }
                        }
                    },
                    interaction: {
                        mode: 'index',
                        intersect: false
                    },
                    scales: {
                        x: { display: false },
                        y: { display: false }
                    }
                }
            });
        }
    </script>
    <script src="scripts/script.js"></script>
</body>

</html>