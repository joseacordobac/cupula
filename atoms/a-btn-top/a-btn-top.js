const btnTop = () => {
  const getBtnTop = document.querySelector('.a-btn-top');
  getBtnTop.addEventListener('click', ()=>{ 
    window.scrollTo(0,0);
  })
}

window.addEventListener('load', ()=>{
  btnTop();
})