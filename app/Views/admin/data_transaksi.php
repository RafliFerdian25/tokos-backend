<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Transaksi</h4>
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
                        <a href="/admin/transaksi">Data Transaksi</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaksi Penjualan</h4>
                        </div>
                        <div class="card-body">
                            <!-- alert kelola kategori -->
                            <?php if (session()->getTempdata('edit-msg-transaksi')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getTempdata('edit-msg-transaksi'); ?>
                            </div>
                            <?php endif; ?>
                            <!-- end alert kelola kategori -->

                            <div class="table-responsive">
                                <table id="multi-filter-select" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No Invoice</th>
                                            <th>Waktu Pemesanan</th>
                                            <th>Nama Pembeli</th>
                                            <th>Jumlah</th>
                                            <th>Harga Total</th>
                                            <th>Status</th>
                                            <th>Update Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($transaksi as $data) : ?>
                                        <?php $tgl = date('d F Y', strtotime($data['tgl_penjualan'])); ?>
                                        <tr>
                                            <td><?= $data['idpenjualan']; ?></td>
                                            <td><?= $tgl; ?></td>
                                            <td><?= $data['nama_pembeli']; ?></td>
                                            <th><?= $data['jumlah']; ?></th>
                                            <th><?= $data['harga_total']; ?></th>
                                            <td><span class="badge <?php if ($data['status'] == 'Sukses') {
																			echo 'badge-success';
																		} elseif ($data['status'] == 'Dikirim') {
																			echo 'badge-primary';
																		} elseif ($data['status'] == 'Belum Transfer') {
																			echo 'badge-warning';
																		} elseif ($data['status'] == 'Dibatalkan') {
																			echo 'badge-danger';
																		} ?>" <?php if ($data['status'] == 'Belum Dikirim') : echo 'style="background-color : grey;"';
																endif; ?>><?= $data['status']; ?></span></td>
                                            <td style="text-align: center;">
                                                <a href="/edit/transaksi/<?= $data['idpenjualan']; ?>">
                                                    <button type="button" class="btn">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                </a>
                                            </td>
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
    </div> <!-- end container -->

    <footer class="footer text-center">
        <p>Copyright &copy; 2021 | <span class="fw-bold">Tokos</span> Toko Anak Kos.</p>
    </footer>
</div> <!-- end main panel -->
<?= $this->endSection(); ?>