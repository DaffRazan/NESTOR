<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('assets/img/carousel/nelayan-bg.jpg')">
    <div class="container">
        <h1 class="mb-0 pt-5" style="color:yellow;">NeStor</h1><br>
        <img class="profile-pic img-fluid mb-5 d-block mx-auto" src="<?= base_url('assets/img/profile/' . $users['image']); ?>" alt="">
        <hr class="star-light">
        <div class="container bg-primary" style="width:50%;">
            <h2 class="font-weight-light mb-0"><?= "Selamat datang, " . $users['username']; ?></h2>
        </div>
        <?= $this->session->flashdata('pesan'); ?>
    </div>
</header>

<div class="copyright text-center text-white">
    <div class="container">
        <h3>Hubungi Kami</h3>
        <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
        <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
<<<<<<< HEAD
        <p>&copy;2019 Nestor All Rights Reserved</p>
=======
        <p>&copy; Nestor <?= date('Y'); ?> All Rights Reserved </p>
>>>>>>> YaumilBranch
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
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

</html>