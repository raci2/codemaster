from funcoes import *

limpa()

print("===== Buscador de  Múltiplos =====\n")

numero = int(input("- Digite um número inteiro: "))

print(f"\n--- Múltiplos de  ({numero}) entre 0 e 100 ---\n")

loop = 0

while(loop <= 100):
  resultado =  loop % numero
  print(f"({resultado})")
  loop += 1

  

print("\n\n")