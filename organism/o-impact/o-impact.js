const gsapImpact = () => {
    const impactItems = document.querySelectorAll('.o-impact__content--talent');

    impactItems.forEach((items) => {
        const tl = gsap.timeline({
            scrollTrigger: {
                start: "top 100%", 
                end: "bottom 50%", 
                scrub: 1,
                trigger: items, 
                endTrigger: items,
            },
        });
    
        tl.to(items, {
            duration: 3,
            opacity: 1,
            y: -50,
        });
    });
   
}


window.addEventListener('DOMContentLoaded', () => {
    gsapImpact();
})