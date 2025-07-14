var cont = 1;
var cor;
function mudar(){
  caixa.innerHTML += "<p>Olá "+ cont+"</p>";
  cont++;
}

function mudar2(){

  if(cor){
    body.style.backgroundColor = "black";
    imagem.src = "imagens/desligado.png";
    button.style.backgroundColor = "green";
    button.textContent = "Ligar";
    cor = false;
  }else{
    body.style.backgroundColor = "#FFFF96";
    imagem.src = "imagens/ligado.png";
    button.style.backgroundColor = "salmon";
    button.textContent = "Desligar";
    cor= true;
  }
  
}
