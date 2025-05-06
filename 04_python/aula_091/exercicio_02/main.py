from funcoes import *
import random

limpa()

matriz = [
  ["Fabricio",28,"covilhã"],
  ["Maria",14,"lisboa",],
  ["Ana",56,"amadora"],
  ["Carlos",44,"porto"]
]

print(f"Matriz original: {matriz}")

print("\n=== Listagem das pessoas da matriz ===\n")

for m in matriz:
  print(f"{m[0]} - (Idade: {m[1]}) - [Morada: {m[2]}]")



print("\n\n")