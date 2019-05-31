<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('../assets/img/carousel/nelayan-bg.jpg')">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <div class="container graph-container">
        <div class="card justify-content-center mx-auto" style="width: 50rem;">
            <div class="card-body">
                <?php if (empty($setor)) :  ?>
                    <h3 class="text-danger">Data tidak ditemukan</h3>
                <?php endif; ?>

                <?php if (!empty($setor)) :  ?>
                    <a href="<?= base_url('setor/displayGrafikBerat') ?>" class="btn btn-success mb-3 float-right">Liat grafik berat ikan</a>
                    <canvas id="myChart" width="50%" height="50%"></canvas>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<body>
    <div class="copyright text-center text-white">
        <div class="container-fluid" style="height:200px;">
            <h3>Hubungi Kami</h3>
            <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
            <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
            <p>&copy;Nestor <?= date('Y'); ?> All Rights Reserved</p>
        </div>
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
        var ctx = document.getElementById('myChart').getContext('2d');
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
                    text: 'Grafik Harga Ikan Hasil Setoran <?= $users['username']; ?>',
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