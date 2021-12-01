<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<!-- header -->
<div class="card-body">
    <?php if (session()->getFlashdata('byr-msg-barang')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('byr-msg-barang'); ?>
    </div>
    <?php endif; ?>
</div>
<div class="container text-center" style="margin-top: 40px;">
    <h5> <span style="color: #FFE500;">Cari Barangmu</span> di sini</h5>
</div>
<div class="inputbarang w-75 mx-auto">
    <div class="input-group mb-3">
        <?php echo form_open("/customer/search") ?>

        <input type="text" class="form-control border-dark" name="keyword" placeholder="masukan nama barang"
            aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="sumbit" id="button-addon2" name="search_submit"> <i
                class="bi bi-search mx-1"></i>
            Cari </button>
        <?php echo form_close() ?>

    </div>
</div>
<!-- menampilkan semua barang -->
<div class="container" style="margin-top: 60px;">
    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        <!-- setiap barang -->
        <?php foreach ($barang as $data) : ?>
        <div class="col">
            <div class="p-3 border ">
                <img src="/assets/img/productimg/<?= $data['file_gambar'] ?>"
                    style="width: 120px;background-size: cover;" alt="">
                <h5><?= $data['nama']; ?></h5>
                <p> IDR <?= number_format($data['harga']); ?> <br> Stok: <?= $data['stok']; ?> </p>
                <p><?= $data['keterangan'] ?></p>
                <a href="/customer/tambah_keranjang/<?= $data['idbarang']; ?>">
                    <div class="btn btn-warning">+ Keranjang</div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>