<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="mb-0">NeStor</h1><br>
        <img class="profile-pic img-fluid mb-5 d-block mx-auto img-circle" src="https://www.mongabay.co.id/wp-content/uploads/2018/04/nelayan-pantai-depok-2.jpg" alt="">
        <hr class="star-light">
        <h2 class="font-weight-light mb-0"><?= "Selamat datang, " . $users['username']; ?></h2>
    </div>
</header>

<div class="copyright text-center text-white">
    <div class="container">
        <h5>Copyright &copy;2019</h5><br>
        <small>Projek RPL Kelompok D</small>
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