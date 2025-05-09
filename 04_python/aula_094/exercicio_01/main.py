from funcoes import *

limpa()

dicionario = {
  "nome": "Fabricio",
  "idade": 28,
  "morada": "Covilhã"
}

print(f"Dicionario original: {dicionario}")

print("\n=== Dicionario com FOR ===\n")

for i in dicionario:
    print(f"{i}: {dicionario[i]}")

print("\n=== Dicionario apenas com as chaves ===\n")

print(dicionario.keys())

print("\n=== Dicionario apenas com os valores ===\n")

print(dicionario.values())

print("\n\n")