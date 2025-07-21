var pessoas = ["fabricio", "maria", "jose"];

pessoas.push("ana");

pessoas.pop();

pessoas.splice(1,1);

pessoas.splice(1,0, "mateus");

pessoas.includes("fabricio");

for(let i = 0; i < pessoas.length; i++){
  console.log(pessoas[i]);
}

for(let p of pessoas){
  console.log(p);
}

pessoas.forEach((p) => {consol.log(p)});