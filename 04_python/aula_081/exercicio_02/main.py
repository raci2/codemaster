from funcoes import *

limpa()

numero = int(input("- Digite um número para obter a sua tabuada de 0 a 10: "))

print(f"\n=== TABUADA DO ({numero}) ===\n")

loop = 0



while(loop <= 10):
  resultado =  loop * numero
  print(f"{loop} X {numero} = {resultado}")
  loop += 1

  

print("\n\n")