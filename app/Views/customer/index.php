<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<!-- header -->
<div class="slogan">
    <div class="container mt-lg-5 mt-md-4 mt-sm-3">
        <div class="row d-flex">
            <div class="col-lg-4 col-md-12 g-5" style="margin-top: 10vw; float: right;">
                <div class="p-3 ">
                    <h1><span style="color: #FFE500;align-items: center;margin-top: 20rem;">Selamat datang di</span><br>
                        <strong>Toko Anak Kos</strong>
                    </h1>

                    <a class="button text-decoration-none" href="/customer/produk"> <button class="btn  d-block mt-2 " style="font-size: larger; background-color:darkgreen;color:white"> Cari Barangmu Disini</button> </a>
                </div>
            </div>
            <div class="col-lg-7  col-md-12 mb-5">
                <div class=" "> <img src="/assets/img/slogan/ilustrasi.png" style="width: 100%;" alt=""></div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-lg-4 mt-md-3 mt-sm-3 mb-lg-5 mb-md-4 mb-sm-3 text-center">
    <img src="/assets/img/atribut.png" style="width: 15vw;" alt="">
</div>
<!-- slide -->
<!-- <div class="container  p-lg-5 p-md-4 p-sm-3 bg-light" style="border-radius: 50px;">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($barang as $data) : ?>

            <div class="carousel-item active text-center ">
                <img src="/assets/img/productimg/<?= $data['file_gambar'] ?>" class="index__gambar"
                    style="background-size: cover;height: 180px; " alt="">
                <h5> <?= $data['nama']; ?></h5>
                <p>IDR <?= number_format($data['harga']); ?> <br> Stok:
                    <?= $data['stok']; ?></p>
                <p><?= $data['keterangan']; ?></p>
                <div class="btn btn-warning">Beli</div>
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> -->
</div>

<?= $this->endSection(); ?>