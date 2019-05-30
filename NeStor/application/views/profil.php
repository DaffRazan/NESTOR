<!doctype html>
<html lang="en">

<header class="masthead bg-primary text-white">
    <div class="container">
        <title> <?= $title ?> </title>
        <div class="card bg-secondary mb-3">
            <div class="card-header text-center">
                <h5>Identitas User</h5>
                <p class="card-text text-success">
                    Profil User: <?= $users['username']; ?> <br>
                    User ID: <?= $users['id']; ?>
                </p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary">Data Detail Profil Kapal & Pemilik Kapal</h4>
            </div>
        </div>

        <a href="<?= base_url('user/editProfil'); ?>" class="btn btn-success mb-4">Edit Profil</a>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Kapal</h3>

                    <div class="card text-center" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-secondary"><?= "Nama Kapal: " . $data_profil['nama_kpl']; ?></li>
                            <li class="list-group-item text-secondary"> <?= "Nomor Kapal: " . $data_profil['no_kpl']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Umur Kapal: " . $data_profil['umur_kpl']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Kewarganegaraan: " . $data_profil['bendera']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Jumlah ABK: " . $data_profil['jum_ABK']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3>Pemilik</h3>
                    <div class="card text-center" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-secondary"><?= "Pemilik Kapal: " . $data_profil['nama_bos']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Alamat: " . $data_profil['alamat_bos']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Umur: " . $data_profil['umur_bos']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Kewarganegaraan: " . $data_profil['kewarganegaraan']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Nomor Ponsel: " . $data_profil['no_ponsel']; ?></li>
                            <li class="list-group-item text-secondary"><?= "Email Bos: " . $data_profil['email']; ?></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</header>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>