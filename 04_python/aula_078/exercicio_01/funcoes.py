import os, time

def nota_aluno(nota):

  if(nota < 10):
    exercicio = input("O aluno fez todos os exercicios? ")
    if(exercicio.lower() == "sim"):
      return "O aluno vai a exame de recuperação"
    else:
      return "O aluno reprovou"
  elif(nota >= 10 and nota < 14):
    exercicio = input("O aluno fez todos os exercicios? ")
    if(exercicio.lower() == "sim"):
      return "O aluno passou"
    else:
      return "O aluno vai a exame de recuperação"
  else:
    return "O aluno passou"

    

def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(segundos):
  time.sleep(segundos)