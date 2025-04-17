from funcoes import *

limpa()

print("===== Gerador de números Inteiros =====\n")

inicial = int(input("- Digite o valor inicial de sua lista númerica "))
final = int(input("- Digite o valor final de sua lista númerica "))


print()

if(inicial < final):
  for i in range(inicial, final+1):
    print(i)
else:
  for i in reversed(range(final, inicial+1)):
    print(i)

print("\n\n")
