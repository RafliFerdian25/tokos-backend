<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<!-- <div class="main-panel"> -->
<div class="container">
    <div class="page-inner">
        <!-- <div class="page-header"> -->
        <!-- <ul class="breadcrumbs">
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
                </ul> -->
        <!-- </div> -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaksi Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <!-- alert  -->
                        <?php if (session()->getTempdata('edit-msg-transaksi')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getTempdata('edit-msg-transaksi'); ?>
                        </div>
                        <?php endif; ?>
                        <!-- end alert  -->

                        <div class="table-responsive">
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
                                <tbody>
                                    <?php foreach ($transaksi as $data) : ?>
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
</div> <!-- end container -->
<!-- </div> end main panel -->
<?= $this->endSection(); ?>