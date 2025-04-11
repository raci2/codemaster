from funcoes import *

limpa()

resposta = input("- Desejas tirar a carta de condução? ")
print()
loop = 1
teste = ""

if(resposta.lower() == "sim"):

  while(teste.lower() != "sim"):
    print(f"\nEstudar para o ({loop}º) teste.")
    teste = input(f"- Você passou no ({loop}º) teste? ")

    if(teste.lower() == "sim"):
      print(f"\nParabéns!\nFostes aprovado no ({loop}º) teste.")

    loop += 1

else:
   print("\nEntão utiliza transporte publico")



print("\n\n")