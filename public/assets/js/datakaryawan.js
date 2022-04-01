function statuskar(value) {
    document.getElementById("tb").disabled = value != "2";
}

inputImage.onchange = evt => {
    const [file] = inputImage.files
    if (file) {
        uploadedAvatar.src = URL.createObjectURL(file)
    }
}