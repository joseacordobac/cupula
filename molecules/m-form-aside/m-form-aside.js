const postistioElement = (element) => {
  const formPostion = document.querySelector(element);
  const rect = formPostion.getBoundingClientRect();
  return rect
}

const comparePostiions = (positionA, positionB) =>{
  
  const a = positionA.bottom
  const b = positionB.top

  const getFloatCard = document.querySelector('.m-form-aside');
  if(a > b){
    getFloatCard.classList.add('m-form-aside--index')
  }else{
    getFloatCard.classList.remove('m-form-aside--index')
  }
  
}

const detectScroll = () => {
  window.addEventListener('scroll', () =>{
    const formCartPostition = postistioElement('.m-form-aside')
    const realitiesPosition = postistioElement('.banner-impact')

    comparePostiions(formCartPostition, realitiesPosition)
  });
}


window.addEventListener('load', ()=>{
  detectScroll()
})