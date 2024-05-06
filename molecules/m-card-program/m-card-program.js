const gsapMisionCard = () =>{
    const tl = gsap.timeline({
        scrollTrigger: {
            scrub: 1,
            trigger: '.m-card-program__content',
            start: "bottom 110%",
            endTrigger: '.m-card-program__content',
            end: "+=50"
        },
    })

    tl.from('.m-card-program__content', {
        duration: 3,
        scale: 1.5,  
        opacity: 0,
    });

}

window.addEventListener('load', ()=>{
    gsapMisionCard();
})