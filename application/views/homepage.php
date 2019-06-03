<!-- Header -->
<header class="masthead bg-primary text-white text-center">
  <div class="container-fluid d-flex justify-content-center mr-0 ml-0">
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-center">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/carousel/nelayan1.jpg'); ?>" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Selamat datang di <br>
              <span style="color:yellow;">NeStor</span>
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/carousel/nelayan2.jpg'); ?>" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Media Setor Ikan Nelayan berbasis Website</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/carousel/nelayan3.jpg'); ?>" class="d-block w-100">
          <div class="carousel-caption">
            <h1>Ayo daftar sekarang!</h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- Grafik section -->

  <section class="masthead bg-primary text-white text-center">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <h2 class="text-center text-uppercase text-white">Grafik Setor 1 Minggu Terakhir</h2>
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

  <!-- About Section -->
  <section class="white-section bg-primary text-white mb-0" id="about">
    <div class="container-fluid"><br>
      <h2 class="text-center text-uppercase text-white">Tentang Kami</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 ml-auto text-justify text-white">
          <p class="lead">Nelayan Setor (NeStor) merupakan aplikasi berbasis website yang dirancang
            untuk para nelayan agar dapat memudahkan pekerjaan mereka dalam menyetor hasil tangkapan ikan dan makhluk laut lainnya ke dalam website. Dengan begitu, apabila nelayan memasukkan data setoran ke dalam website ini, data tidak akan hilang karena tersimpan ke dalam database (sistem).</p>
        </div>
        <div class="col-lg-4 mr-auto text-justify text-white">
          <p class="lead"> Data dijamin aman karena menggunakan password yang dienkripsi. NeStor juga menampung informasi profil nelayan berupa data diri nelayan, ABK, Kapal,
            serta identitas lainnya. Akun ini dikelola oleh Bos Nelayan perkapal.
          </p><br>
        </div>
      </div>
    </div>
  </section>

</header>

<body>
  <div class="copyright text-center text-white">
    <div class="container">
      <h3>Hubungi Kami</h3>
      <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
      <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
      <p>&copy;Nestor <?= date('Y'); ?> All Rights Reserved</p>
    </div>
  </div>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="<?= base_url('home'); ?>">
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