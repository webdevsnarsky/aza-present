// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
});