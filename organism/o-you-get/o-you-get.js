const gsapValueAnimation = () =>{

    const getValueCards = document.querySelectorAll('.o-you-get-list');

    getValueCards.forEach((card)=>{

        const tl = gsap.timeline({
            scrollTrigger: {
                scrub: 1,
                trigger: card,
                start: "top bottom",
                endTrigger: card,
                end: "+=300",
            },
        })

        tl.from(card, {
            duration: 3,
            x: 200,
            opacity: 0,
        })
    })
    
}


window.addEventListener('load', ()=>{
    gsapValueAnimation();
})