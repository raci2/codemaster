print("\n\n")

print("=== Carta de Condução ===\n")

resposta = input("- Tem mais de 18 anos de idade? ")

if(resposta.lower() == "sim"):
  carta = input("Tem carta de condução? ")

  if(carta.lower() == "não"):
     print("Tem de tirar a carta de condução")

  print("Já pode dirigir")

else:
  print("Você ainda não pode ter uma carta de condução")

print("\n\n")