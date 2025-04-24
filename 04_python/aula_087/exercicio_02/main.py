from funcoes import *

limpa()

lista_1 = ["uva", "maçã", "morango", "ananás", "banana", "laranja"]
lista_2 = ["bolo", "pão", "queijo"]
print(f"Lista original 1: {lista_1}")
print(f"Lista original 2: {lista_2}\n")

lista_1.sort()
print(f"Lista 1 ordenada: ({lista_1})\n")

lista_1.sort(reverse=True)
print(f"Lista 1 ordenada reversa: ({lista_1})\n")

if("morango" in lista_1): print("'morango' está na lista 1.\n")

print("-"*20)

lista_1.extend(lista_2)
print(f"\nLista 1 extendida com a lista 2.\n{lista_1}\n")
print("-"*20)

lista_1.clear()
print(f"\nLista 1 limpada: {lista_1}")

print("\n\n")