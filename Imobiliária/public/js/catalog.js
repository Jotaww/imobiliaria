var formFilter = document.getElementById('formFilter')

var search = document.getElementById('location')
var type = document.getElementById('firstSelect')
var price = document.getElementById('price')
var meters = document.getElementById('meters')
var bedrooms = document.getElementById('bedrooms')
var bathroom = document.getElementById('bathroom')
var car = document.getElementById('lastSelect')

formFilter.addEventListener('submit', function(e) {
  if(search.value == '') {
    search.disabled = true
  }
  if(type.value == '') {
    type.disabled = true
  }
  if(price.value == '') {
    price.disabled = true
  }
  if(meters.value == '') {
    meters.disabled = true
  }
  if(bedrooms.value == '') {
    bedrooms.disabled = true
  }
  if(bathroom.value == '') {
    bathroom.disabled = true
  }
  if(car.value == '') {
    car.disabled = true
  }
})