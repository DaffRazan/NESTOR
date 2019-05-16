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

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <!-- Search form -->
                        <form class="form-inline active-cyan-4">
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Cari ikan..." aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </form>
                    </div>
                    <div class="col-lg-6">
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
                    </div>
                </div>

                <table class="table text-white">
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
</header>

<body>
    <div class="copyright text-center text-white">
        <h3>Hubungi Kami</h3>
        <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
        <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
        <p>&copy;2019 Nestor All Rights Reserved</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>