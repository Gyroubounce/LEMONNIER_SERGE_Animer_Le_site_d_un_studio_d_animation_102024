
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal', // This is correct for horizontal sliding
  loop: true, // Enable looping
  grabCursor: true,
  // Disable pagination
  pagination: false,

  // Swiper effect
  effect: 'coverflow',

  // Centered slides (optional depending on your design)
  centeredSlides: true,

  // Number of slides visible at once (adjust as needed)
  slidesPerView: '5', // This should be a number, not a string
  width: 1440,
  
  // Coverflow effect options
  coverflowEffect: {
    rotate: 0,
    stretch: 0, // Correct spelling here
    depth: 0, // You can adjust this to see more of the 3D effect
    slideShadows: false,
  },

  // Space between slides (adjust as needed)
  spaceBetween: 30, // This should be a number, not a string

  // Auto height based on slide content
  autoHeight: true, // This should be a boolean, not a string

  
  

});
