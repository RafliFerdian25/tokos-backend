<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<!-- header -->
<div class="container text-center" style="margin-top: 40px;">
    <h5> <span style="color: #FFE500;font-weight: 700;">Keranjang</span><img style="height: 4rem;"
            src="images/keranjang.png" alt=""></h5>
</div>

<!-- main -->
<div class="container" style="margin-top: 60px;">
    <!-- Tabel Keranjang -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Barang</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub-Total</th>
                                    <th style="width: 10%; text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($keranjang as $data) : ?>
                                <tr>
                                    <td><?= $j; ?></td>
                                    <td><?= $data['name']; ?></td>
                                    <td><?= number_format($data['qty']); ?></td>
                                    <td>Rp. <?= number_format($data['price'], 0, ',', '.'); ?></td>
                                    <td>Rp. <?= number_format($data['subtotal'], 0, ',', '.'); ?></td>
                                    <td>
                                        <div class="form-button-action">
                                            <?php
                                                $rowid =  $data['rowid'];
                                                $qty = $data['qty']; ?>
                                            <a href="/customer/kurangi_produk_keranjang/<?= $rowid . '/' . $qty; ?>"
                                                class="d-flex">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-danger btn-lg"
                                                    data-original-title="Mnegurangi">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </a>

                                            <a href="/customer/tambah_keranjang/<?= $data['id']; ?>" class="d-flex">
                                                <button type="button" data-toggle="tooltip" title=""
                                                    class="btn btn-link btn-primary" data-original-title="Menambah">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $j++; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-end">Total Belanja = </td>
                                    <td>
                                        Rp. <?= number_format($cart->total(), 0, ',', '.');  ?>
                                    </td>
                                    <td>
                                        <a href="/customer/pembayaran">
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-primary"
                                                data-original-title="Checkout">
                                                Checkout
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end tabel barang -->
    </div> <!-- end table -->
</div>



<?= $this->endSection(); ?>