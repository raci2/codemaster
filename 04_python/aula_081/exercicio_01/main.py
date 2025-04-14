from funcoes import *

limpa()

print("===== Buscador de  Múltiplos =====\n")

numero = int(input("- Digite um número inteiro: "))

multiplo = 0

print(f"\n--- Múltiplos de  ({numero}) entre 0 e 100 ---\n")

while multiplo <= 100:
  print(f"({multiplo})")
  multiplo += numero

  

print("\n\n")