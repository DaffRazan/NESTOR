<!doctype html>
<html lang="en">

<header class="masthead bg-primary text-white">
    <div class="container">
        <title> <?= $title ?> </title>
        <div class="card text-white bg-secondary mb-3">
            <div class="card-header text-center">
                <h5>Identitas User</h5>
                <p class="card-text text-success">
                    Profil User: <?= $users['username']; ?> <br>
                    User ID: <?= $users['id']; ?>
                </p>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary pb-5">Edit Form Profil Kapal</h4>
                <form class="container" method="post" action="<?php echo base_url('user/editProfil'); ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3><b>Kapal</b></h3>
                            <div class="form-group">
                                <label>Nama Kapal :</label>
                                <input id="nama_kpl" class="form-control" style="width: 30%;" type=" text" name="nama_kpl" value="<?= $data_profil['nama_kpl']; ?>">
                                <small class="text-danger"><?= form_error('nama_kpl'); ?></small>
                            </div>
                            <div class="form-group">
                                <label> Nomor Kapal :</label>
                                <input id="no_kpl" class="form-control" style="width:30%;" type="text" name="no_kpl" value="<?= $data_profil['no_kpl']; ?>">
                                <small class="text-danger"><?= form_error('no_kpl'); ?></small>
                            </div>
                            <div class="form-group">
                                <label> Umur Kapal :</label>
                                <input id="umur_kpl" class="form-control" style="width:30%;" type="text" name="umur_kpl" value="<?= $data_profil['umur_kpl']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Asal Negara :</label>
                                <input id="bendera" class="form-control" style="width:30%;" type="text" name="bendera" value="<?= $data_profil['bendera']; ?>">
                                <small class="text-danger"><?= form_error('bendera'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Anak Buah :</label>
                                <input id="jum_ABK" class="form-control" style="width:30%;" type="number" name="jum_ABK" style="width: 300px;" value="<?= $data_profil['jum_ABK']; ?>">
                            </div>
                            <div id="tempatABK"></div>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <h3><b>Pemilik</b></h3>
                            <div class="form-group">
                                <label>Nama Pemilik :</label>
                                <input id="nama_bos" class="form-control" style="width:30%;" type="text" name="nama_bos" value="<?= $data_profil['nama_bos']; ?>">
                                <small class="text-danger"><?= form_error('nama_bos'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Alamat :</label>
                                <input id="alamat_bos" class="form-control" style="width:30%;" type="text" name="alamat_bos" value="<?= $data_profil['alamat_bos']; ?>">
                                <small class="text-danger"><?= form_error('alamat_bos'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Umur :</label>
                                <input id="umur_bos" class="form-control" style="width:30%;" type="text" name="umur_bos" value="<?= $data_profil['umur_bos']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kewarganegaraan :</label>
                                <input id="kewarganegaraan" class="form-control" style="width:30%;" type="text" name="kewarganegaraan" value="<?= $data_profil['kewarganegaraan']; ?>">
                                <small class="text-danger"><?= form_error('kewarganegaraan'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Nomor Ponsel :</label>
                                <input id="no_ponsel" class="form-control" style="width:30%;" type="text" name="no_ponsel" value="<?= $data_profil['no_ponsel']; ?>">
                                <small class="text-danger"><?= form_error('no_ponsel'); ?></small>
                            </div>
                            <div class="form-group">
                                <label>Email :</label>
                                <input id="email" class="form-control" style="width:30%;" type="text" name="email" value="<?= $data_profil['email']; ?>">
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</header>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        let jumlahAbk = document.querySelector("#jum_ABK")
        let generateFormABK = function(index) {
            let formGroup = document.createElement('div')
            let label = document.createElement('label')
            let input = document.createElement('input')
            label.innerHTML = 'Nama ABK : '
            input.name = `namaABK${index+1}`
            // formGroup.setAtrribute('class','form-group')
            formGroup.appendChild(label)
            formGroup.appendChild(input)

            return formGroup
        }

        jumlahAbk.addEventListener('change', function(e) {
            console.log(e.target.value)
            let tempatABK = document.querySelector('#tempatABK')
            tempatABK.innerHTML = ''
            for (var i = 0; i < e.target.value; i++) {
                tempatABK.appendChild(generateFormABK(i))
            }
        })
    </script>
</body>

</html>