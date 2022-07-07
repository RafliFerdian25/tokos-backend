function edit_keranjang(){
    var qty = $('#qty_keranjang').val();
    $.ajax({
        type: "POST",
        url: "<?= base_url('keranjang/' . $data['rowid'] . ''); ?>",
        data: "key=value",
        success: function(){ alert("success"); },
        error: function(xhr, ajaxOptions, thrownError){
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError );
        }
    });
}
