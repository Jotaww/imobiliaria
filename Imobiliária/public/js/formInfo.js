const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const form = document.getElementById('form');

function setError(index) {
  spans[index].style.display = 'block';
}

function removeError(index) {
  spans[index].style.display = 'none';
}

form.addEventListener('submit', (event) => {

  for (let i = 0; i < campos.length; i++) {
    if(campos[i].value == '') {
      setError(i)
      event.preventDefault();
    }else {
      removeError(i)
    }
  }

})

const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
if (!value) return ""
value = value.replace(/\D/g,'')
value = value.replace(/(\d{2})(\d)/,"($1) $2")
value = value.replace(/(\d)(\d{4})$/,"$1-$2")
return value
}