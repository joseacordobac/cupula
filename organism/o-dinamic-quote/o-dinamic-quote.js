const environment = {
  defaultParent : 22,
  nameSpace: '/wp-json/cupula/v1',
}

const domain = window.location.origin;
const route = domain + environment.nameSpace;
//step three
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
    htmlToInner += `<li class="o-dinamic-quote__floor-el o-dinamic-quote__floor--${slug}" data-floor="${id}">${name}</li>`
  })

  getToInner.innerHTML = htmlToInner
}

const getAllFloors = async(id) => {
  const getFloors = await fetch(`${route}/filters?id_parent=${id}`)
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