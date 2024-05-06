
const gsapLogoWhiteAnimation = ()=>{
    const getLogoImg = document.querySelector('.a-logo-white');
    window.addEventListener('scroll', () => {
        var scrollPosition = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
        if (scrollPosition === 0) {
            getLogoImg.classList.remove('a-logo--js-active');
        }
        if(scrollPosition > 50){
            getLogoImg.classList.add('a-logo--js-active');
        }
    });
}


window.addEventListener('load', ()=>{
    gsapLogoWhiteAnimation();
})