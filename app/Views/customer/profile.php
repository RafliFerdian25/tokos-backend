<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>

<!-- header -->
<div class="container text-center mt-5">
    <h1 style="font-weight: 700;margin-bottom: 4rem;">Profile saya</h1>
</div>
<!-- main -->
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12">
            <div class="p-3 border">
                <!-- <img src="<?= base_url(); ?>/assets/img/<?= $pelanggan->user_image; ?>" style="width: 17rem" class="rounded-circle" alt=""> -->
                <div class="imgprofile " style="background-image: url(/assets/img/<?= $pelanggan->user_image ?>);width:100%;height:280px;background-position:center;background-repeat:no-repeat"></div>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-body ">
                <div class="data__profile col-8 col-lg-7 col-xl-5 p-2">
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $pelanggan->email; ?></td>
                        </tr>
                        <tr>
                            <td>Username </td>
                            <td> :</td>
                            <td><?= $pelanggan->username; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $pelanggan->fullname; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $pelanggan->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>No.Hp</td>
                            <td>:</td>
                            <td><?= $pelanggan->noHp; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="mt-4">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="">
                            <a style="" href="<?= base_url('customer/detail_ubah_profile'); ?>">
                                <button class="btn btn-success mb-lg-2"> Ubah Data</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <div class="">
                            <a class="" href="<?= base_url('customer/riwayat_transaksi/'); ?>/<?= user_id(); ?>">
                                <div class="btn" style="background-color:gold;">Riwayat Transaksi</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 justify-content-end">
                        <div class="">
                            <a href="<?= base_url('logout'); ?>">
                                <div class="btn btn-danger">Logout</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div class="container p-3">
        <div class="container ">
             ini apakah form
            <div class="row justify-content-center">
                <div class="col-6 col-lg-4 col-xl-3 ">
                    <img src="<?= base_url(); ?>/assets/img/<?= $pelanggan->user_image; ?>" style="width: 17rem" class="rounded-circle" alt="">
                </div>
                 data profile 
                <div class="data__profile col-8 col-lg-7 col-xl-5 p-2">
                    <table>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $pelanggan->email; ?></td>
                        </tr>
                        <tr>
                            <td>Username </td>
                            <td> :</td>
                            <td><?= $pelanggan->username; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $pelanggan->fullname; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?= $pelanggan->alamat; ?></td>
                        </tr>
                        <tr>
                            <td>No.Hp</td>
                            <td>:</td>
                            <td><?= $pelanggan->noHp; ?></td>
                        </tr>
                    </table>
                    <a href="<?= base_url('customer/detail_ubah_profile'); ?>">
                        <div class="btn btn-success"> Ubah Data</div>
                    </a>
                    <a href="<?= base_url('customer/riwayat_transaksi/'); ?>/<?= user_id(); ?>">
                        <div class="btn" style="background-color:gold;">Riwayat Transaksi</div>
                    </a>
                    <a href="<?= base_url('logout'); ?>">
                        <div class="btn btn-danger">Logout</div>
                    </a>
                </div>
            </div>

        </div>-->
</div>

<?= $this->endSection(); ?>