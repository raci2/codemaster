import os, time, math, globais

def exibir_menu():
  limpa()
  print("=== Padaria do Python ===\n")
  print("1 - Vender.")
  print("2 - Ver histórico.")
  print("0 - Sair\n")
  opcao = input("- Opção: ")
  return opcao

def vender():
  print("--- Vender ---\n")
  descricao = input("- Descrição da venda: ")
  valor = float(input("- Valor total da venda: "))

  if valor > 0:
    print("\n--- SUCESSO! ---")
    nova_linha = f"{globais.id_venda}.  {descricao} - {valor:.2f} €\n"
    globais.historico += nova_linha
    globais.total += valor
    globais.id_venda+=1
  else:
    print("\n--- VALOR INVÁLIDO ---")
  
  enter()

def ver_historico():
  print("--- Histórico ---\n")
  print(f"Total das vendas: {globais.total:.2f} €\n")

  if globais.historico != "":
    print(globais.historico)
  else:
    print("Nenhuma venda registrada ainda.")

  enter()

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