import os, time

def estagio(idade, programar):
  
  if idade < 18 and programar.lower() == "sim":
    return "APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  elif idade < 18 and programar.lower() == "não":
    return "NÃO APROVADO PARA A ESCOLA DE PROGRAMAÇÃO"
  elif idade >= 18 and programar.lower() == "não":
    return "NÃO APROVADO PARA O ESTÁGIO"
  elif idade >= 18 and programar.lower() == "sim":
    return "APROVADO PARA O ESTÁGIO"
  else:
    return "ERRO NOS DADOS INFORMADOS, TENTE NOVAMENTE"

    

def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(segundos):
  time.sleep(segundos)