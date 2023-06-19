var currentImage = 0;
var images = document.querySelectorAll('#carousel img');
var thumbnails = document.querySelectorAll('.thumbnail');

function changeImage(index) {
    images[currentImage].classList.remove('active');
    thumbnails[currentImage].classList.remove('active');
    currentImage = index;
    images[currentImage].classList.add('active');
    thumbnails[currentImage].classList.add('active');
}

function prevImage() {
    var newIndex = (currentImage - 1 + images.length) % images.length;
    changeImage(newIndex);
}

function nextImage() {
    var newIndex = (currentImage + 1) % images.length;
    changeImage(newIndex);
}
