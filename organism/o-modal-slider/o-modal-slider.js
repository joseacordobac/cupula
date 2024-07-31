const closeDialog = (btn) => {

  const dialogContent = btn.closest('.o-modal-slider');
  console.log(dialogContent)

  btn.addEventListener('click', ()=>{
    dialogContent.classList.remove('o-modal-slider--open')
  })

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
       dialogContent.classList.remove('o-modal-slider--open');
    }
  });

}

const openDialog = () => {
  const triggerDialog = document.querySelectorAll('.a-nav-btn');
  const dialogContent = document.querySelector('.o-modal-slider');

  if(triggerDialog){
    triggerDialog.forEach((btn)=>{
      console.log(btn.href.includes('#ver-foto'))
      if(btn.href.includes('#ver-foto')){
        btn.addEventListener('click', ()=>{
          dialogContent.classList.add('o-modal-slider--open')
        })
      }

    })
  }

}



window.addEventListener('DOMContentLoaded', ()=>{
  const closeBtn = document.querySelectorAll('.o-modal-slider__close');

  if(closeBtn){
    closeBtn.forEach((btn)=>{
      closeDialog(btn);
      openDialog();
    })
  }
})