<!doctype html>
<html lang="en">

<header class="masthead bg-primary text-white" style="background-image: url('../assets/img/carousel/nelayan-bg.jpg')">
    <div class="container">
        <title> <?= $title ?> </title>
        <div class="card bg-secondary mb-3 text-center">
            <div class="card-header text-center">
                <h3>Identitas User</h3>
            </div>

            <div class="card-body">
                <h4 class="card-title text-center text-primary pb-5">Data Detail Identitas User</h4>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <a href="<?= base_url('user/ubahphoto'); ?>" class="btn btn-success mb-4 mr-4">Ganti Photo/Nama</a>
                        <a href="<?= base_url('user/ubahpassword'); ?>" class="btn btn-warning text-white mb-4">Ubah Password</a>
                    </div>
                </div>
                <div class="card mb-3 mx-auto p-4" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-3 text-center">
                            <img class="card-img" style="width:60%;" src="<?= base_url('assets/img/profile/' . $users['image']); ?>" alt="">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-text text-secondary">
                                User ID: <span class="text-primary"><?= $users['id']; ?></span><br>
                                Nama: <span class="text-primary"><?= $users['fullname']; ?></span> <br>
                                Username: <span class="text-primary"><?= $users['username']; ?></span> <br>
                                Email: <span class="text-primary"><?= $users['email']; ?></span> <br>
                            </h5>
                        </div>
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
            <p>&copy;Nestor <?= date('Y'); ?> All Rights Reserved</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>



</html>