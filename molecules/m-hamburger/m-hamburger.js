const mobileMenuShow = () => {

  const menuBtn = document.querySelectorAll('.m-hamburger__mobile-content');
  
  menuBtn.forEach((btn) => {    
    btn.addEventListener('click', () => {
        const menu = document.querySelector('.o-header__content');

        if(menu.classList.contains('has-show')){
          menu.classList.remove('has-show')
        }else{
          menu.classList.add('has-show')
        }

    })
  })

}


window.addEventListener('load', () => {
  mobileMenuShow();
})