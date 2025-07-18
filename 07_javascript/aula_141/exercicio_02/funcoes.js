function teclar(digito) {
  ecra.innerHTML += digito;
}

function enviar(event) {
  event.preventDefault();

  let min = parseInt(minimo.value);
  let max = parseInt(maximo.value);

  let minFor = min;
  let minWhile = min;
  let minCreate = min;
  let minCreateWhile = min;


  
  for (let i = minFor; i <= max; i++) {
    saida_for.innerHTML += `<p>${i}</p>`;
  }

  while (minWhile <= max) {
    saida_while.innerHTML += `<p>${minWhile}</p>`;
    minWhile++;
  }

  for (let i = minCreate; i <= max; i++) {
    let novo_p = document.createElement("p");
    novo_p.textContent = i;
    saida_for_create.appendChild(novo_p);
  }

  while (minCreateWhile <= max) {
    let novo_p = document.createElement("p");
    novo_p.textContent = minCreateWhile;
    saida_while_create.appendChild(novo_p);
    minCreateWhile++;
  }
}

function limpar() {
  ecra.innerHTML = "";
}
