from funcoes import *

limpa()

nome = input("Nome: ")
idade = int(input("Idade: "))
programar = input("Tem experiência de programação? ")

limpa()
print("A analisar...")
aguarde(2)
limpa()

print("=== Ficha de Candidatura ===")
print(f"Nome: ({nome})\nIdade: ({idade})\nStatus da candidatura: ({estagio(idade, programar)})")

print("\n\n")
