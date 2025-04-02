print("\n\n")

print("=== Carta de Condução ===\n")

resposta = float(input("- Qual é a temperatura atual? "))

if(resposta <= 18):
  print("\nVestir Roupas Grossas e Casaco")
elif(resposta < 28):
  print("\nVestir Normais")
else:
  print("\nVestir Roupas de Praia")

chover = input("\nEstá a chover? ")

if(chover.lower() == "sim"):
  print("\nPegar Chapéu")

print("\nIr passear")

print("\n\n")