const dialogFormClose = (getDialog)=>{
    const closeIcon = getDialog.querySelector('.o-dialog-form__close-icon');

    closeIcon.addEventListener('click', ()=>{
        getDialog.close()
    })

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
           getDialog.close();
        }
    });

}

const dialogFormOpen = (getDialog)=>{
    const triggerModal = document.querySelectorAll('.js-dialog-open');
    const getHiddenValue = document.querySelector('.p-form__mision input');

    if(!triggerModal.length){
        setTimeout(()=>{
            getDialog.showModal()
        }, 3000)
    }else{
        triggerModal.forEach((trigger)=>{

            trigger.addEventListener('click', (event)=>{

                const getBodyCard = event.target.closest('.m-card-iprogram__body');
                const getTitleCard = getBodyCard.querySelector('.m-card-iprogram__title--title');
                getHiddenValue.value = getTitleCard.textContent

                getDialog.showModal()
            })
        })
    }

}



window.addEventListener('load', ()=>{
    const getDialog = document.querySelector('.o-dialog-form');

    if(getDialog){
        dialogFormClose(getDialog);
        dialogFormOpen(getDialog)
    };
})