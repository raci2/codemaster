var cont = 1;
var cor;
function mudar(){
  caixa.innerHTML += "<p>Olá "+ cont+"</p>";
  cont++;
}

function mudar2(){
  teste.classList.toggle("active");
}

function enviar(event){
  event.preventDefault();
  let nome = input.value;
  let cor = color.value;
  body.style.backgroundColor = cor;
  saida.innerHTML = `Olá ( ${nome} ), vejo que escolheste a cor ( ${cor} ).`;
}
