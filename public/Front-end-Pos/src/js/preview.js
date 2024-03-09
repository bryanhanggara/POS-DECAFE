// * Live preview image on add menu
document.getElementById('dropzone-file').addEventListener('change', function (event) {
    var file = event.target.files[0];
    var reader = new FileReader();

    reader.onload = function (e) {
        var imagePreview = document.getElementById('image-preview');
        imagePreview.innerHTML = '';
        var imgElement = document.createElement('img');
        imgElement.src = e.target.result;
        imgElement.classList.add('object-contain', 'w-full', 'h-full');
        imagePreview.appendChild(imgElement);
    };

    reader.readAsDataURL(file);
});