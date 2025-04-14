from funcoes import *

limpa()

print("===== Escola Codemaster =====\n")

numero = int(input("- Digite o total de alunos da turma: "))

print()

loop = 1
soma_total = 0

while loop <= numero:
    idade = int(input(f"- Digite a idade do(a) [{loop}] aluno(a): "))
    soma_total += idade
    loop += 1

media = soma_total / numero
print(f"\nA média de idade desta turma é de ({media:.1f} anos)")

print("\n\n")
