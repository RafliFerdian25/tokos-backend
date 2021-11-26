<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

        <!-- Formulir disini -->
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Formulir Edit Transaksi</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="/admin/index">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/transaksi">Data Transaksi</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="/edit/transaksi">Formulir Edit Transaksi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit Transaksi</div>
                                    <div class="card-category">Masukkan data transaksi dengan sebenar-benarnya</div>
                                </div>
                                <?php foreach ($transaksi as $key => $value) {
                                    $id = $transaksi[$key]['idpenjualan'];
                                } ?>
                                <form action="/edit/edittransaksi/<?= $id ?>" method="POST">
                                    <?php foreach ($transaksi as $data) : ?>
                                    <div class="card-body">
                                        <div class="form-group form-show-validation row">
                                            <label for="idpenjualan"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">ID Invoice <span
                                                    class="required-label">*</span></label>
                                            <div class="col-lg-7 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="idpenjualan"
                                                    name="idpenjualan" placeholder=""
                                                    value="<?= $data['idpenjualan'] ?>" disabled>
                                            </div>
                                        </div> <!-- end invoice -->

                                        <div class="form-group form-show-validation row">
                                            <label for="nama_produk"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Produk <span
                                                    class="required-label">*</span></label>
                                            <div class="col-lg-7 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="nama_produk"
                                                    name="nama_produk" placeholder=""
                                                    value="<?= $data['nama_barang'] ?>" disabled>
                                            </div>
                                        </div> <!-- end nama produk -->

                                        <div class="form-group form-show-validation row">
                                            <label for="tgl_penjualan"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Waktu Pemesanan
                                                <span class="required-label">*</span></label>
                                            <div class="col-lg-7 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="tgl_penjualan"
                                                    name="tgl_penjualan" placeholder=""
                                                    value="<?= $data['tgl_penjualan'] ?>" disabled>
                                            </div>
                                        </div>
                                        <!-- end waktu pemesanan -->

                                        <div class="form-group form-show-validation row">
                                            <label for="status"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status <span
                                                    class="required-label">*</span></label>
                                            <div class="col-lg-7 col-md-9 col-sm-8">
                                                <input type="text" class="form-control" id="status" name="status"
                                                    placeholder="" value="<?= $data['status'] ?>" disabled>
                                            </div>
                                        </div> <!-- end status -->

                                        <div class="form-group form-show-validation row">
                                            <label for="updateStatus"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Update Status
                                                <span class="required-label">*</span></label>
                                            <div class="col-lg-7 col-md-9 col-sm-8">
                                                <div class="selectgroup selectgroup-pills d-flex">
                                                    <?php foreach ($status as $status) : ?>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="update_status" id="update_status"
                                                            class="selectgroup-input bg-red"
                                                            value="<?= $status['idstatus']; ?>"
                                                            <?php if ($statusPenjualan['idstatus'] = $status['idstatus']) : echo 'checked';
                                                                                                                                                                                                    endif; ?>>

                                                        <span class="selectgroup-button"><?= $status['nama']; ?></span>
                                                    </label> <!-- end sukses -->
                                                    <?php endforeach; ?>
                                                </div> <!-- end selectgroup -->
                                            </div> <!-- end col -->
                                        </div> <!-- end edit status -->
                                    </div> <!-- end card body -->

                                    <div class="card-action">
                                        <div class="row">
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <a href="/admin/transaksi" class="btn btn-danger"
                                                    style="border-radius: 100px;">Batal</a>
                                                <input class="btn btn-primary ml-4" type="submit" value="Edit"
                                                    style="border-radius: 100px;">
                                            </div>
                                        </div>
                                    </div> <!-- end button -->
                                    <?php endforeach; ?>
                                </form> <!-- end form -->
                            </div> <!-- end card -->
                        </div> <!-- end col 12 -->
                    </div> <!-- end row -->
                </div> <!-- end page inner -->
            </div> <!-- end container -->

            <footer class="footer text-center">
            <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>            </footer> <!-- end footer -->
        </div> <!-- end main panel -->


<?= $this->endSection(); ?>