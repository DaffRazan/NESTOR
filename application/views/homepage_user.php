<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('assets/img/carousel/nelayan-bg.jpg')">
    <div class="container">
        <h1 class="pt-1" style="color:yellow;">NeStor</h1><br>
        <img class="profile-pic img-fluid mb-5 d-block mx-auto" src="<?= base_url('assets/img/profile/' . $users['image']); ?>" alt="">
        <hr class="star-light">
        <div class="container bg-primary" style="width:50%;">
            <h2 class="font-weight-light mb-0"> Selamat datang, <span class="text-dark"><?= $users['fullname']; ?></span></h2><br>
            <h4 class="text-warning">Track Record Penangkapan Ikan tahun
                <?= date('Y'); ?>
            </h4> <br>
            <h4>Ikan paling mahal: <span class="text-warning"><?= ucfirst($setor1['jenis']) . "  (" . number_format($setor1['harga'], 0, ",", ".") . ")"; ?></span></h4>
            <h4>Ikan paling murah: <span class="text-warning"><?= ucfirst($setor2['jenis']) . " (" . number_format($setor2['harga'], 0, ",", ".") . ")"; ?></span></h4>
            <h4>Total harga setor: <span class="text-warning"><?= "Rp. " . number_format($setor3['harga'], 0, ",", "."); ?></span></h4>
            <h4>Total berat setor: <span class="text-warning"><?= number_format($setor4['berat'], 0, ",", ".") . " kg"; ?></span></h4>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
    </div>
</header>

<!-- Grafik section -->

<section class="masthead bg-primary text-white text-center">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <h3 class="text-center text-uppercase text-white">Grafik Setor 1 Minggu Terakhir</h3>
    <hr class="star-light">

    <div class="container graph-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card justify-content-center mx-auto" style="width: 30rem;">
                    <div class="card-body">
                        <a href="<?= base_url('home/grafikBerat'); ?>" class="btn btn-success mb-3 float-right">Lihat Detail</a>

                        <canvas id="myChartBerat" width="50%" height="50%"></canvas>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card justify-content-center mx-auto" style="width: 30rem;">
                    <div class="card-body">
                        <a href="<?= base_url('home/grafikHarga'); ?>" class="btn btn-success mb-3 float-right">Lihat Detail</a>

                        <canvas id="myChartHarga" width="50%" height="50%"></canvas>

                    </div>
                </div>
            </div>
        </div>

    </div>


</section>




<!-- end of grafik section-->


<div class="copyright text-center text-white">
    <div class="container">
        <h3>Hubungi Kami</h3>
        <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
        <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
        <p>&copy; Nestor <?= date('Y'); ?> All Rights Reserved </p>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?= base_url('assets/'); ?>js/jqBootstrapValidation.js"></script>
<script src="<?= base_url('assets/'); ?>js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?= base_url('assets/'); ?>js/freelancer.min.js"></script>

<script>
    var ctx = document.getElementById('myChartBerat').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                for ($i = 0; $i < sizeof($setor); $i++) {
                    if ($i != sizeof($setor) - 1) {
                        echo "'" . $setor[$i]['jenis'] . "'" . ',';
                    } else {
                        echo "'" . $setor[$i]['jenis'] . "'";
                    }
                }
                ?>
            ],
            datasets: [{
                legend: {
                    display: false
                },
                data: [<?php
                        for ($i = 0; $i < sizeof($setor); $i++) {
                            if ($i != sizeof($setor) - 1) {
                                echo $setor[$i]['berat'] . ',';
                            } else {
                                echo $setor[$i]['berat'];
                            }
                        }
                        ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Grafik Berat Setoran Ikan',
                fontSize: 30
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

<script>
    var ctx = document.getElementById('myChartHarga').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                for ($i = 0; $i < sizeof($setor); $i++) {
                    if ($i != sizeof($setor) - 1) {
                        echo "'" . $setor[$i]['jenis'] . "'" . ',';
                    } else {
                        echo "'" . $setor[$i]['jenis'] . "'";
                    }
                }
                ?>
            ],
            datasets: [{
                legend: {
                    display: false
                },
                data: [<?php
                        for ($i = 0; $i < sizeof($setor); $i++) {
                            if ($i != sizeof($setor) - 1) {
                                echo $setor[$i]['harga'] . ',';
                            } else {
                                echo $setor[$i]['harga'];
                            }
                        }
                        ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 2
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Grafik Harga Setoran Ikan ',
                fontSize: 30
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>

</html>