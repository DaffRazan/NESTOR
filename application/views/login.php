<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NeStor - Masuk</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/login.css" />
</head>

<body class="form-v5">
    <div class="page-content">
        <div class="form-v5-content">
            <a href="<?= base_url('home'); ?>"><i class="fas fa-2x fa-arrow-left ml-2"></i></a>
            <form class="form-detail" action="<?= base_url('nelayan/index') ?>" method="post">
                <h2>Masuk Akun</h2>
                <?= $this->session->flashdata('pesan'); ?>
                <div class="form-row">
                    <label for="full-name">Username</label>
                    <input type="text" name="username" id="username" class="input-text" placeholder="Your Name" value="<?= set_value('username'); ?>">
                    <small class="text-danger"><?= form_error('username'); ?></small>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input-text" placeholder="Your Password">
                    <small class="text-danger"><?= form_error('password'); ?></small>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block mb-4"> Masuk </button>
                <p>Belum daftar? <a href="<?= base_url('nelayan/signup'); ?>">Daftar</a></p>
            </form>
        </div>
    </div>
</body>

</html>