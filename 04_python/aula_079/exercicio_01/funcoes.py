import os, time, math

def triangulo():
  base = float(input("- Digite a base do triângulo: "))
  altura = float(input("- Digite a altura do triângulo: "))

  triangulo = base * altura / 2

  limpa()
  print("==== Cálculo de Áreas com Funções ====\n")
  print(f"--- A área do triângulo é de ({triangulo:.2f})--- ")

def rectangulo():
  base = float(input("- Digite a base do rectângulo: "))
  altura = float(input("- Digite a altura do rectângulo: "))

  rectangulo = base * altura

  limpa()
  print("==== Cálculo de Áreas com Funções ====\n")
  print(f"--- A área do rectângulo é de ({rectangulo:.2f})--- ")

def circulo():
  raio = float(input("- Digite o raio do circulo: "))

  circulo = math.pi * raio ** 2 

  limpa()
  print("==== Cálculo de Áreas com Funções ====\n")
  print(f"--- A área do trinângulo é de ({circulo:.2f})--- ")


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

def limpa():
  if(os.name == "nt"): os.system("cls")
  else: os.system("clear")

def aguarde(segundos):
  time.sleep(segundos)