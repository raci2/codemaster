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
  print("--- Editar Produto ---\n")
  listar_produtos(False)
  linha = int(input("\n- Digite o ID do produto que queres editar: "))- 1
  print()

  if(linha >= 0 and linha < len(globais.produtos)):
    produto = globais.produtos[linha]

    print(f"#{linha+1} - (Nome: {produto['nome']}) (Preço: {produto['preco']:.2f} €) (Quantidade: {produto['quantidade']}).")
    print("\n--- Menu de edição ---\n")
    print("1 - Nome.")
    print("2 - Preço.")
    print("3 - Quantidade.\n")
    print("\n0 - Cancelar.\n")
    coluna = int(input("- Opção: ")) - 1

    print()

    if(coluna == 0):
      produto["nome"] = input(f"- Digite o nome que substituir ({produto['nome']}): ")
      print("\n--- SUCESSO! ---")

    elif(coluna == 1):
      produto['preco'] = float(input(f"- Digite o preço para substituir ({produto['preco']:.2f} €): "))
      print("\n--- SUCESSO! ---")

    elif(coluna == 2):
      produto['quantidade'] = int(input(f"- Digite a quantidade para substituir ({produto['quantidade']}): "))
      print("\n--- SUCESSO! ---")

    elif(coluna == -1): print("--- OPERAÇÃO CANCELADA! ---")
    
    else: print("--- OPÇÃO INVÁLIDA! ---")

  else: print("--- ID INVÁLIDO! ---")


def apagar():
  print("--- Apagar Produto ---\n")
  listar_produtos(False)
  linha = int(input("\n- Digite o ID do produto que queres apagar: "))-1
  print()
  if(linha >= 0 and linha < len(globais.produtos)):
    globais.produtos.pop(linha)
    print("\n--- SUCESSO! ---")
  else: print("--- ID INVÁLIDO! ---")

def listar_produtos(com_titulo):
  if(com_titulo): print("--- Lista dos Colaboradores ---\n")

  soma_total = 0
  for i in range(len(globais.produtos)):
    linha = globais.produtos[i]
    print(f"#{i+1} - (Nome: {linha['nome']}) (Preço: {linha['preco']:.2f} €) (Quantidade: {linha['quantidade']}).")
    soma_total += linha['preco']

def vender():
  print("--- Vender Produto ---\n")
  listar_produtos(False)
  linha = int(input("\n- Digite o ID do produto que queres vender: ")) - 1
  print()
  if(linha >= 0 and linha < len(globais.produtos)):
    quantidade_venda = int(input(f"- Digite a quantidade de ({globais.produtos[linha]['nome']}) que será vendida: "))
    venda_total = globais.produtos[linha]['preco'] * quantidade_venda
    if(quantidade_venda >= 0 and quantidade_venda <= globais.produtos[linha]['quantidade']):
      globais.produtos[linha]['quantidade'] -= quantidade_venda

      globais.vendas.append((
        globais.numero_venda,
        globais.produtos[linha]['nome'],
        quantidade_venda,
        globais.produtos[linha]['preco'],
        venda_total
      ))

      print(f"\nVenda #{globais.numero_venda} - {globais.produtos[linha]['nome']} ({globais.produtos[linha]['preco']:.2f} €) x ({quantidade_venda}) = ({venda_total:.2f} €)")
      globais.numero_venda += 1
      print("\n--- SUCESSO! ---")
    else:
      print("\n--- QUANTIDADE INVÁLIDA! ---")
  else:
    print("--- ID INVÁLIDO! ---")


def listar_vendas():
  print("--- Lista de Vendas ---\n")
  if(len(globais.vendas) == 0):
    print("Ainda não foram feitas vendas.")
    return

  total_geral = 0
  for venda in globais.vendas:
    numero, nome, quantidade, preco, total = venda
    print(f"Venda #{numero} - {nome} ({preco:.2f} €) x ({quantidade}) = ({total:.2f} €)")
    total_geral += total

  print(f"\nValor total das vendas: ({total_geral:.2f} €)")



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