<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>

<!-- header -->
<div class="container text-center mt-5">
    <h1 style="font-weight: 700;margin-bottom: 4rem;">Profile saya</h1>
</div>
<!-- main -->

<div class="container p-3">
    <div class="container ">
        <!-- ini apakah form -->
        <div class="row justify-content-center">
            <div class="col-6 col-lg-4 col-xl-3 ">
                <img src="<?= base_url(); ?>/assets/img/<?= $pelanggan->user_image; ?>" style="width: 17rem"
                    class="rounded-circle" alt="">
            </div>
            <!-- data profile -->
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
                    <div class="btn btn-primary"> Ubah Data</div>
                </a>
                <a href="<?= base_url('customer/riwayat_transaksi/'); ?>/<?= user_id(); ?>">
                    <div class="btn btn-primary">Riwayat Transaksi</div>
                </a>
                <a href="<?= base_url('logout'); ?>">
                    <div class="btn btn-danger">Logout</div>
                </a>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>