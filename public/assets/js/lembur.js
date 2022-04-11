function lembur() {
    var jumlah = document.getElementById('jumlah').value;
    var insentif = document.getElementById('insentif').value;
    var total = parseFloat(jumlah) * parseFloat(insentif);
    if (!isNaN(total)) {
        document.getElementById('total').value = total;
    } else {
        document.getElementById('total').value = jumlah;
    }

    document.getElementById('jumlahinsentif').value = jumlah;
    document.getElementById('rpinsentif').value = insentif;
    document.getElementById('totalinsentif').value = total;
}

function preview() {
    var tanggal = document.getElementById('intanggal').value;
    var jamkerja = document.getElementById('injam').value;
    var jenishari = document.getElementById('injenishari').value;
    document.getElementById('tanggal').value = tanggal;
    document.getElementById('jam').value = jamkerja;
    document.getElementById('jenishari').value = jenishari;
}