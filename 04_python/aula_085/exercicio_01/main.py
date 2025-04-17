from funcoes import *
import globais

limpa()



opcao = None

while(opcao != "4"):

  opcao = exibir_menu()

  animar("Aguarde", 0.3)

  if(opcao.lower() == "1"): levantar()
  elif(opcao.lower() == "2"): depositar()
  elif(opcao.lower() == "3"): pagamentos()
  elif(opcao.lower() == "4"): animar("A sair", 0.3)
  else: print("--- OPÇÃO INVÁLIDA ---")



print("\n\n")