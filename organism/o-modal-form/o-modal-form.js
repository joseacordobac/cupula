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

const openDialogModals = (dialogContent) => {
  const modalToOpen = document.querySelector('.o-modal-form');

  if(dialogContent){
      dialogContent.addEventListener('click', (event)=>{
        event.preventDefault()
        modalToOpen.classList.add('o-modal-form--open')
      })
      closeDialogModals()
  }

}


window.addEventListener('DOMContentLoaded', ()=>{

  const allLinks = document.querySelectorAll('a');
  const targetLink = Array.from(allLinks).find(link => link.getAttribute('href') === '#trigger-modal');
  const triggerBtn = document.querySelectorAll('.js-btn-trigger');

  if(targetLink) openDialogModals(targetLink);
  triggerBtn.forEach((btn)=>{
    if(btn) openDialogModals(btn);
  })
})
