from funcoes import *

limpa()

print("===== Gerador de números Inteiros =====\n")

inicial = int(input("- Digite o valor inicial de sua lista númerica "))
final = int(input("- Digite o valor final de sua lista númerica "))
vezes = int(input("- Quantas vezes você deseja exibir esta lista númerica? "))

print()

if(inicial < final):
  print("-"*20)
  for i in range(vezes):
    for j in range(inicial, final+1):
      print(j)
    print("-"*20)
else:
  print("-"*20)
  for i in range(vezes):
    for j in reversed(range(final, inicial+1)):
      print(j)
    print("-"*20)

print("\n\n")