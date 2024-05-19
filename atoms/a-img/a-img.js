
const gsapImgAnimation = () =>{

    const images = document.querySelectorAll('.a-img');

    images.forEach((image) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                start: "top 80%", 
                end: "bottom 60%", 
                scrub: 1,
                trigger: image, 
                endTrigger: image,
            },
        });
    
        tl.from(image, {
            opacity: 0,
            duration: 0.8,
        });

        tl.from(image, {
            minHeight: 0,
            duration: 0.5,
        });
    });
}

const playVideoBTn = () => {
    const getVideoContent = document.querySelectorAll('.a-img__video');

    if(getVideoContent){

        getVideoContent.forEach((elementVideo)=>{
            const playIcon = elementVideo.querySelector('.a-img__video-play')
            const video =  elementVideo.querySelector('video')
            
            if(video.played){
                playIcon?.classList.remove('a-img__video-play--stop')
            }
            
            if(video.paused){
                playIcon?.classList.add('a-img__video-play--stop')
            }
            
            playIcon?.addEventListener('click', ()=>{
                if(video.paused){
                    video.play()
                    playIcon.classList.remove('a-img__video-play--stop')
                }else if(video.played){
                    video.pause()
                    playIcon.classList.add('a-img__video-play--stop')
                }
            })
        })

    }
}

const modalTrigger = () => {
    const getVideoContent = document.querySelectorAll('.a-img--modal');
    
    if(getVideoContent){
        getVideoContent.forEach((elementVideo)=>{
            
            const getBody = document.querySelector('body')
            const getModal = elementVideo.querySelector('.a-img__video-modal')
            const getPlayIcon = elementVideo.querySelector('.a-img__video-play')

            getPlayIcon.addEventListener('click', ()=>{
                getModal.classList.add('a-img__video-modal--show')
                getBody.classList.add('scroll-block')
                window.scrollTo(0,0);
            })

            const closeModal = getModal.querySelector('.a-img__modal-close')
            
            closeModal?.addEventListener('click', ()=>{
                getModal.classList.remove('a-img__video-modal--show')
                getBody.classList.remove('scroll-block')
                getModal.querySelector('video').pause()
            })

            document.addEventListener('keydown', (event) => {
                if (event.code === 'Escape') {
                    getModal.classList.remove('a-img__video-modal--show')
                    getBody.classList.remove('scroll-block')
                }
            });


        })
    }
    
}

window.addEventListener('load', ()=>{
    playVideoBTn();
    modalTrigger();
    gsapImgAnimation();
})