<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<!-- main panel -->
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <!-- page header -->
            <div class="page-header">
                <h4 class="page-title">Data Barang</h4>
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
                </ul>
            </div> <!-- end page header -->

            <!-- Tabel Barang -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- alert kelola barang -->
                            <?php if (session()->getFlashdata('add-msg-barang')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('add-msg-barang'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('edit-msg-barang')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('edit-msg-barang'); ?>
                            </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('delete-msg-barang')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('delete-msg-barang'); ?>
                            </div>
                            <?php endif; ?>
                            <!-- end alert kelola barang -->
                        </div>
                        <!-- search -->
                        <div class="search__barang">
                            <div class="col">
                                <div class="col-12">
                                    <div class="mx-auto my-3" id="search-nav">

                                        <!-- <form name="form_search" method="GET" action="" class=""> -->
                                        <div class="form__search form-control">
                                            <?php echo form_open("/admin/search") ?>
                                            <button class="form__search__submit p-1 btn" type="submit"
                                                name="search_submit" value="cari"><i
                                                    class="fa fa-search search-icon"></i></button>
                                            <input class="form__search__text p-1" type="text" name="keyword"
                                                placeholder="search">
                                            <!-- <input class="col-2 form__search__submit p-1" type="submit"
                                                name="search_submit" value="cari"> -->

                                            <?php echo form_close() ?>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end search -->

                        <!-- barang section -->
                        <div class="barang__section">
                            <!-- menampilkan semua barang -->
                            <div class="barang_content" style="margin-top: 60px;">
                                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                                    <!-- mengambil data barang -->
                                    <?php foreach ($barang as $data) : ?>
                                    <?php $idbarang = $data['idbarang']; ?>
                                    <div class="col-12 col-xl-3 col-sm-6 col-md-4 mb-4">
                                        <div class="p-3 border card__tampil__barang">
                                            <!-- tampil barang -->

                                            <div class="col tampil__barang">
                                                <div class="gambar__barang col-6 col-sm-12">
                                                    <img src="/assets/img/productimg/<?= $data['file_gambar'] ?>"
                                                        class="data__barang__gambar">
                                                </div> <!-- end pictures -->
                                                <div class="keterangan__barang col-6 col-sm-12">
                                                    <h4 class="fw-bold"> <?= $data['nama']; ?></h4>
                                                    <div class="w-100"></div>
                                                    <p> Rp <?= number_format($data['harga']); ?> <br> Stok:
                                                        <?= $data['stok']; ?> </p>
                                                    <div class="barang__action">
                                                        <a href="/admin/detail/<?= $data['idbarang']; ?>">
                                                            <div class="btn btn-warning px-3 py-1 me-2">Ubah</div>
                                                        </a>
                                                        <a href="/edit/detailhapusbarang/<?= $data['idbarang']; ?>">
                                                            <div class="btn btn-danger px-3 py-1 my-2">Hapus</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end tampil barang -->
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- end ambil data barang -->
                                </div>
                            </div>
                        </div>
                        <!-- end barang section -->
                    </div>
                </div> <!-- end tabel barang -->
            </div> <!-- end row -->
        </div> <!-- end page inner -->
    </div> <!-- end container -->

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer> <!-- end footer -->
</div> <!-- end main panel -->

<?= $this->endSection(); ?>