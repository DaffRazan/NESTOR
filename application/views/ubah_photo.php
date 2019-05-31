<!doctype html>
<html lang="en">

<header class="masthead bg-primary text-white" style="background-image: url('../assets/img/carousel/nelayan-bg.jpg')">
    <div class="container">
        <title> <?= $title ?> </title>
        <div class="card bg-secondary mb-3 text-center">
            <div class="card-header text-center">
                <h5 style="color: yellow;">Username: <?= $users['username']; ?></h5>
            </div>
            <div class="card-body">
                <h4 class="card-title text-center text-primary pb-5">Ubah Photo User</h4>

                <div class="row">
                </div>
                <div class="card mb-3 mx-auto p-4 bg-secondary" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <?= $this->session->flashdata('message'); ?>

                            <?= form_open_multipart('user/ubahphoto'); ?>
                            <div class="form-group">
                                <div class="">
                                    <label class="mr-2" for="username">Username</label>
                                    <input type="text" class="" id="username" name="username" value="<?= $users['username']; ?>" readOnly>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Ubah</button>
                            </form>
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
            <p>&copy;2019 Nestor All Rights Reserved</p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        //script popup name file gambar saat mau upload file bootstrap
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>



</html>