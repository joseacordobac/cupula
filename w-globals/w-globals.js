const leningStart = () => {

    const lenis = new Lenis({
        lerp: 0.05,
        infinite: false,
        duration: 2,
    })

    function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
}

const gIsMobile = () =>  window.innerWidth < 780;

window.addEventListener('load', () => {
    // leningStart();
})