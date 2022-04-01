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

function imagePreview(fileInput) {
    if (fileInput.files && fileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function(event) {
            $('#uploadedAvatar').html('<img src="' + event.target.result + '" width="100" height="100"/>');
        };
        fileReader.readAsDataURL(fileInput.files[0]);
    }
}

$("#inputImage").change(function() {
    imagePreview(this);
});