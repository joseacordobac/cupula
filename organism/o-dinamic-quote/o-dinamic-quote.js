const environment = {
  defaultParent : 22,
  nameSpace: '/wp-json/cupula/v1',
}

const domain = window.location.origin;
const route = domain + environment.nameSpace;
let selectedInformation = {
  tower: null,
  area: null,
  apartment: null,
  rooms: null,
  bathrooms: null,
  balcony: null,
}

/** activate - tabs */
const activateTabs = (elementClass) => {

  const getTabs = document.querySelector(elementClass)
  const getAllActive = document.querySelectorAll('.o-dinamic-quote__section--active')
  getAllActive.forEach(active =>  active.classList.remove('o-dinamic-quote__section--active'))

  if(getTabs){
    getTabs.classList.add('o-dinamic-quote__section--active')
  }
}

//Swiper
const swiperFunction = () =>{
  const swiper = new Swiper('.o-dinamic-quote__distribution-slide ', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
}


//step three
const htmlSliderDeparment = (data) => {

  const insertHTML = document.querySelector('.js-dinamic-quote__inner')
  let aparmentInfo = ''

  if(insertHTML){
    data.forEach(({fields}) => {    
      const { aparment_value, apartamento, areas, planes} = fields

      planes.forEach(({ data,  plane_img}) => {

          aparmentInfo += `<div class="swiper-slide"><div class="o-dinamic-quote__slide-container"><div class="o-dinamic-quote__img-content"><img class="o-dinamic-quote__img" src="${plane_img}"></div>`
              
              aparmentInfo += `<div class="o-dinamic-quote__info-content"><h4 class="o-dinamic-quote__info-subtitle">Apartamento</h4><h3 class="o-dinamic-quote__info-title">${areas}</h3><ul class="o-dinamic-quote__list-container">`
              
              if(data.length > 0){
                data.forEach(({ aparment_characteristic}) => {
                  aparmentInfo += `<li class="o-dinamic-quote__list">${aparment_characteristic}</li>`
                })
              }

            aparmentInfo += `</ul></div>`
          aparmentInfo += `</div>`
        aparmentInfo += `</div>`
      })

    })
  }

  insertHTML.innerHTML = aparmentInfo 
  swiperFunction()
}


const getDeparment = async(idSection, idFloor) => {  
  const getFloors = await fetch(`${route}/apartment?id_section=${idSection}&id_filter=${idFloor}`)
  const data = await getFloors.json()
  htmlSliderDeparment(data)
}

//select department section
const onAreaClick = async(idFloor) => {
  
  const getArea = document.querySelectorAll('.o-dinamic-floor-st')
  activateTabs('.o-dinamic-quote__area')

  if(getArea){
    getArea.forEach((area) => {
      area.addEventListener('click', (event) => {
        const clickCurrent = event.currentTarget
        const idSection = clickCurrent.getAttribute('data-area')
         getDeparment(idSection, idFloor)
         activateTabs('.o-dinamic-quote__distribution')
      })
    })
  }

}

const onColorArea = () => {
  const getArea = document.querySelectorAll('.o-dinamic-floor-st')

  if(getArea){
    getArea.forEach((area) => {
      
      area.addEventListener('mouseover', (event) => {
        const mouseCurrent = event.currentTarget
        const areas = mouseCurrent.getAttribute('data-area')
        mouseCurrent.classList.add(`has-default`)
      })

      area.addEventListener('mouseout', event =>{
        const mouseCurrent = event.currentTarget
        const areas = mouseCurrent.getAttribute('data-area')
        mouseCurrent.classList.remove(`has-default`)
      })

    })
  }
}

//step two
const floorListHTML = (data) => {

  let htmlToInner = '';
  const getToInner = document.querySelector('.o-dinamic-quote__floor-list')

  data.forEach((floor) => {
    const { name, slug, id } = floor
    htmlToInner += `<li onclick="onAreaClick(${id})" class="o-dinamic-quote__floor-el o-dinamic-quote__floor--${slug}" data-floor="${id}">${name}</li>`
  })
  
  getToInner.innerHTML = htmlToInner
  
}

const getAllFloors = async(idTower) => {
  const getFloors = await fetch(`${route}/filters?id_parent=${idTower}`)
  const data = await getFloors.json()
  floorListHTML(data)
}

//step one
const renderDataHtml = (filtered) => {
  const getToInner = document.querySelector('.o-dinamic-quote__build-info')
  const { name, description } = filtered

  if(getToInner){
    getToInner.innerHTML = `<div class="o-dinamic-quote__info"><h3 class="o-dinamic-quote__info-title">${name}</h3><p class="o-dinamic-quote__info-description">${description}</p></div>`
  }

}

const loadDataCategory = async(data) => {
  const listTowers = document.querySelectorAll('.o-dinamic-quote__tower--04, .o-dinamic-quote__tower--03');

  const addEventListenerFunction = async (event) => {
    const getEvent = event.currentTarget
    const dataFilter = getEvent.getAttribute('data-tower')
    const filterTower = data.filter(item => item.slug === dataFilter)
    if(event.type === 'mouseover'){
      renderDataHtml(filterTower[0])
    }
    if(event.type === 'click'){
      await getAllFloors(filterTower[0].id)
      activateTabs('.o-dinamic-quote__floor')
    }
  }

  if(listTowers){
    listTowers.forEach((tower)=>{
      tower.addEventListener('mouseover', addEventListenerFunction)
      tower.addEventListener('click', addEventListenerFunction)
    })
  }

}

const fetchTaxonomyAPI = async () => {
  const { defaultParent } = environment
  const response = await fetch(`${route}/filters?id_parent=${defaultParent}`)
  const data = await response.json()
  loadDataCategory(data)
}




window.addEventListener('load', ()=>{
  const contentInformation = document.querySelector('.o-dinamic-quote__svg');

  if(contentInformation){
    fetchTaxonomyAPI();
  }

  onColorArea()

})