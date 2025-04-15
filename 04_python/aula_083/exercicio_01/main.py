from funcoes import *

limpa()

print("===== Maior e Menor Número =====\n")

numero = int(input("- Digite o total de números que serão analisados: "))

print()

loop = 1
maior = 0
menor = 0

while (loop <= numero):
    num = int(input(f"- Digite o ({loop}º) número: "))

    if(loop == 1):
       maior = num
       menor = num
    else:
      if(num > maior):
        maior = num
      if(num < menor):
        menor = num

    loop += 1

print(f"\n--- O maior número digitado foi: ({maior}) ---")
print(f"--- O menor número digitado foi: ({menor}) ---")

print("\n\n")
