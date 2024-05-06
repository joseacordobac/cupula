const gsapCardIProgram = ()=>{
    const cards = document.querySelectorAll('.m-card-iprogram');

    cards.forEach((card) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                start: "top 100%",
                end: "bottom 100%",
                scrub: 1,
                trigger: card,
                endTrigger: card,
            },
        });

        tl.from(card, {
            opacity: 0.7, 
            y: 150, 
            duration: 0.8,
        });
    });
}


window.addEventListener('load', ()=>{
    gsapCardIProgram();
})