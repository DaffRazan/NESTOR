<!doctype html>
<html lang="en">

<<<<<<< HEAD
<header class="masthead bg-primary text-white">
=======
<header class="masthead bg-primary text-white" style="background-image: url('assets/img/carousel/nelayan-bg.jpg')">
>>>>>>> YaumilBranch
    <div class="container">
        <title> <?= $title ?> </title>
        <div class="card bg-secondary mb-3">
            <div class="card-header text-center">
<<<<<<< HEAD
                <h5>Identitas User</h5>
                <p class="card-text text-success">
                    Profil User: <?= $users['username']; ?> <br>
                    User ID: <?= $users['id']; ?>
=======
                <h3>Identitas Kapal</h3>
                <p class="card-text text-success">
                    Profil User: <?= $users['username']; ?> <br>
>>>>>>> YaumilBranch
                </p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary pb-5">Data Detail Profil Kapal & Pemilik Kapal</h4>
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <?= $this->session->flashdata('pesan_profil'); ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">

                        <a href="<?= base_url('user/editProfil'); ?>" class="btn btn-success mb-4">Edit Profil</a>
                    </div>
                </div>

<<<<<<< HEAD
                <div class="row text-center">
                    <div class="col-lg-6">
                        <h3>Kapal</h3>

                        <div class="card mx-auto" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-secondary"><?= "Nama Kapal: " . ucwords($data_profil['nama_kpl']); ?></li>
                                <li class="list-group-item text-secondary"> <?= "Nomor Kapal: " . $data_profil['no_kpl']; ?></li>
                                <li class="list-group-item text-secondary"><?= "Umur Kapal: " . $data_profil['umur_kpl']; ?></li>
                                <li class="list-group-item text-secondary"><?= "Kewarganegaraan: " . ucwords($data_profil['bendera']); ?></li>
                                <li class="list-group-item text-secondary"><?= "Jumlah ABK: " . $data_profil['jum_ABK']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3>Pemilik</h3>
                        <div class="card mx-auto" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-secondary"><?= "Pemilik Kapal: " . ucwords($data_profil['nama_bos']); ?></li>
                                <li class="list-group-item text-secondary"><?= "Alamat: " . ucwords($data_profil['alamat_bos']); ?></li>
                                <li class="list-group-item text-secondary"><?= "Umur: " . $data_profil['umur_bos']; ?></li>
                                <li class="list-group-item text-secondary"><?= "Kewarganegaraan: " . ucwords($data_profil['kewarganegaraan']); ?></li>
                                <li class="list-group-item text-secondary"><?= "Nomor Ponsel: " . $data_profil['no_ponsel']; ?></li>
                                <li class="list-group-item text-secondary"><?= "Email Bos: " . $data_profil['email']; ?></li>
=======
                <div class="row text-center justify-content-center">
                    <div class="col-lg-3">
                        <div class="card mx-auto" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-secondary"> Nama Kapal: <span class="text-primary"><?= ucwords($data_profil['nama_kpl']); ?> </span></li>
                                <li class="list-group-item text-secondary"> Nomor Kapal: <span class="text-primary"><?= $data_profil['no_kpl']; ?> </span></li>
                                <li class="list-group-item text-secondary">Umur Kapal: <span class="text-primary"><?= $data_profil['umur_kpl']; ?> </span></li>
                                <li class="list-group-item text-secondary">Kewarganegaraan: <span class="text-primary"><?= ucwords($data_profil['bendera']); ?> </span></li>
                                <li class="list-group-item text-secondary"> Jumlah ABK: <span class="text-primary"><?= $data_profil['jum_ABK']; ?> </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card mx-auto" style="width: 18rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-secondary">Pemilik Kapal:<span class="text-primary"> <?= ucwords($data_profil['nama_bos']); ?> </span></li>
                                <li class="list-group-item text-secondary">Alamat: <span class="text-primary"><?= ucwords($data_profil['alamat_bos']); ?> </span></li>
                                <li class="list-group-item text-secondary">Umur:<span class="text-primary"> <?= $data_profil['umur_bos']; ?> </span></li>
                                <li class="list-group-item text-secondary">Kewarganegaraan:<span class="text-primary"> <?= ucwords($data_profil['kewarganegaraan']); ?> </span></li>
                                <li class="list-group-item text-secondary">Nomor Ponsel:<span class="text-primary"> <?= $data_profil['no_ponsel']; ?> </span></li>
                                <li class="list-group-item text-secondary">Email Bos:<span class="text-primary"> <?= $data_profil['email']; ?> </span></li>
>>>>>>> YaumilBranch
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>

<body>
    <div class="copyright text-center text-white">
        <div class="container-fluid">
            <h3>Hubungi Kami</h3>
            <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
            <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
<<<<<<< HEAD
            <p>&copy;2019 Nestor All Rights Reserved</p>
=======
            <p>&copy;Nestor <?= date('Y'); ?> All Rights Reserved</p>
>>>>>>> YaumilBranch
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>