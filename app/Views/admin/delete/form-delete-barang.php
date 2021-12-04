<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

<!-- detail barang -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Hapus Barang</h4>
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
                        <a href="/edit/hapusbarang">Hapus Barang</a>
                    </li>
                </ul>
            </div> <!-- end page header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- pictures -->
                                <?php foreach ($barang as $key => $value) {
									$id = $barang[$key]['idbarang'];
								} ?>
                                <?php foreach ($barang as $data) : ?>
                                <div class="col-md-6 col-sm-12 row image-gallery">
                                    <a href="/assets/img/productimg/<?= $data['file_gambar'] ?>">
                                        <img src="/assets/img/productimg/<?= $data['file_gambar'] ?>" class="img-fluid">
                                    </a>
                                </div> <!-- end pictures -->

                                <!-- form delete -->
                                <div class="col-md-6 com-sm-12">
                                    <form action="/edit/hapusbarang/<?= $id; ?>" method="POST">
                                        <?php $tgl_insert = date('d F Y', strtotime($data['tgl_insert'])); ?>
                                        <?php $tgl_update = date('d F Y', strtotime($data['tgl_update'])); ?>

                                        <p>ID 000<?= $data['idbarang']; ?> </p>
                                        <h1 class="fs_big fw-bold"><?= $data['nama']; ?></h1>
                                        <p><?= $data['keterangan']; ?></p>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td class="fw-bold">Harga</td>
                                                    <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Stok</td>
                                                    <td><?= $data['stok']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Tanggal Input</td>
                                                    <td><?= $tgl_insert ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-bold">Tanggal Update</td>
                                                    <td><?= $tgl_update; ?></td>
                                                </tr>
                                            </thead>
                                        </table> <!-- end table -->

                                        <div class="card-body">
                                            <div class="d-flex justify-content-end px-lg-4 px-sm-2">
                                                <a href="/admin/barang" class="btn btn-info" role="button"
                                                    style="border-radius: 30px;">Kembali</a>
                                                <button type="submit" class="btn btn-danger ml-4" role="button"
                                                    style="border-radius: 30px;">Hapus Data</button>
                                            </div>
                                        </div> <!-- end button action -->
                                    </form>
                                    <?php endforeach; ?>
                                    <!-- end form -->
                                </div> <!-- End Delete -->
                            </div> <!-- end row -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end page inner -->
    </div> <!-- end container -->

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer> <!-- end footer -->
</div>
<?= $this->endSection(); ?>