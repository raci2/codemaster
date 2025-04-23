from funcoes import *
import globais

limpa()

opcao = None

while(opcao != "0"):

  opcao = exibir_menu()

  animar("Aguarde", 0.3)

  if(opcao.lower() == "1"): vender()
  elif(opcao.lower() == "2"): ver_historico()
  elif(opcao.lower() == "0"): animar("A sair", 0.3)
  else: print("--- OPÇÃO INVÁLIDA ---")



print("\n\n")