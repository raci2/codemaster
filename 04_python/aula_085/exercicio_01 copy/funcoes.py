import os, time, math, globais

def exibir_menu():
  animar("Aguarde", 0.2)
  print("=== MENU ===\n")
  print("A - Registar Colaboradores.")
  print("B - Verificar estatisticas.")
  print("C - Sair\n")
  opcao = input("Opção: ")
  return opcao

def registar():
  print("--- Registo de Colaborador ---")
  nome = input("- Digite o nome do novo colaborador")
  ordenado = float(input("- Digite o ordenado deste colaborador"))
  globais.soma_total += ordenado
  print("\n--- SUCESSO ---")

def remover():
  print("--- Remover ordenado do Colaborador")
  ordenado = float(input("- Digite o ordenado do colaborador"))
  globais.soma_total -= ordenado
  print("\n--- SUCESSO ---")

def listar():
  print("--- Estatíticas da Empresa ---\n")
  print(f"Total de ordenado mensal: ( {globais.soma_total:.2f} € )")
  aguarde(2)

def animar(frase, tempo):
  limpa()
  print(frase, end="", flush=True)
  aguarde(tempo)
  print(".", end="", flush=True)
  aguarde(tempo)
  print(".", end="", flush=True)
  aguarde(tempo)
  print(".", end="", flush=True)
  aguarde(tempo)
  limpa()

def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(segundos):
  time.sleep(segundos)