function lembur() {
    var jumlah = document.getElementById('jumlah').value;
    var insentif = document.getElementById('insentif').value;
    var total = parseFloat(jumlah) * parseFloat(insentif);
    if (!isNaN(total)) {
        document.getElementById('total').value = total;
    } else {
        document.getElementById('total').value = jumlah;
    }
}