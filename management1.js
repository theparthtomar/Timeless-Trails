let currentSlide = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    currentSlide = (currentSlide + step + totalSlides) % totalSlides;
    document.querySelector('.slider').style.transform = `translateX(-${currentSlide * 100}%)`;
}