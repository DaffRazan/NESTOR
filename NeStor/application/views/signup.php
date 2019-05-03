<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NeStor - Daftar</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/signup.css" />
</head>

<body class="form-v5">
    <div class="page-content">
        <div class="form-v5-content">
            <form class="form-detail" action="<?php echo base_url('signup/signup'); ?>" method="post">
                <!-- Display validation errors here -->

                <h2>Daftar Akun</h2>
                <div class="form-row">
                    <label for="full-name">Username</label>
                    <input required type="text" name="username" id="username" class="input-text" placeholder="Your Name">
                    <small class="text-danger"><?= form_error('username'); ?></small>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-row">
                    <label for="your-email">Email</label>
                    <input required type="email" name="email" id="email" class="input-text" placeholder="Your Email">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input required type="password" name="password1" id="password1" class="input-text" placeholder="Your Password">
                    <small class="text-danger"><?= form_error('password1'); ?></small>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-row">
                    <label for="password">Konfirmasi Password</label>
                    <input required type="password" name="password2" id="password2" class="input-text" placeholder="Your Retype-Password">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-row-last">
                    <input type="submit" class="btn btn-success" value="daftar">
                </div> <br>
                <p>Sudah daftar? <a href="<?= base_url('signup/index'); ?>">Masuk</a></p>
            </form>
        </div>
    </div>
</body>

</html>