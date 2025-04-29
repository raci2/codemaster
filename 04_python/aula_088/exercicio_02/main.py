from funcoes import *

limpa()

produtos = ["uva", "maçã", "morango", "ananás", "banana", "laranja"]

print("\n=== Lista de Frutas com FOR ===\n")

for i in produtos: print(i)

print("\n=== Lista de Frutas com FOR + RANGE() ===\n")

for i in range(len(produtos)):
  print(f"{i+1} - {produtos[i]}")

print("\n=== Lista de Frutas com FOR + REVERSED() ===\n")

for i in reversed(produtos): print(i)

print("\n=== Lista de Frutas com FOR + RANGE() Reverso ===\n")

for i in reversed(range(len(produtos))): 
  print(f"{i+1} - {produtos[i]}")

print("\n\n")