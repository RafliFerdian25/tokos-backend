
<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
        <!-- Content -->
        <div class="main-panel">
            <div class="container">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-abu pb-2 fw-bold">Dashboard Admin</h2>
                                <h5 class="text-abu op-7 mb-2">Sumber Jaya Furniture selalu menyediakan barang
                                    berkualitas, kuat, dan tahan lama.</h5>
                            </div>
                        </div>
                    </div>
                </div> <!-- end panel header -->

                <div class="page-inner mt--5">
                    <!-- 4 card -->
                    <div class="row mt--2">
                        <!-- sales card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-success bubble-shadow-small">
                                                <i class="flaticon-graph"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($total as $sum) : ?>
                                                <p class="card-category">Total Barang Terjual</p>
                                                <h4 class="card-title"><?= $sum['jumlah']; ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end sales card -->

                        <!-- order card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-secondary bubble-shadow-small ">
                                                <i class="flaticon-success mx-0"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($pembeli as $pembeli) : ?>
                                                <p class="card-category">Total Pembelian</p>
                                                <h4 class="card-title"><?= $pembeli['idpenjualan']; ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end order card -->

                        <!-- income card -->
                        <div class="col-sm-12 col-md-4">
                            <div class="card card-stats card-round">
                                <div class="card-body ">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                <i class="flaticon-users"></i>
                                            </div>
                                        </div>
                                        <div class="col col-stats ml-3 ml-sm-0">
                                            <div class="numbers">
                                                <?php foreach ($pendapatan as $pendapatan) : ?>
                                                <p class="card-category">Total Pendapatan</p>
                                                <h4 class="card-title">IDR
                                                    <?= number_format($pendapatan['total_penjualan']); ?></h4>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end income card -->

                    </div> <!-- end 4 card -->

                    <!-- table bulanan and top sales -->
                    <div class="row">
                        <!-- top sales -->
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Produk Terlaris</div>
                                </div> <!-- end card header -->

                                <div class="card-body pb-0">

                                    <!-- top sale -->
                                    <?php foreach ($terlaris as $terlaris) : ?>
                                    <div class="separator-dashed"></div>
                                    <div class="d-flex">
                                        <div class="avatar">
                                            <img src="assets/img/logoproduct3.svg" alt="..."
                                                class="avatar-img rounded-circle">
                                        </div>
                                        <div class="flex-1 pt-1 ml-2">
                                            <h6 class="fw-bold mb-1"><?= $terlaris['namaBarang']; ?></h6>
                                        </div>
                                        <div class="d-flex ml-auto align-items-center">
                                            <h3 class="text-info fw-bold"><?= $terlaris['total_terjual']; ?></h3>
                                        </div>
                                    </div> <!-- End top sale -->
                                    <?php endforeach; ?>

                                    <div class="separator-dashed"></div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end top sales -->

                        <!-- tabel bulanan -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Penjualan Bulanan</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table teble table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Bulan</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Total Penjualan</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($bulan as $bulan) : ?>
                                                <tr>
                                                    <td><?php if ($bulan['bulan'] == 1) {
                                                                echo "Januari";
                                                            } else if ($bulan['bulan'] == 2) {
                                                                echo "Februari";
                                                            } else if ($bulan['bulan'] == 3) {
                                                                echo "Maret";
                                                            } else if ($bulan['bulan'] == 4) {
                                                                echo "April";
                                                            } else if ($bulan['bulan'] == 5) {
                                                                echo "Mei";
                                                            } else if ($bulan['bulan'] == 6) {
                                                                echo "Juni";
                                                            } else if ($bulan['bulan'] == 7) {
                                                                echo "Juli";
                                                            } else if ($bulan['bulan'] == 8) {
                                                                echo "Agustus";
                                                            } else if ($bulan['bulan'] == 9) {
                                                                echo "September";
                                                            } else if ($bulan['bulan'] == 10) {
                                                                echo "Oktober";
                                                            } else if ($bulan['bulan'] == 11) {
                                                                echo "November";
                                                            } else if ($bulan['bulan'] == 12) {
                                                                echo "Desember";
                                                            }
                                                            ?></td>
                                                    <td><?= $bulan['jumlah']; ?></td>
                                                    <td><?= number_format($bulan['total_penjualan']); ?></td>
                                                    <td><a href="/admin/laporan/<?= $bulan['bulan']; ?>"
                                                            class="badge badge-info">Lihat Detail</a></td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <!-- End Bulan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end tabel bulanan -->
                    </div> <!-- end bulanan and sales -->
                </div> <!-- end page inner -->
            </div> <!-- end container -->
        
            <footer class="footer text-center">	
			<p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
					</footer> <!-- end footer -->
        </div> <!-- end main panel -->
    
<?= $this->endSection(); ?>