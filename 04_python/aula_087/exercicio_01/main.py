from funcoes import *

limpa()

produtos = ["uva", "maçã", "morango"]
print(f"Lista original: {produtos}\n")

print("- Adicionar 'ananás'.\n")

produtos.append("ananás")
print(f"Lista modificada: {produtos}\n")

print("- Inseri 'laranja' na segunda posição.\n")
produtos.insert(1,"laranja")
print(f"Lista modificada: {produtos}\n")

print("- Remover o primeiro elemento.\n")
produtos.pop(0)
print(f"Lista modificada: {produtos}\n")

print("- Remover o 'morango'.\n")
produtos.remove("morango")
print(f"Lista modificada final: {produtos}\n")

print("\n\n")