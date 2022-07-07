<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<!-- header -->
<div class="container text-center" style="margin-top: 40px;">
    <h1> <span style="color: #FFE500;font-weight: 700;">Keranjang</span><img style="height: 4rem;" src="/assets/img/slogan/keranjang.png" alt=""></h1>
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
                                    
                                    <form action="edit_keranjang/<?= $data['rowid']; ?>" method="post">
                                    <tr>
                                        <td><?= $j; ?></td>
                                        <td><?= $data['name']; ?></td>
                                        <td><?= number_format($data['qty']); ?></td>
                                        <td>Rp. <?= number_format($data['price'], 0, ',', '.'); ?></td>
                                        <td>Rp. <?= number_format($data['subtotal'], 0, ',', '.'); ?></td>
                                        <td>

                                            <div class=" input-group flex-nowrap">
                                                <input onfocusout="edit('<?= $data['rowid']; ?>')" name="qty_keranjang" value="<?= $data['qty']; ?>" class="form-control text-center" id="qty_keranjang" type="number" placeholder="<?= $data['qty']; ?>"> 
                                            </div>
                                            <div class="form-button-action">
                                                <?php
                                                $rowid =  $data['rowid'];
                                                // echo $rowid;
                                                $qty = $data['qty']; ?>
                                                <a href="/customer/kurangi_produk_keranjang/<?= $rowid ?>" class="d-flex">
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger btn-lg" data-original-title="Mengurangi">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </a>

                                                <a href="/customer/tambah_keranjang/<?= $data['id']; ?>" class="d-flex">
                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary" data-original-title="Menambah">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </a>
                                                <input class="btn btn-primary ml-4" type="submit" value="Edit" id="submit"
                                            style="border-radius: 100px;">
                                            </div>
                                            <script>                   
                                            function edit(id){
                                                var qty = $('#qty_keranjang').val();
                                                $.ajax({
                                                    type: "POST",
                                                    url: "<?= base_url('edit_keranjang/'); ?>",
                                                    data: "key=value",
                                                    success: function(){ alert("success"); },
                                                    error: function(xhr, ajaxOptions, thrownError){
                                                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError );
                                                    }
                                                });
                                                $("#submit").click();
                                            }

                                            </script>
                                        </td>
                                    </tr>
                                </form>
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
                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Checkout">
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