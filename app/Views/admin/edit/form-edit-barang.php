<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Edit Barang</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="/">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/barang">Data Barang</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="/edit/barang">Formulir Edit Barang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Barang</div>
                            <div class="card-category">Masukkan data barang dengan sebenar-benarnya</div>
                        </div>
                        <?php foreach ($barang as $key => $value) {
							$id = $barang[$key]['idbarang'];
						} ?>
                        <form action="/edit/editbarang/<?= $id ?>" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <?php foreach ($barang as $barang) : ?>
                            <input type="hidden" name="imageLama" value="<?= $barang['file_gambar'] ?>">
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama"
                                            value="<?= $barang['nama']; ?>" required>
                                    </div>
                                </div> <!-- end nama -->

                                <div class="form-group form-show-validation row">
                                    <label for="stok" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah <span
                                            class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input class="form-control" type="number" id="stok" min="1" step="1" name="stok"
                                            value="<?= $barang['stok']; ?>">
                                    </div>
                                </div> <!-- end stok -->

                                <div class="form-group form-show-validation row">
                                    <label for="harga" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Harga (Rp)
                                        <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input class="form-control" type="number" id="harga" min="500" step="500"
                                            name="harga" value="<?= $barang['harga']; ?>">
                                    </div>
                                </div> <!-- end harga -->

                                <div class="form-group form-show-validation row">
                                    <label for="keterangant"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan <span
                                            class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="keterangan" id="Keterangan" cols="30"
                                            rows="10" value=""><?= $barang['keterangan']; ?>
													</textarea>
                                    </div>
                                </div> <!-- end keterangan -->

                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview" width="100" height="100"
                                                src="/assets/img/productimg/<?= $barang['file_gambar'] ?>"
                                                alt="preview">
                                            <input type="file" class="form-control form-control-file" id="image"
                                                name="image" accept="image/*">
                                            <label for="image" class="btn btn-primary btn-round btn-lg"><i
                                                    class="fa fa-file-image"></i> Upload gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/barang" class="btn btn-danger"
                                            style="border-radius: 100px;">Batal</a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Ubah"
                                            style="border-radius: 100px;">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer> <!-- end footer -->
</div> <!-- end main panel -->


<?= $this->endSection(); ?>