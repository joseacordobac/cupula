console.log(window.location.origin)

const environment = {
  defaultParent : window.location.origin === 'http://cupula.local' ? 260 : 22, 
  nameSpace: '/wp-json/cupula/v1',
}

const domain = window.location.origin;
const route = domain + environment.nameSpace;
let dataSelected = {
  tower: '',
}

let GETdataPositions = ''

/** activate - tabs */
const activateTabs = (elementClass) => {

  const getTabs = document.querySelector(elementClass)
  const getAllActive = document.querySelectorAll('.o-dinamic-quote__section--active')
  getAllActive.forEach(active =>  active.classList.remove('o-dinamic-quote__section--active'))

  if(getTabs){
    getTabs.classList.add('o-dinamic-quote__section--active')
  }
}

/** num tabs */
const numTabs = () => {
  const getNumTabs = document.querySelectorAll('.o-dinamic-quote__steps-element')

  if(getNumTabs){
    getNumTabs.forEach(element =>{
      element.addEventListener('click', (event) => {
        
        /** delete class active */
        getNumTabs.forEach(tab => tab.classList.remove('o-dinamic-quote__steps-element--active'))
        const currentElement = event.currentTarget
        currentElement.classList.add('o-dinamic-quote__steps-element--active')
          
        currentElement.id === 'step-1' ? activateTabs('.o-dinamic-quote__map') : ''
        currentElement.id === 'step-2' ? activateTabs('.o-dinamic-quote__floor') : ''
        currentElement.id === 'step-3' ? activateTabs('.o-dinamic-quote__area') : ''
        currentElement.id === 'step-4' ? activateTabs('.o-dinamic-quote__distribution') : ''

      })
    })
  }

}

const numTabActive = (step) => {
  const getNumTabs = document.querySelectorAll('.o-dinamic-quote__steps-element')
  getNumTabs.forEach(tab => tab.classList.remove('o-dinamic-quote__steps-element--active'))
  const getNumTab = document.querySelector(`#${step}`)
  getNumTab.classList.add('o-dinamic-quote__steps-element--active')
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
        nextEl: '.swiper-button-next--distribution-ap',
        prevEl: '.swiper-button-prev--distribution-ap',
    },
});
}


//step three
const htmlSliderDeparment = (data) => {

  const insertHTML = document.querySelector('.js-dinamic-quote__inner')
  let aparmentInfo = ''

  if(insertHTML){
    data.forEach(({fields}) => {    
      const { areas, planes, datos_generales} = fields
      dataSelected.generalData = datos_generales

      planes.forEach(({ data,  plane_img}, index) => {

          aparmentInfo += `<div class="swiper-slide" data-index="${index}"><div class="o-dinamic-quote__slide-container"><div class="o-dinamic-quote__img-content"><img class="o-dinamic-quote__img" src="${plane_img}"></div>`
              
              aparmentInfo += `<div class="o-dinamic-quote__info-content"><h4 class="o-dinamic-quote__info-subtitle">Apartamento</h4><h3 class="o-dinamic-quote__info-title">${areas} M2</h3><ul class="o-dinamic-quote__list-container">`
              
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
  showCotization(data[0].fields)
}


const getDeparment = async(idSection) => {  
  const getFloors = await fetch(`${route}/apartment?id_filter=${idSection}`)
  const data = await getFloors.json()
  htmlSliderDeparment(data)
}

/** get terms posciones  */
const fetchPositions = async (id) => {
  const response = await fetch(`${route}/filters?id_parent=${id}`)
  const data = await response.json()
  return data
}

/** mobile insert data */
const areasInsertMobile = async(data) => {
  
  let htmlToInner = ''
  const getUl = document.querySelector('.o-dinamic-quote__section-list')
  if(getUl){
    data.forEach((area) => {
      htmlToInner += `<li class="o-dinamic-floor-st" data-area="${area.name}">${area.description}</li>`
    })
    getUl.innerHTML = htmlToInner
  }
}

//select department section
const onAreaClick = async(idFloor, nameFloor) => {

  const dataPosition = await fetchPositions(idFloor)
  await areasInsertMobile(dataPosition)
  GETdataPositions = dataPosition

  dataSelected.piso = nameFloor
  const getArea = document.querySelectorAll('.o-dinamic-floor-st')
  activateTabs('.o-dinamic-quote__area')
  numTabActive('step-3')
  onColorArea()
  
  if(getArea){
    getArea.forEach((area) => {
      area.addEventListener('click', (event) => {

        const clickCurrent = event.currentTarget
        const nameSection = clickCurrent.getAttribute('data-area')
        const filterSection = dataPosition.filter( el => el.name === nameSection)
        
        getDeparment(filterSection[0].id)
        activateTabs('.o-dinamic-quote__distribution')
        numTabActive('step-4')

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
        const nameSection = mouseCurrent.getAttribute('data-area')
        const filterSection = GETdataPositions.filter( el => el.name === nameSection)

        const getAllDefault = document.querySelectorAll('.has-default')
        getAllDefault.forEach( e => e.classList.remove('has-default'))

        const getTitleSection = document.querySelector('.o-dinamic-quote__area-title')
        const description = filterSection[0].description.replace(/(\r\n|\n|\r)/g, "<br>");
        const splitDescription = description.split('<br>')
        getTitleSection.innerHTML = `<h3 class="o-dinamic-quote__area-title"> ${splitDescription[0]} <br> <span class="o-dinamic-quote__area-title-span">${splitDescription[1]}</span> </h3>`

        mouseCurrent.classList.add(`has-default`)
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
    htmlToInner += `<li onclick="onAreaClick(${id}, '${name}')" class="o-dinamic-quote__floor-el o-dinamic-quote__floor--${slug}" data-floor="${id}">${name}</li>`
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
  dataSelected.tower = name

  if(getToInner){
    getToInner.innerHTML = `<div class="o-dinamic-quote__info"><h3 class="o-dinamic-quote__info-title">${name}</h3><p class="o-dinamic-quote__info-description">${description}</p></div>`
  }

}


const loadDataCategory = async(data) => {

 //save selected info
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
      numTabActive('step-2')
    }
  }

  if(listTowers){
    listTowers.forEach((tower)=>{
      tower.addEventListener('mouseover', addEventListenerFunction)
      tower.addEventListener('click', addEventListenerFunction)
    })
  }

}

/** Fetches taxonomy API data based on the default parent ID and loads the category data.*/
const fetchTaxonomyAPI = async () => {
  const { defaultParent } = environment
  const response = await fetch(`${route}/filters?id_parent=${defaultParent}`)
  const data = await response.json()
  loadDataCategory(data)
}


/** Insert information in card */
const insertDataCard = (cardContent, type) => {

  const datapagos = dataSelected.distribución.datos_generales
  const getCardContent = document.querySelector(cardContent)
  const getToInner = getCardContent.querySelector('.o-dinamic-quote_card-num__title-sub')
  const numData = stringNumDecimal(datapagos[type])
  getToInner.innerHTML = `${numData}`

}

/** Insert information in modal */
const insertSelectedInfo = () => {
  
  const getToInner = document.querySelector('.o-dinami-quote__sub-title-info')

  let getToInnerHtml = `<p class="o-dinamic-quote__sub-info">${dataSelected.torre} / ${dataSelected.area} M2</p><p class="o-dinamic-quote__sub-info">`
    dataSelected.distribución.data.forEach((plane) => {
      getToInnerHtml += `${plane.aparment_characteristic} - `
    })
  getToInnerHtml += `</p></div>`
  getToInner.innerHTML = getToInnerHtml
}

/** show cotization and get info dataSelected */
const showCotization = (data) => {

  const getQuoter = document.querySelector('.o-dinamic__btn-submit')
  
  if(getQuoter){
    getQuoter.addEventListener('click', ()=>{
    
      const getIndexSlide = document.querySelector('.swiper-slide-active')
      const slideIndex = getIndexSlide.getAttribute('data-swiper-slide-index')

      activateTabs('.o-dinamic-quote__cardspay')
      numTabActive('step-3')
      dataSelected = {
        'torre' : dataSelected.tower,
        'valor' : data.aparment_value,
        'apartamento' : data.apartamento,
        'piso' : dataSelected.piso,
        'area' : data.areas,
        'distribución' : data.planes[slideIndex],
        'datosPagos': data.datos_generales
      }
      
      const hiddenStep = document.querySelector('.o-dinamic-quote__steps')
      hiddenStep.style.display = 'none'

      insertSelectedInfo()
    
      insertDataCard('.o-dialog-form-card--first', 'separa')
      insertDataCard('.o-dialog-form-card--second', 'paga_restante')
      insertDataCard('.o-dialog-form-card--third', 'valor_cuota')

      openModalCotization()
    })

  }

}

/** Information for modal */
const openModalCotization = () => {
  const getBtn = document.querySelector('.o-dinamic-quote__cardpay-submit')
  const textarea = document.querySelector('.aparment-infomation textarea')

  const textAreaInfor = `Apartamento: ${dataSelected.apartamento}\n Area: ${dataSelected.area}\n Piso: ${dataSelected.piso}\n Torre: ${dataSelected.torre}\n Plano: ${dataSelected.distribución.plane_img}`
  textarea.value = textAreaInfor

}




window.addEventListener('load', ()=>{
  const contentInformation = document.querySelector('.o-dinamic-quote__svg');

  if(contentInformation){
    fetchTaxonomyAPI();
  }

  numTabs()
})