from funcoes import *

limpa()

print("===== Contabilizador de Números =====\n")

numero = int(input("- Digite o total de números que serão contabilizados: "))

print()

loop = 1
par = 0
impar = 0

while loop <= numero:
    num = int(input(f"- Digite o [{loop}] número: "))

    if(num % 2 == 0):
      par += 1
    else:
      impar += 1

    loop += 1

print(f"\n--- Total de números PARES: ({par}) ---")
print(f"--- Total de números ÍMPARES: ({impar}) ---")

print("\n\n")
