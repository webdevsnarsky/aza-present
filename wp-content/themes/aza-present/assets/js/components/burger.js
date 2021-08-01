const burger = document.querySelector('.burger'); 
const mobileMenu = document.querySelector('.header__content');

burger.addEventListener('click', () => {
  burger.classList.toggle('burger_toggle');
  mobileMenu.classList.toggle('header__content_active');
});