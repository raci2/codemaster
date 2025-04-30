from funcoes import *
import random

limpa()

nomes = ["João","Fabrício","Bernardo","Maria","Alice","Ana"]
apelidos = ["Vidal","Matos","Ramos","Silva","Sousa","Ribeiro"]

quantidade = int(input("- Digite o total de nomes completos aleatórios que você deseja gerar: "))

print()

for i in range(quantidade):

  print(f"{i+1} - {random.choice(nomes)} {random.choice(apelidos)}.")


print("\n\n")