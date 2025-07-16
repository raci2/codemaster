function calcular() {
  let e = parseFloat(input_euro.value);
  let tipo = moeda.value;
  let resultado = 0;
  saida.classList.remove("d-none");

  switch (tipo) {
    case "dolar":
      resultado = "$ " + (e * 1.03).toFixed(2);
      break;
    case "libra":
      resultado = "£ " + (e * 0.84).toFixed(2);
      break;
    case "yen":
      resultado = "¥ " + (e * 161.05).toFixed(2);
      break;
    case "real":
      resultado = "R$ " + (e * 6.19).toFixed(2);
      break;
  }

  if(isNaN(e)) {saida.innerHTML = "Digite um valor válido.";}
  else{saida.innerHTML = `( € ${e.toFixed(2)} ) = ( ${resultado} )`;}

}
