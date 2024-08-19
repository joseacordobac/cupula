const closeDialogModals = () => {
  const modalToOpen = document.querySelector('.o-modal-form');

  const btn = document.querySelector('.o-modal-form__close');
  btn.addEventListener('click', ()=>{
    modalToOpen.classList.remove('o-modal-form--open')
  })

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      modalToOpen.classList.remove('o-modal-form--open');
    }
  });

}

const openDialogModals = (triggerClass) => {
  const dialogContent = document.querySelector(triggerClass);
  const modalToOpen = document.querySelector('.o-modal-form');

  if(dialogContent){
      dialogContent.addEventListener('click', ()=>{
        modalToOpen.classList.add('o-modal-form--open')
      })
      closeDialogModals(triggerClass)
  }

}


window.addEventListener('DOMContentLoaded', ()=>{
  openDialogModals('.js-btn-trigger');
})
