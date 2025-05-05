import os, time, math, globais

def exibir_menu():
  limpa()
  print("=== Cadastro de Pessoas ===\n")
  print("1 - Cadastrar nova pessoa.")
  print("2 - Editar pessoa.")
  print("3 - Apagar pessoa.")
  print("\n4 - Listar todas as pessoas cadastradas.")
  print("\n0 - Sair\n")
  opcao = input("- Opção: ")
  return opcao

def cadastrar():
  print("--- Cadastrar nova pessoa ---\n")
  nome = input("- Digite o nome da nova pessoa: ")

  if (nome != ""): 
    print("\n--- SUCESSO! ---")
    globais.pessoas.append(nome)
  else: print("\n--- CAMPO VAZIO ---")


def editar():
  print("--- Editar pessoa ---\n")
  listar(False)

  id = int(input("\n- Digite o ID da pessoa que se deseja editar: ")) - 1
  if(id >= 0 and id < len(globais.pessoas)):
    globais.pessoas[id] = input(f"\n- Digite o nome para substituir ( {globais.pessoas[id]} ): ")
    print("\n--- SUCESSO! ---")
  else: print("\n--- ID INVÁLIDO ---")

def apagar():
  print("--- Apagar pessoa ---\n")
  listar(False)

  id = int(input("\n- Digite o ID da pessoa que se deseja apagar: ")) - 1
  if(id >= 0 and id < len(globais.pessoas)):
    print(f"\n--- ( {globais.pessoas[id]} ) APAGADO(A) COM SUCESSO! ---")
    globais.pessoas.pop(id)
  else: print("\n--- ID INVÁLIDO ---")

def listar(titulo):
  if(titulo == True):print("--- Lista das pessoas cadastradas ---\n")
  for i in range(len(globais.pessoas)):
    print(f"ID: ({i+1}) - NOME: ( {globais.pessoas[i]} )")


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

def enter():
  input("\nCarregue <Enter> para continuar... ")