const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const form = document.getElementById('form');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

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
      window.scrollTo(0, 0);
    }else {
      removeError(i)
    }
  }

})

function emailValidate(){
  if(!emailRegex.test(campos[1].value)) {
      setError(1);
  } else {
      removeError(1)
  }
}

function isValidCPF() {
  var cpf = document.getElementById("cpf").value

  if (typeof cpf !== 'string') return false

  cpf = cpf.replace(/[^\d]+/g, '')
  
  if (cpf.length !== 11 || !!cpf.match(/(\d)\1{10}/)) return false
  
  cpf = cpf.split('')
  
  const validator = cpf
      .filter((digit, index, array) => index >= array.length - 2 && digit)
      .map( el => +el )
      
  const toValidate = pop => cpf
      .filter((digit, index, array) => index < array.length - pop && digit)
      .map(el => +el)
  
  const rest = (count, pop) => (toValidate(pop)
      .reduce((soma, el, i) => soma + el * (count - i), 0) * 10) 
      % 11 
      % 10
      
  return !(rest(10,2) !== validator[0] || rest(11,1) !== validator[1])
}

function validarCpf() {
  if ( isValidCPF() ) {
      removeError(4)
  } else {
      setError(4);
  }
}

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