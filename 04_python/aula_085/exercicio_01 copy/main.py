from funcoes import *
import globais

limpa()

opcao = ""

while(opcao.lower() != "c"):

  opcao = exibir_menu()

  animar("Aguarde", 0.2)

  if(opcao.lower() == "a"): registar()
  elif(opcao.lower() == "b"): listar()
  elif(opcao.lower() == "c"): animar("A sair",0.2)
  else: print("--- OPÇÃO INVÁLIDA ---")

  

print("\n\n")