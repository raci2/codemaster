import os
import time
import globais


def exibir_menu():
  animar("Aguarde")
  print("=== Loja Python ===\n")
  print("1 - Registar produto.")
  print("2 - Editar produto.")
  print("3 - Apagar produto.")
  print("4 - Listar produtos.\n")
  print("5 - Vender.")
  print("6 - Listar vendas.")
  print("\n0 - Sair.\n")
  return int(input("- Opção: "))

def registar():
  print("--- Registar produto ---\n")
  nome = input("- Digite o nome do novo produto: ")
  preco = float(input("- Digite o preço deste produto: "))
  quantidade = int(input("- Digite a quantidade deste produto: "))
  novo_produto = {"nome": nome, "preco": preco, "quantidade": quantidade}
  globais.produtos.append(novo_produto)
  print("\n--- SUCESSO! ---")

def editar():
  print("--- Editar Colaborador ---\n")
  listar_produtos(False)
  linha = int(input("\n- Digite o ID do produto que queres editar: "))- 1
  print()

  if(linha >= 0 and linha < len(globais.produtos)):
    c = globais.produtos[linha]

    print(f"#{linha+1} - (Nome: {c['nome']}) (Preço: {c['preco']:.2f} €) (Quantidade: {c['quantidade']}).")
    print("\n--- Menu de edição ---\n")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.\n")
    print("\n0 - Cancelar.\n")
    coluna = int(input("- Opção: ")) - 1

    print()

    if(coluna == 0):
      c["nome"] = input(f"- Digite o NOME que substituirá ({c['nome']}): ")
      print("\n--- SUCESSO! ---")

    elif(coluna == 1):
      c['preco'] = float(input(f"- Digite o CARGO que substituirá ({c['preco']:.2f}): "))
      print("\n--- SUCESSO! ---")

    elif(coluna == 2):
      c['quantidade'] = int(input(f"- Digite o ORDENADO que substituirá ({c['quantidade']}): "))
      print("\n--- SUCESSO! ---")

    elif(coluna == -1): print("--- OPERAÇÃO CANCELADA! ---")
    
    else: print("--- OPÇÃO INVÁLIDA! ---")

  else: print("--- ID INVÁLIDO! ---")


def apagar():
  print("--- Apagar Colaborador ---\n")
  listar_produtos(False)
  linha = int(input("\n- Digite o ID do colaborador a ser apagado: "))
  print()
  if(linha >= 0 and linha < len(globais.produtos)):
    print(f"--- ( {globais.produtos[linha]['nome']} ) APAGADO(A) COM SUCESSO! ---")
    globais.produtos.pop(linha)
  else: print("--- ID INVÁLIDO! ---")

def listar_produtos(com_titulo):
  if(com_titulo): print("--- Lista dos Colaboradores ---\n")

  soma_total = 0
  for i in range(len(globais.produtos)):
    linha = globais.produtos[i]
    print(f"#{i+1} - (Nome: {linha['nome']}) (Preço: {linha['preco']:.2f} €) (Quantidade: {linha['quantidade']}).")
    soma_total += linha['preco']
  
  if(com_titulo): 
    print(f"\nTotal de colaboradores: ({len(globais.produtos)})")
    print(f"Ordenado total mensal da equipa: ({soma_total:.2f} €)")

def vender():
  pass

def listar_vendas():
  pass



def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(segundos): time.sleep(segundos)

def prima_enter(): input("\nPrima <ENTER> para continuar...")

def animar(frase):
  tempo = 0.2
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