document.addEventListener('DOMContentLoaded', () => {
    const carouselTrack = document.querySelector('.carousel-track');
    const carouselImages = document.querySelectorAll('.carousel-image');
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');

    let currentIndex = 0;
    const imageWidth = carouselImages[0].clientWidth; // Get the width of a single image

    // Function to move the carousel track
    function moveToSlide(index) {
        carouselTrack.style.transform = `translateX(-${index * imageWidth}px)`;
    }

    // Event listener for the "Next" button
    nextButton.addEventListener('click', () => {
        if (currentIndex < carouselImages.length - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to the first image
        }
        moveToSlide(currentIndex);
    });

    // Event listener for the "Previous" button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = carouselImages.length - 1; // Loop to the last image
        }
        moveToSlide(currentIndex);
    });

    Optional: Auto-slide
    setInterval(() => {
        if (currentIndex < carouselImages.length - 1) {
            currentIndex++;
         } else {
         currentIndex = 0;
        }
        moveToSlide(currentIndex);
     }, 5000); // Change slide every 5 seconds (5000 milliseconds)
});