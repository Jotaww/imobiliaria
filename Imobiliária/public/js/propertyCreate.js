const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const form = document.getElementById('form');
const photos = document.getElementById('photos');
const requiredFile = document.getElementById('span-required-file')

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

  if(photos.value != '' && photos.files.length != 6) {
    requiredFile.style.display = 'block';
    event.preventDefault();
  }

})

String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  var mascara = "##.###.###".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    if (mascara.charAt(x) != '#') {
      resultado += mascara.charAt(x);
      x++;
    } else {
      resultado += valor.charAt(y);
      y++;
      x++;
    }
  }
  campo.value = resultado.reverse();
}