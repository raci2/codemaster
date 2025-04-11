from funcoes import *

limpa()

numero = int(input("- Digite o número limite inteiro positivo: "))

print("\n=== Exercício Principal ===\n")

loop = 1

while(loop <= numero):
  print(loop)
  loop += 1

print("\n=== Desafio ===\n")

while(numero >= 1):
    print(numero)
    numero -= 1

print("\n\n")