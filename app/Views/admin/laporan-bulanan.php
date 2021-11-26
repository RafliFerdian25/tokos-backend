<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>

        <!-- main panel -->
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Laporan Penjualan Bulanan</h4>
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
                                <?php foreach ($rekap as $bulan) : ?>
                                <a href="/admin/laporan/<?= $bulan['bulan']; ?>"> <?php endforeach; ?> Laporan Penjualan
                                    Bulanan</a>

                            </li>
                        </ul>
                    </div> <!-- end page header -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">

                                        <h4 class="card-title">
                                            <?php if ($bulan['bulan'] == 1) {
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
											?>
                                        </h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- Table laporan penjualan -->
                                        <table
                                            class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Barang</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Harga Satuan</th>
                                                    <th scope="col">Total Penjualan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($rekap as $data) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $data['namaBarang']; ?></td>
                                                    <td><?= $data['namaKategori']; ?></td>
                                                    <td><?= $data['jumlah']; ?></td>
                                                    <td><?= $data['hargaSatuan']; ?></td>
                                                    <td><?= $data['totalPenjualan']; ?></td>
                                                </tr>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <!-- Tabel total keseluruhan -->
                                        <table class="table mt-4">

                                            <tbody>
                                                <tr>
                                                    <th>Total Jumlah</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>


                                                    <td><span class="mr-3">=</span>
                                                        <strong>
                                                            <?php $total = 0; ?>
                                                            <?php foreach ($rekap as $data) : ?>
                                                            <?php $total = $total + $data['jumlah']; ?>
                                                            <?php endforeach; ?>
                                                            <?php echo $total; ?>
                                                        </strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="6">Total Penjualan Keseluruhan</th>
                                                    <td><span class="mr-3">=</span>
                                                        <strong><?php $totalPenjualan = 0; ?>
                                                            <?php foreach ($rekap as $data) : ?>
                                                            <?php $totalPenjualan = $totalPenjualan + $data['totalPenjualan']; ?>
                                                            <?php endforeach; ?>
                                                            <?php echo $totalPenjualan; ?>
                                                        </strong>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card-body d-flex justify-content-end align-items-center">
                                    <a href="/" class="btn btn-danger btn-round" role="button">Kembali</a>
                                    <a href="/error/" class="btn btn-info btn-round ml-4" role="button">Cetak</a>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end tabel barang -->
                    </div> <!-- end row -->
                </div> <!-- end page inner -->
            </div> <!-- end container -->

            <footer class="footer text-center">
            <footer class="footer text-center">	
			<p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
					</footer> <!-- end footer -->            </footer> <!-- end footer -->
        </div> <!-- end main panel -->
<?= $this->endSection(); ?>