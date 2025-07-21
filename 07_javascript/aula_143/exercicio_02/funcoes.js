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

  document.querySelector("form").reset();
  input_nome.focus();

  localStorage.pessoas = JSON.stringify(pessoas);

}

function nova_linha(nome, idade, morada){
  tbody.innerHTML += `<tr><td>${nome}</td><td>${idade}</td><td>${morada}</td></tr>`;
}

function verificar_cookies(){
  if(localStorage.pessoas != undefined){
    pessoas = JSON.parse(localStorage.pessoas);
    for( let p of pessoas){
      nova_linha(p.nome, p.idade, p.morada);
    }
  } 
}