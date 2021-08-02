let modalOpenEl = document.querySelectorAll("[data-modal-open]");
let modalCloseEl = document.querySelectorAll("[modal-close]");

const ModalSettings = {
  open: openModal,
  close: closeModal
};

function openModal(modal) {
  modal.classList.add("is-visible");
  document.body.setAttribute("style", "overflow: hidden; height: 100%;");
}

function closeModal(modal) {
  modal.classList.remove("is-visible");
  document.body.setAttribute("style", "");
}

function openTargetModal(event) {
  let targetModalId = this.dataset.modalOpen;
  let targetModalEl = document.querySelector(`#${targetModalId}`);
  openModal(targetModalEl);
}

function closeTargetModal(event) {
  if (event.target !== this) {
    return false;
  } else {
    let targetModalEl = this.closest(".modal");
    closeModal(targetModalEl);
  }
}

modalOpenEl.forEach((el) => el.addEventListener("click", openTargetModal));
modalCloseEl.forEach((el) => el.addEventListener("click", closeTargetModal));

//module.exports = { ModalSettings };
