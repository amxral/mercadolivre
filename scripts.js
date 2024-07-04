document.addEventListener('DOMContentLoaded', function() {
    const photoSlider = document.querySelector('.photo-slider');
    photoSlider.addEventListener('wheel', (event) => {
        if (event.deltaY > 0) {
            photoSlider.scrollBy(300, 0);
        } else {
            photoSlider.scrollBy(-300, 0);
        }
    });

    const photos = document.querySelectorAll('.photo img');
    photos.forEach(photo => {
        photo.addEventListener('click', () => {
            const modal = document.createElement('div');
            modal.classList.add('modal');
            modal.innerHTML = `<div class="modal-content"><span class="close">&times;</span><img src="${photo.src}" alt="Foto ampliada"></div>`;
            document.body.appendChild(modal);

            const close = modal.querySelector('.close');
            close.addEventListener('click', () => {
                document.body.removeChild(modal);
            });
        });
    });
});