import os, time, math, globais

def exibir_menu():
  limpa()
  print("=== Gestão de Colaboradores ===\n")
  print("1 - Novo colaborador.")
  print("2 - Editar colaborador.")
  print("3 - Apagar colaborador.")
  print("\n4 - Listar todas os colaboradores.")
  print("\n0 - Sair\n")
  opcao = input("- Opção: ")
  return opcao

def cadastrar():
  print("--- Novo Colaborador ---\n")
  nome = input("- Digite o NOME do novo colaborador(a): ")
  cargo = input("- Digite o CARGO do novo colaborador(a): ")
  ordenado = int(input("- Digite o ORDENADO do novo colaborador(a): "))
  novo_colaborador = [nome, cargo, ordenado]

  if (nome != "" and cargo != "" and ordenado > 0): 
    print("\n--- SUCESSO! ---")
    globais.pessoas.append(novo_colaborador)
  else: print("\n--- ALGUM DOS CAMPOS VAZIO ---")


def editar():
  print("--- Editar Colaborador ---\n")
  listar(False,False)

  id = int(input("\n- Digite o id do colaborador a ser editado: ")) - 1
  if(id >= 0 and id < len(globais.pessoas)):
    print("\n--- Editar ---\n")
    print("1 - Nome.")
    print("2 - Cargo.")
    print("3 - Ordenado.")
    print("0 - Cancelar.")
    coluna = int(input("\n- Opção: ")) - 1
    print()

    if(coluna == 0): globais.pessoas[id][coluna] = input(f"- Digite o NOME que substituirá ({globais.pessoas[id][coluna]}): ")
    elif(coluna == 1): globais.pessoas[id][coluna] = input(f"- Digite o CARGO que substituirá ({globais.pessoas[id][coluna]}): ")
    elif(coluna == 2): globais.pessoas[id][coluna] = int(input(f"- Digite o ORDENADO que substituirá ({globais.pessoas[id][coluna]} €): "))
    elif(coluna == -1): print("\n--- OPERAÇÃO CANCELADA ---")
    else: print("\n--- OPÇÃO INVÁLIDA ---")
  else: print("\n--- ID INVÁLIDO ---")

def apagar():
  print("--- Apagar pessoa ---\n")
  listar(False,False)

  id = int(input("\n- Digite o ID da pessoa que se deseja apagar: ")) - 1
  if(id >= 0 and id < len(globais.pessoas)):
    print(f"\n--- APAGADO COM SUCESSO! ---")
    globais.pessoas.pop(id)
  else: print("\n--- ID INVÁLIDO ---")

def listar(titulo,info):
  ordenado_total = 0
  if(titulo):print("--- Lista dos Colaboradores ---\n")
  for i in range(len(globais.pessoas)):
    p = globais.pessoas[i]
    print(f"(ID: {i+1}) | (Nome: {p[0]}) | (Cargo: {p[1]}) | (Ordenado: {p[2]} €)")
    ordenado_total += p[2]

  if(info):
    print(f"\nTotal de Colaboradores ({i+1})")
    print(f"Ordenado total mensal da equipa: ({ordenado_total} €)")

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