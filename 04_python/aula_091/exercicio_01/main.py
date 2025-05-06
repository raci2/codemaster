from funcoes import *
import random

limpa()

matriz = [
  ["morango","banana","uva"],
  ["frango","bifana","novilho",],
  ["água","cola","pepsi"]
]

print(f"Matriz original: {matriz}")

print("\n=== For para cada lista dentro da matriz ===\n")
for m in matriz:
  print(m)

print("\n=== For para cada ítem dentro da matriz ===\n")
for linha in matriz:
  for coluna in linha:
    print(coluna)
  print()


print("\n\n")