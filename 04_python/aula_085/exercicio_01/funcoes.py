import os, time, math, globais

def exibir_menu():
  limpa()
  print("=== Multibanco Python ===\n")
  print("Conta: Fabrício")
  print(f"Saldo: {globais.saldo:.2f}")
  print("\n1 - Levantamento.")
  print("2 - Depósito.")
  print("3 - Pagamentos.\n")
  print("4 - Sair\n")
  opcao = input("- Opção: ")
  return opcao

def levantar():
  print("--- Levantamentos ---\n")
  valor = float(input("- Valor a ser levantado: "))

  if(valor > 0 and valor <= globais.saldo): 
    globais.saldo -= valor
    print("\n--- SUCESSO ---")
  else: print("\n--- VALOR INVÁLIDO ---")

  enter()

def depositar():
  print("--- Depósitos ---\n")
  valor = float(input("- Valor a ser depositado: "))

  if(valor > 0): 
    globais.saldo += valor
    print("\n--- SUCESSO ---")
  else: print("\n--- VALOR INVÁLIDO ---")
  enter()

def pagamentos():
  print("--- Pagamentos ---\n")
  descricao = input("Descrição do pagamento: ")
  valor = float(input("- Valor a ser levantado: "))

  if(valor > 0 and valor <= globais.saldo): 
    globais.saldo -= valor
    print("\n--- SUCESSO ---")
  else: print("\n--- VALOR INVÁLIDO ---")

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