<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>

<!-- main -->
<div class="container">
    <h1 class="header mt-5 mb-4" style="font-weight: 700;text-align: center;">Profile saya</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <form action="/customer/ubah_profile/<?= $pelanggan->id; ?>" class="" method="POST"
                            enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="row justify-content-center ubah__porfile">
                                <div class="col-lg-12 p-2">
                                    <!-- input gambar preview -->
                                    <!-- <div class="form-group mt-lg-5 mt-md-4 text-center">
                                        <img id="img-upload-preview" width="200" height="200"
                                            src="<?= base_url(); ?>/assets/img/<?= $pelanggan->user_image; ?>"
                                            alt="image preview" width="200px" />
                                        <br>
                                        <input type="file" class="form-control form-control-file mt-4 mb-4" name="image"
                                            accept="image/*" id="image">
                                        <label for="image" class="btn btn-primary btn-round btn-lg"><i
                                                class="fa fa-file-image"></i> Upload gambar</label>
                                    </div> -->
                                    <!-- Image -->
                                    <input type="hidden" name="imageLama" value="<?= $pelanggan->user_image ?>">
                                    <div class="">
                                        <div class="text-center input-file input-file-image">
                                            <img class="img-upload-preview mx-auto rounded-circle" width="200"
                                                height="200"
                                                src="<?= base_url(); ?>/assets/img/<?= $pelanggan->user_image; ?>"
                                                alt="preview">
                                            <input type="file" class="form-control form-control-file" id="image"
                                                name="image" accept="image/*">
                                            <label for="image" class="btn btn-primary btn-round btn-lg"><i
                                                    class="fa fa-file-image"></i> Upload gambar</label>
                                        </div>
                                    </div>
                                    <!-- table -->
                                    <div class="dataUbah p-2">
                                        <!-- nama -->
                                        <table class="col-12">
                                            <tr>
                                                <td>
                                                    <span class="">Nama</span>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control my-2" style="float: right;"
                                                        name="nama" aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"
                                                        value="<?= $pelanggan->fullname; ?>">
                                                </td>
                                            </tr>
                                            <!-- alamat -->
                                            <tr>
                                                <td>
                                                    <span class="">Alamat</span>
                                                </td>
                                                <td>
                                                    <textarea name="alamat" class="form-control my-2 col-10" id=""
                                                        cols="30" rows="10"><?= $pelanggan->alamat; ?></textarea>
                                                </td>
                                            </tr>

                                            <!-- nohp -->
                                            <tr>
                                                <td>
                                                    <span class="">No HP</span>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control my-2 col-10"
                                                        style="float: right;" name="noHp"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"
                                                        value="<?= $pelanggan->noHp; ?>">
                                                </td>
                                            </tr>
                                            <!-- email -->
                                            <tr>
                                                <td>
                                                    <span class="">Email</span>
                                                </td>
                                                <td>
                                                    <input type="email" class="form-control my-2 col-10"
                                                        style="float: right;" name="email"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"
                                                        value="<?= $pelanggan->email; ?>" required>
                                                </td>
                                            </tr>
                                            <!-- username -->
                                            <tr>
                                                <td>
                                                    <span class="">Username</span>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control my-2 col-10"
                                                        style="float: right;" name="username"
                                                        aria-label="Sizing example input"
                                                        aria-describedby="inputGroup-sizing-default"
                                                        value="<?= $pelanggan->username; ?>" required>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="d-grid gap-2 col-6 mx-auto my-2">
                                            <input class="btn btn-primary text-right" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<script>
function previewImageUpdate() {
    document.getElementById("image-preview-update").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source-update").files[0]);

    oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview-update").src = oFREvent.target.result;
    };
};
</script>
<?= $this->endSection(); ?>