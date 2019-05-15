<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">

        <div class="card text-white bg-secondary mb-5">
            <div class="card-header text-center">
                <h5>Input Setoran Data Ikan</h5>
                <p class="card-text text-success"><?= "Profil User: " . $users['username']; ?></p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-warning">Perhatian: Mohon isi data setoran dengan teliti dan bijak</h4>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <form action="<?= base_url('setor/input_setoran'); ?>" method="post">
                <div class="form-row">
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="col-md-12 mb-5">
                        <button class="btn btn-secondary float-left mr-2" id="tambah">+</button>
                        <button class="btn btn-danger float-left" id="kurang">-</button>
                    </div><br>
                    <!--row added with js -->
                </div>
                <div id="fieldSetor">
                    <!-- <div class="form-row">
                        <div class="col">
                            <label for="">Jenis (ex:tuna)</label>
                            <input name="jenis[]" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="">Berat (kg)</label>
                            <input name="berat[]" type="number" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="">Harga (Rp)</label>
                            <input name="harga[]" type="number" class="form-control" required>
                        </div>
                    </div> -->
                </div>
                <button class="btn btn-dark btn-block" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</header>

<body>
    <div class="copyright text-center text-white">
        <div class="container-fluid">
            <h3>Hubungi Kami</h3>
            <span><i class="fas fa-envelope mr-2"></i>nestor@gmail.com</span>
            <span><i class="fas fa-phone mb-3 ml-2 mr-2"></i>082276934634</span>
            <p>&copy;2019 Nestor All Rights Reserved</p>
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
        let i = 0
        const fieldSetor = document.querySelector('#fieldSetor')
        tambah.addEventListener('click', function(e) {
            event.preventDefault()
            fieldSetor.innerHTML = ''

            i++

            for (let index = 1; index <= i; index++) {
                fieldSetor.appendChild(field())
            }
        })

        const kurang = document.querySelector('#kurang')
        kurang.addEventListener('click', function(e) {
            event.preventDefault()
            fieldSetor.innerHTML = ''

            i--

            for (let index = 1; index <= i; index++) {
                fieldSetor.appendChild(field())
            }
        })
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