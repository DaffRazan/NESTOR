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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/signup.css" />


</head>

<body class="form-v5">
    <div class="page-content">
        <div class="form-v5-content">
            <a href="<?= base_url('home'); ?>"><i class="fas fa-2x fa-arrow-left ml-2"></i></a>
            <form class="form-detail mt-3" action="<?php echo base_url('nelayan/signup'); ?>" method="post">
                <!-- Display validation errors here -->
                <h2>Daftar Akun</h2>
                <div class="form-row">
                    <label for="full-name">Username</label>
<<<<<<< HEAD
                    <input type="text" name="username" id="username" class="input-text" placeholder="Your Name" value="<?= set_value('username'); ?>">
                    <small class="text-danger"><?= form_error('username'); ?></small>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-row">
                    <label for="your-email">Email</label>
                    <input type="text" name="email" id="email" class="input-text" placeholder="Your Email" value="<?= set_value('email'); ?>">
                    <small class="text-danger"><?= form_error('email'); ?></small>
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password1" id="password1" class="input-text" placeholder="Your Password">
                    <small class="text-danger"><?= form_error('password1'); ?></small>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-row">
                    <label for="password">Konfirmasi Password</label>
                    <input type="password" name="password2" id="password2" class="input-text" placeholder="Your Retype-Password">
                    <small class="text-danger"><?= form_error('password2'); ?></small>
                    <i class="fas fa-lock"></i>
=======
                    <input type="text" name="username" id="username" class="input-text" value="<?= set_value('username'); ?>"><i class="fas fa-user"></i>
                    <small class="text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-row">
                    <label for="your-email">Email</label>
                    <input type="text" name="email" id="email" class="input-text mr-2" value="<?= set_value('email'); ?>"> <i class="fas fa-envelope"></i>
                    <small class="text-danger"><?= form_error('email'); ?></small>
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input type="password" name="password1" id="password1" class="input-text"> <i class="fas fa-lock"></i>
                    <small class="text-danger"><?= form_error('password1'); ?></small>
                </div>
                <div class="form-row">
                    <label for="password">Konfirmasi Password</label>
                    <input type="password" name="password2" id="password2" class="input-text"><i class="fas fa-lock"></i>
                    <small class="text-danger"><?= form_error('password2'); ?></small>
>>>>>>> YaumilBranch
                </div>
                <button type="submit" class="btn btn-success btn-user btn-block mb-4"> Daftar </button>
                <p>Sudah daftar? <a href="<?= base_url('nelayan/index'); ?>">Masuk</a></p>
            </form>
        </div>
    </div>

</body>


</html>