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
    <h1> <span style="color: #FFE500;">Cari Barangmu</span> <strong>di sini</strong> </h1>
</div>
<div class="container text-center ">

    <?php echo form_open("/customer/search") ?>

    <input type="text" class="p-2 w-50 border" name="keyword" placeholder="masukan nama barang" aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-success" type="sumbit" id="button-addon2" name="search_submit"><i class="bi bi-search"></i></>
        <strong>Cari</strong> </button>
    <?php echo form_close() ?>

</div>


<!-- menampilkan semua barang -->
<div class="container" style="margin-top: 60px;">
    <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
        <!-- setiap barang -->
        <?php foreach ($barang as $data) : ?>
            <div class="col">
                <div class="p-3 border ">
                    <div class="imgbarang" style="background-image: url(/assets/img/productimg/<?= $data['file_gambar'] ?>); width:120px; height:120px;background-size:cover;background-position:center;background-repeat:no-repeat">

                    </div>
                    <!-- <img src="/assets/img/productimg/
                    " style="width: 120px;background-size: cover;" alt=""> -->
                    <h5><?= $data['nama']; ?></h5>
                    <p> IDR <?= number_format($data['harga']); ?> <br> Stok: <?= $data['stok']; ?> </p>
                    <p><?= $data['keterangan'] ?></p>
                    <a href="/customer/tambah_keranjang/<?= $data['idbarang']; ?>">
                        <button class="btn p-2" style="color: black;background-color:gold"> <strong>+</strong> Keranjang</button>
                        <!-- <div class="btn btn-warning" style="color: black;">+ Keranjang</div> -->
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?= $this->endSection(); ?>