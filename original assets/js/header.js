const searchBtn = document.querySelector('.search-btn');
const searchForm = document.querySelector('.search-form');

searchBtn.addEventListener('click', () => {
  searchForm.classList.toggle('d-none');
});

// Initialize the carousel
var myCarousel = document.querySelector('#carouselExampleIndicators')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 5000, // Change interval time between each slide
  wrap: true, // Set to false to stop automatic looping
  keyboard: true, // Set to false to disable keyboard navigation
  pause: 'hover' // Set to false to disable pause on hover
})
