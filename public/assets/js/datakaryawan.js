const selectElement = document.querySelector('#iuranpen');

//tambahkan event listener 'change' pada checkbox
selectElement.addEventListener('change', (event) => {
    // set value nya berdasarkan atribut 'checked'. 
    // jika checked maka set value = 1
    // jika tidak ada atribut checked maka set value = 0
    selectElement.value = selectElement.checked ? 1 : 0;
});

function statuskar(value) {
    document.getElementById("tb").disabled = value != "2";
}

inputImage.onchange = evt => {
    const [file] = inputImage.files
    if (file) {
        uploadedAvatar.src = URL.createObjectURL(file)
    }
}