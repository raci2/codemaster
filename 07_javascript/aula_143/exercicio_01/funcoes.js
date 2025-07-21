function nova_pessoa(nome, idade, morada){
  let dicionario = {
    nome: nome,
    idade: idade,
    morada: morada
  };
  return dicionario;
}


function registar(event){
  event.preventDefault();
  let nome = input_nome.value;
  let idade = parseInt(input_idade.value);
  let morada = input_morada.value;

  let p = nova_pessoa(nome, idade, morada);
  pessoas.push(p)
  nova_linha(nome, idade, morada);

  caixa.classList.remove("d-none");
  document.querySelector("form").reset();
  input_nome.focus();

}

function nova_linha(nome, idade, morada){
  tbody.innerHTML += `<tr><td>${nome}</td><td>${idade}</td><td>${morada}</td></tr>`;
}

function salvar(event){
  event.preventDefault();
  let nome = input_nome.value;

  saida.innerHTML = nome;

  localStorage.nome = nome;
}

function verificar_cookies(){
  if(localStorage.nome != undefined){
    saida.innerHTML = localStorage.nome;
  }
}

function limpar_cookies(){
  localStorage.clear();
}