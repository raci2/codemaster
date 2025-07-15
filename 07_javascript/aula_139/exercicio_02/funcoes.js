var cont = 1;
var cor;
function mudar(){
  caixa.innerHTML += "<p>Olá "+ cont+"</p>";
  cont++;
}

function mudar2(){
  teste.classList.toggle("active");
}

function voltar(){
  body.style.backgroundColor = "black";
}

function vermelho(){
  body.style.backgroundColor = "red";
}

function verde(){
  body.style.backgroundColor = "green";
}

function azul(){
  body.style.backgroundColor = "blue";
}
