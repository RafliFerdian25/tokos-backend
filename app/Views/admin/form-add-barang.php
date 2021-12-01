<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<!-- Formulir disini -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Formulir Tambah Barang</h4>
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
                        <a href="/tambah/tambah">Formulir tambah barang</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Tambah Barang</div>
                            <div class="card-category">Masukkan data barang dengan sebenar-benarnya</div>
                        </div>
                        <form action="/tambah/tambahBarang" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder=""
                                            required autofocus>
                                        <!--  -->
                                    </div>
                                </div> <!-- end nama -->

                                <div class="form-group form-show-validation row">
                                    <label for="stok" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Stok <span
                                            class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input class="form-control" type="number" id="stok" min="1" step="1"
                                            name="stok">
                                    </div>
                                </div> <!-- end stok -->

                                <div class="form-group form-show-validation row">
                                    <label for="harga" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Harga (Rp)
                                        <span class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <input class="form-control" type="number" id="harga" min="500" step="500"
                                            name="harga">
                                    </div>
                                </div> <!-- end harga -->

                                <div class="form-group form-show-validation row">
                                    <label for="keterangan"
                                        class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan <span
                                            class="required-label">*</span></label>
                                    <br>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <textarea class="form-control" name="keterangan" id="Keterangan" cols="30"
                                            rows="10">
												</textarea>
                                    </div>
                                </div> <!-- end keterangan -->



                                <div class="form-group form-show-validation row">
                                    <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Gambar <span
                                            class="required-label">*</span></label>
                                    <div class="col-lg-7 col-md-9 col-sm-8">
                                        <div class="input-file input-file-image">
                                            <img class="img-upload-preview" width="100" height="100"
                                                src="http://placehold.it/100x100" alt="preview">
                                            <input type="file" class="form-control form-control-file" id="image"
                                                name="image" accept="image/*" required>

                                            <label for="image" class="btn btn-primary btn-round btn-lg"><i
                                                    class="fa fa-file-image"></i> Upload gambar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <a href="/admin/barang" class="btn btn-danger" style="border-radius: 100px;">
                                            Batal
                                        </a>
                                        <input class="btn btn-primary ml-4" type="submit" value="Tambah"
                                            style="border-radius: 100px;">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End container-->
    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer>
</div>

<?= $this->endSection(); ?>