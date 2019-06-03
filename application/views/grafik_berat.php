<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('../assets/img/carousel/nelayan-bg.jpg')">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <div class="container graph-container">
        <div class="row">
            <a href="<?= base_url('home/index'); ?>"><button type="button" class="btn btn-warning float-left mr-2 mb-2 text-white">Kembali</button></a>
        </div>
        <div class="card justify-content-center mx-auto" style="width: 50rem;">
            <div class="card-body">

                <canvas id="myChart" width="60%" height="40%"></canvas>


            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table table-light">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jenis Ikan</th>
                        <th scope="col">Berat Ikan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($setor as $s) : ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= date_indo($s['tanggal']); ?></td>
                            <td><?= ucfirst($s['jenis']); ?></td>
                            <td><?= number_format($s['berat'], 0, ",", ".")  . " kg"; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
                    text: 'Grafik Berat Setoran Ikan dalam 1 Minggu Terakhir ',
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