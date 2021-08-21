// horizontal Scroll on mouse wheel for product cats in header
const catContainerEl = document.querySelector('.header__cat-wrap');

catContainerEl.addEventListener("wheel", addScroll);

function addScroll(event) {
  const toLeft = event.deltaY < 0 && this.scrollLeft > 0;
  const toRight =
    event.deltaY > 0 && this.scrollLeft < this.scrollWidth - this.clientWidth;

  if (toLeft || toRight) {
    event.preventDefault();
    this.scrollLeft += event.deltaY;
  }
}
