document.addEventListener("DOMContentLoaded", function () {
    const carouselContainer = document.querySelector(".carousel-container");
    const carouselSlides = document.querySelectorAll(".carousel-slide");
    const prevButton = document.querySelector(".prev-button");
    const nextButton = document.querySelector(".next-button");
    let currentIndex = 0;
  
    function updateCarousel() {
      const slideWidth = carouselSlides[0].offsetWidth;
      carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }
  
    prevButton.addEventListener("click", function () {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });
  
    nextButton.addEventListener("click", function () {
      if (currentIndex < carouselSlides.length - 1) {
        currentIndex++;
        updateCarousel();
      }
    });
  
    // Optional: Auto-play the carousel
    function autoPlayCarousel() {
      setInterval(function () {
        if (currentIndex < carouselSlides.length - 1) {
          currentIndex++;
        } else {
          currentIndex = 0;
        }
        updateCarousel();
      }, 3000); // Change image every 3 seconds (adjust as needed)
    }
  
    // Uncomment the following line to enable auto-play
    // autoPlayCarousel();
});