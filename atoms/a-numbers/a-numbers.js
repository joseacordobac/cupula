const numberAnimatioCounter = () => {
    const counters = document.querySelectorAll('.js-a-numbers');

    counters.forEach((counter) => {
        const getNumber = counter.querySelector('span');
        if(getNumber){
            
    
            const updateCounter = (currentCount) => {

                const targetValue = parseInt(getNumber.textContent);

                const animationDuration = 4;
                const increment = targetValue / (animationDuration / 0.06);
                let intervalId;
               
                if(currentCount < targetValue){

                    intervalId = setInterval(() => {
                        currentCount += increment;
                        getNumber.textContent = Math.round(currentCount);
                        if(currentCount >= targetValue){
                            getNumber.textContent = targetValue;
                            clearInterval(intervalId);
                        }
                    }, 50);

                }
            }
    
            gsap.to(getNumber, {
                scrollTrigger: {
                    trigger: getNumber,
                    start: "top 80%",
                    end: "bottom 20%",
                    scrub: true,
                    once: true,
                },
                onUpdate: updateCounter(0),
            });

        }


    });
};

window.addEventListener('load', ()=>{
    numberAnimatioCounter();
})