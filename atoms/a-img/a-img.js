
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

const triggerDialog = () =>{
    const iconsTrigger = document.querySelectorAll('.a-img__video-icon');
    iconsTrigger.forEach((icon)=>{
        icon.addEventListener('click', ()=>{
            console.log('icon click');
        })
    })
}

const playVideoBTn = () => {
    const getVideoContent = document.querySelectorAll('.a-img__video');

    if(getVideoContent){

        getVideoContent.forEach((elementVideo)=>{
            const playIcon = elementVideo.querySelector('.a-img__video-play')
            const video =  elementVideo.querySelector('video')

            playIcon.addEventListener('click', ()=>{
                if(video.paused){
                    video.play()
                    playIcon.classList.add('a-img__video-play--active')
                }else if(video.played){
                    video.pause()
                    playIcon.classList.remove('a-img__video-play--active')
                }
            })
        })

    }
}

window.addEventListener('load', ()=>{
    playVideoBTn();
    gsapImgAnimation();
})