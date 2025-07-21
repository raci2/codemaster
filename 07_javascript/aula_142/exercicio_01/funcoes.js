function mudar_1(){
  especial.classList.toggle("especial");
}
function mudar_2(){
  let todos_p = document.getElementsByTagName("p");
  for(let p of todos_p){
    p.classList.toggle("especial");
  }

}

function limpar() {
  ecra.innerHTML = "";
}
