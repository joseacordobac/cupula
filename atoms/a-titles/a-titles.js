const titleGsap = () =>{
    const getTitleElement = document.querySelectorAll('.js-title-typing>*');

    getTitleElement.forEach((element)=>{   

        const tl = gsap.timeline({
            scrollTrigger: {
                scrub: 1,
                trigger: element,
                start: "bottom bottom",
                endTrigger: element,
                end: "+=500",
                toggleActions: "play reverse play reverse",
            },
        })
    
        tl.from(element, {
            duration: 3,
            text: "",
        }, 0);

    })
}

window.addEventListener('DOMContentLoaded', ()=>{
    titleGsap();
})