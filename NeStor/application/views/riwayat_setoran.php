<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <div class="card text-white bg-secondary mb-5">
            <div class="card-header text-center">
                <h5>Riwayat Setoran Data Ikan</h5>
                <p class="card-text text-success"><?= "Profil User: " . $users['username']; ?></p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary">Form Data Setoran User</h4>

                <?php if (empty($setorIkan)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Ikan tidak ditemukan.
                    </div>
                <?php endif; ?>

                <div class="dropdown float-right mb-4">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Urutkan berdasarkan
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu text-center">
                        <li class="mb-2"><a href="#">Harga termurah</a></li>
                        <li class="mb-2"><a href="#">Harga termahal</a></li>
                        <li class="mb-2"><a href="#">Tanggal Setor (lama-baru)</a></li>
                        <li class="mb-2"><a href="#">Tanggal Setor (baru-lama)</a></li>
                    </ul>
                </div>

                <table class="table text-white mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Ubah</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($setorIkan as $item) {
                            ?>
                            <tr>
                                <th><?= $i++; ?></th>
                                <td><?= ucfirst($item->jenis); ?></td>
                                <td><?= $item->berat . " kg"; ?></td>
                                <td><?= "Rp. " . $item->harga; ?></td>
                                <td><?= $item->tanggal; ?></td>
                                <td><?= $item->waktu; ?></td>
                                <td><span class="badge badge-success mr-2">Edit</span><span class="badge badge-danger">Hapus</span></td>

                            </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
    </div>
    </div>
</header>


<body>
    <div class="copyright text-center text-white">
        <div class="container-fluid">
            <h5>Copyright &copy;2019</h5><br>
            <h3>NeStor All Rights Reserved</h3>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=" scroll-to-top d-lg-none position-fixed ">
        <a class=" js-scroll-trigger d-block text-center text-white rounded" href="<?= base_url('setor/riwayat_setoran') ?>">
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


</body>