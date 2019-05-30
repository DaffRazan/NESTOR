<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <div class="card text-white bg-secondary mb-5">
            <div class="card-header text-center">
                <h3>Riwayat Setoran Data Ikan</h3>
                <p class="card-text text-success"><?= "Profil User: " . $users['username']; ?></p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary">Form Data Setoran User</h4>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!-- Search form -->
                        <form method="post" class="form-inline active-cyan-4">
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Cari riwayat setoran ikan..." name="keyword">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <div class="col-lg-6">
                        <div class="dropdown float-right mb-4">
                            <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Tanggal (baru-lama)
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu text-center">
                                <li class="mb-2"><a href="<?= base_url('setor/riwayat_setoran_orderByHargaTermurah'); ?>">Harga termurah</a></li>
                                <li class="mb-2"><a href="<?= base_url('setor/riwayat_setoran_orderByHargaTermahal'); ?>">Harga termahal</a></li>
                                <li class="mb-2"><a href="<?= base_url('setor/riwayat_setoran_orderByTanggalAsc'); ?>">Tanggal Setor (lama-baru)</a></li>
                                <li class="mb-2"><a href="<?= base_url('setor/riwayat_setoran_orderByTanggalDesc'); ?>">Tanggal Setor (baru-lama)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                </div>

                <?php if (empty($setor)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Ikan tidak ditemukan.
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('flash')) : ?>
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Data Setoran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($setor)) : ?>
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Berat</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tanggal (YYYY-MM-DD)</th>
                                <th scope="col">Waktu (WIB Zone)</th>
                                <th scope="col">Akses Data</th>

                            </tr>
                        </thead>
                    <?php endif; ?>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($setor as $item) {
                            ?>
                            <tr>
                                <th><?= $i++; ?></th>
                                <td><?= ucfirst($item['jenis']); ?></td>
                                <td><?= $item['berat'] . " kg"; ?></td>
                                <td><?= "Rp. " . $item['harga']; ?></td>
                                <td><?= $item['tanggal']; ?></td>
                                <td><?= $item['waktu']; ?></td>
                                <td>
                                    <a href="<?= base_url('setor/hapusSetoran/'); ?><?= $item['id_setor']; ?>" class="badge badge-danger" onclick="return confirm('Yakin ingin hapus?');">Hapus</a>
                                </td>

                            </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</header>

<body>
    <div class="copyright text-center text-white">
        <h3>Hubungi Kami</h3>
        <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
        <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
        <p>&copy;Nestor <?= date('Y'); ?> All Rights Reserved</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>