<?= $this->extend('templates/customer-template'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto w-75 p-lg-5 p-md-4 p-sm-3 mt-5" style="background-color: #EDEDED;overflow: auto;">
    <?php
    if ($cart->totalItems() > 0) : ?>
    <div class="pesanan py-3">
        <h3 class="">Total pesanan(<?= $cart->totalItems(); ?> Produk) : Rp
            <?= number_format($cart->total(), 0, ',', '.');  ?>
        </h3>
    </div>
    <form method="post" action="/customer/invoice" id="formalamat" enctype="multipart/form-data">
        <div class="nama">
            <label for="nama" class="my-2">Nama</label><br>
            <input class="input-nama w-100 p-2 form-control" type="text" name="nama" id="nama"
                value="<?= $pelanggan->fullname; ?>" required>
        </div>
        <div class="nohp">
            <label for="nohp" class="my-2">No.Hp</label><br>
            <input class="input-nama w-100 p-2 form-control" type="number" name="noHp" id="noHp"
                value="<?= $pelanggan->noHp; ?>" required>
        </div>
        <div class="alamat">
            <label for="alamat" class="my-2">Alamat</label><br>
            <textarea class="input-alamat w-100 form-control" name="alamat" id="alamat" cols="30" rows="10"
                required><?= $pelanggan->alamat; ?></textarea>
        </div>
        <div class="metode__pembayaran" onchange="set_alamat()">
            <label for="metode__pembayaran" class="my-2">Metode Pembayaran</label>
            <select class="form-select" aria-label="Default select example" name="metode" id="metode">
                <option value="" hidden>--Pilih Pembayaran--</option>
                <option value="COD" required>Bayar di Tempat</option>
                <option value="Mandiri" required>Mandiri - XXXX</option>
                <option value="BRI" required>BRI - XXXX</option>
                <option value="BCA" required>BCA - XXXX</option>
            </select>
            <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="metode" id="flexRadioDefault1" value="cod" required>
                <label class="form-check-label" for="flexRadioDefault1">
                    Bayar di Tempat
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="metode" id="flexRadioDefault2" value="transfer"
                    required>
                <label class="form-check-label" for="flexRadioDefault2">
                    Transfer
                </label>
            </div> -->
        </div>
        <div class="buktipembayaran mt-3" id="buktipembayaran">
            <div class="form-group" id="inputGambar">
                <label for="buktipembayaran" class="my-2">Bukti Pembayaran</label><br>
                <img id="image-preview-update" width="100" height="100" src="http://placehold.it/100x100"
                    alt="image preview" width="200px" />
                <br>
                <input class="" type="file" style="display:none" name="image" accept="image/*" value="gambar"
                    id="image-source-update" onchange="previewImageUpdate().value=this.value">
                <input type="button" class="btn btn-secondary mt-2" name="image" value="Pilih Gambar"
                    onclick="document.getElementById('image-source-update').click()">
            </div>
        </div>
        <button class="btn bg-success fw-bold mt-2" type="submit" style="float: right;color: white;">Submit</button>
    </form>
    <?php else : ?>
    <div class="pesanan py-3">
        <h3 class="">Keranjang Anda Masih Kosong</h3>
    </div>
    <?php endif; ?>
</div>
<script>
function previewImageUpdate() {
    document.getElementById("image-preview-update").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source-update").files[0]);

    oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview-update").src = oFREvent.target.result;
    };
};
</script>
<script>
function set_alamat() {
    var metode = document.forms["formalamat"]["metode"].value;
    if (metode == "COD") {
        document.getElementById("buktipembayaran").style.display = "none";
    }
    if ((metode == "Mandiri") || (metode == "BRI") || (metode == "BCA")) {
        document.getElementById("buktipembayaran").style.display = "block";
    }
}
</script>
<?= $this->endSection(); ?>