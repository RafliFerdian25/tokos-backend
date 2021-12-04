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
            <div class="produk__teerjual">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Produk Pesanan</h4>
                            </div>
                            <div class="card-body">
                                <!-- alert  -->
                                <?php if (session()->getTempdata('edit-msg-transaksi')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getTempdata('edit-msg-transaksi'); ?>
                                </div>
                                <?php endif; ?>
                                <!-- end alert  -->

                                <div class="table-responsive p-3">
                                    <table id="multi-filter-select" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <?php $i = 1; ?>
                                        <tbody>
                                            <?php foreach ($detail as $data) : ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $data['nama_barang']; ?></td>
                                                <th><?= $data['qty']; ?></th>
                                                <th><?= $data['harga']; ?></th>
                                                <td><?= $data['Total']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="detail__transaksi">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Detail Transaksi</div>
                            </div>
                            <?php foreach ($transaksi as $key => $value) {
                                $id = $transaksi[$key]['idpenjualan'];
                            } ?>

                            <form action="/edit/edittransaksi/<?= $id ?>" method="POST">
                                <?php foreach ($transaksi as $data) : ?>
                                <div class="card-body">
                                    <div class="form-group form-show-validation row">
                                        <label for="idpenjualan"
                                            class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">ID
                                            Invoice </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="idpenjualan" name="idpenjualan"
                                                placeholder="" value="<?= $data['idpenjualan'] ?>" disabled>
                                        </div>
                                    </div> <!-- end invoice -->

                                    <div class="form-group form-show-validation row">
                                        <label for="tgl_penjualan"
                                            class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Waktu Pemesanan
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="tgl_penjualan"
                                                name="tgl_penjualan" placeholder=""
                                                value="<?= $data['tgl_penjualan'] ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- end waktu pemesanan -->

                                    <div class="form-group form-show-validation row">
                                        <label for="fullname" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama
                                            Pembeli
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="nama_pembeli" name="nama_kirim"
                                                placeholder="" value="<?= $data['nama_kirim'] ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- end nama pembeli -->

                                    <div class="form-group form-show-validation row">
                                        <label for="noHp" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor
                                            Telepon
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="noHp" name="noHp" placeholder=""
                                                value="0<?= $data['noHp'] ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- end No Hp -->

                                    <div class="form-group form-show-validation row">
                                        <label for="alamat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <textarea type="text" class="form-control" id="alamat_kirim"
                                                name="alamat_kirim" placeholder="" disabled>
                                                <?= $data['alamat_kirim']; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- end alamat -->
                                    <div class="form-group form-show-validation row">
                                        <label for="metode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Metode
                                            Pembayaran
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="metode" name="metode"
                                                placeholder="" value="<?= $data['metode_pembayaran'] ?>" disabled>
                                        </div>
                                    </div> <!-- end metode pembayaran -->
                                    <?php
                                        if ($data['metode_pembayaran'] != "COD") : ?>

                                    <div class="form-group form-show-validation row">
                                        <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Bukti
                                            Pembayaran
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <!-- <input type="text" class="form-control" id="status" name="status"
                                                placeholder="" value="<?= $data['status'] ?>" disabled> -->
                                            <img src="<?= base_url(); ?>/assets/img/bukti/<?= $data['bukti_bayar']; ?>"
                                                alt="" img-thumbnail>
                                        </div>
                                    </div> <!-- end bukti pembayaran -->
                                    <?php endif; ?>
                                    <div class="form-group form-show-validation row">
                                        <label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status
                                        </label>
                                        <div class="col-lg-7 col-md-9 col-sm-8">
                                            <input type="text" class="form-control" id="status" name="status"
                                                placeholder="" value="<?= $data['status'] ?>" disabled>
                                        </div>
                                    </div> <!-- end status -->

                                    <div class="form-group form-show-validation row">
                                        <label for="updateStatus"
                                            class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Update Status
                                        </label>
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
            </div>
            <!--end detail transaksi-->
        </div> <!-- end page inner -->
    </div> <!-- end container -->

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer> <!-- end footer -->
</div> <!-- end main panel -->


<?= $this->endSection(); ?>