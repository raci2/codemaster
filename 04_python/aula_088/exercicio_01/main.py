from funcoes import *

limpa()

quantidade = int(input("- Digite a quantidade de alunos que serão cadastrados: "))

animar("Aguarde",0.3)

loop = 1

alunos = []

while(loop <= quantidade):

  nome = input(f"- Digite o nome do(a) [{loop}] aluno(a): ")
  alunos.append(nome)

  loop += 1

limpa()

alunos.sort()

print("=== Lista de Alunos Ordenada ===\n")

for i in range(len(alunos)):
  print(f"{i+1} - {alunos[i]}")

print("\n\n")