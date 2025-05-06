from funcoes import *
import random

limpa()

opcao = None

while(opcao != "0"):

  opcao = exibir_menu()

  animar("Aguarde", 0.3)

  if(opcao.lower() == "1"): cadastrar()
  elif(opcao.lower() == "2"): editar()
  elif(opcao.lower() == "3"): apagar()
  elif(opcao.lower() == "4"): listar(True,True)
  elif(opcao.lower() == "0"): animar("A sair", 0.3)
  else: print("--- OPÇÃO INVÁLIDA ---")

  enter()


print("\n\n")