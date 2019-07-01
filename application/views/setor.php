<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-image: url('assets/img/carousel/nelayan-bg.jpg')">
    <div class=" container">
        <?php if (empty($data_profil)) :  ?>
            <div class="card text-white bg-secondary mb-5">
                <div class="card-header text-center">
                    <h3>ATTENTION</h3>
                    <p class="card-text text-success"><?= "Profil User: " . $users['username']; ?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center text-warning">Anda harus mengisi data profil kapal dahulu sebelum menyetor</h4>
                    <a class="btn btn-primary" href="<?= base_url('user/isiProfil'); ?>">Isi Profil Kapal</a>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($data_profil)) :  ?>
            <div class="card text-white bg-secondary mb-5">
                <div class="card-header text-center">
                    <h3>Input Setoran Data Ikan</h3>
                    <p class="card-text text-success"><?= "Profil User: " . $users['username']; ?></p>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center text-warning">Perhatian: Mohon isi data setoran dengan teliti dan bijak</h4>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <form action="<?= base_url('setor/input_setoran'); ?>" method="post">
                    <div class="form-row">
                        <div class="col-md-12 mb-5">
                            <button class="btn btn-secondary float-left mr-2" id="tambah">+</button>
                            <button class="btn btn-danger float-left" id="kurang">-</button>
                        </div><br>
                        <!--row added with js -->
                    </div>
                    <div id="fieldSetor">

                    </div>
                    <button class="btn btn-dark btn-block" type="submit" name="submit">Submit</button>
                </form>
            </div>
        <?php endif; ?>
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

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="<?= base_url('setor') ?>">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- -->
    <script>
        const field = function() {
            const row = document.createElement('div')
            row.setAttribute('class', 'row')
            //input jenis ikan
            const formGroupIkan = document.createElement('div')
            formGroupIkan.setAttribute('class', 'form-group col-md-4')
            const labelIkan = document.createElement('label')
            labelIkan.innerHTML = "Jenis (ex:tuna)"
            const inputIkan = document.createElement('input')
            inputIkan.setAttribute('class', 'form-control')
            inputIkan.setAttribute('name', `jenis[]`)
            inputIkan.setAttribute('required', true)

            const smallIkan = document.createElement('small')
            smallIkan.setAttribute('class', 'text-danger')
            smallIkan.innerHTML = "<?= form_error('jenis'); ?>"
            formGroupIkan.appendChild(labelIkan)
            formGroupIkan.appendChild(inputIkan)
            formGroupIkan.appendChild(smallIkan)
            row.appendChild(formGroupIkan)

            //input berat ikan
            const formGroupBerat = document.createElement('div')
            formGroupBerat.setAttribute('class', 'form-group col-md-4')
            const labelBerat = document.createElement('label')
            labelBerat.innerHTML = "Berat (kg)"
            const inputBerat = document.createElement('input')
            inputBerat.setAttribute('class', 'form-control')
            inputBerat.setAttribute('name', `berat[]`)
            inputBerat.setAttribute('required', true)
            inputBerat.setAttribute('type', 'number')

            const smallBerat = document.createElement('small')
            smallBerat.setAttribute('class', 'text-danger')
            smallBerat.innerHTML = "<?= form_error('berat'); ?>"
            formGroupBerat.appendChild(labelBerat)
            formGroupBerat.appendChild(inputBerat)
            formGroupBerat.appendChild(smallBerat)
            row.appendChild(formGroupBerat)

            //input harga ikan
            const formGroupHarga = document.createElement('div')
            formGroupHarga.setAttribute('class', 'form-group col-md-4')
            const labelHarga = document.createElement('label')
            labelHarga.innerHTML = "Harga (Rp)"
            const inputHarga = document.createElement('input')
            inputHarga.setAttribute('class', 'form-control')
            inputHarga.setAttribute('name', `harga[]`)
            inputHarga.setAttribute('required', true)
            inputHarga.setAttribute('type', 'number')
            const smallHarga = document.createElement('small')
            smallHarga.setAttribute('class', 'text-danger')
            smallHarga.innerHTML = "<?= form_error('harga'); ?>"
            formGroupHarga.appendChild(labelHarga)
            formGroupHarga.appendChild(inputHarga)
            formGroupHarga.appendChild(smallHarga)
            row.appendChild(formGroupHarga)

            return row
        }

        const tambah = document.querySelector('#tambah')
        console.log(tambah)
        const fieldSetor = document.querySelector('#fieldSetor')
        const kurang = document.querySelector('#kurang')
        fieldSetor.appendChild(field())
        let i = 1

        tambah.addEventListener('click', function(e) {

            event.preventDefault()
            fieldSetor.innerHTML = ''

            i++
            if (i === 1) {
                kurang.setAttribute('hidden', true)
            } else {
                kurang.removeAttribute('hidden')
            }
            for (let index = 1; index <= i; index++) {
                fieldSetor.appendChild(field())
            }
        })


        kurang.addEventListener('click', function(e) {

            event.preventDefault()
            fieldSetor.innerHTML = ''

            i--
            if (i === 1) {
                kurang.setAttribute('hidden', true)
            } else {
                kurang.removeAttribute('hidden')
            }
            for (let index = 1; index <= i; index++) {
                fieldSetor.appendChild(field())
            }
        })
        if (i === 1) {
            kurang.setAttribute('hidden', true)
        } else {
            kurang.removeAttribute('hidden')
        }
    </script>

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