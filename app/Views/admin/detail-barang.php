<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<!-- detail barang -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <!-- page header -->
            <div class="page-header">
                <h4 class="page-title">Detail Barang</h4>
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
                        <a href="#">Detail Barang</a>
                    </li>
                </ul>
            </div> <!-- end page header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($barang as $barang) : ?>
                                <div class="col-md-6 col-sm-12 row image-gallery">
                                    <a href="/assets/img/productimg/<?= $barang['file_gambar'] ?>">
                                        <img src="/assets/img/productimg/<?= $barang['file_gambar'] ?>"
                                            class="img-fluid">
                                    </a>
                                </div> <!-- end pictures -->

                                <?php $tgl_insert = date('d F Y', strtotime($barang['tgl_insert'])); ?>
                                <?php $tgl_update = date('d F Y', strtotime($barang['tgl_update'])); ?>
                                <div class="col-md-6 com-sm-12">
                                    <p> ID 000<?= $barang['idbarang']; ?></p>
                                    <h1 class="fs_big fw-bold"><?= $barang['nama']; ?></h1>
                                    <p><?= $barang['keterangan']; ?></p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td class="fw-bold">Harga</td>
                                                <td><?= $barang['harga']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Stok</td>
                                                <td><?= $barang['stok']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">Tanggal Input</td>
                                                <td><?= $tgl_insert ?></td>
                                            </tr>

                                        </thead>
                                    </table>
                                </div> <!-- end desc -->
                                <?php endforeach; ?>
                            </div> <!-- end row -->
                        </div> <!-- end card body -->

                        <div class="card-body">
                            <div class="d-flex justify-content-end px-lg-4 px-sm-2">
                                <a href="/admin/barang" class="btn btn-danger" role="button"
                                    style="border-radius: 30px;">Kembali</a>
                                <a href="/edit/barang/<?= $barang['idbarang']; ?>" class="btn btn-primary ml-4"
                                    role="button" style="border-radius: 30px;">Edit Data</a>
                            </div>
                        </div>
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