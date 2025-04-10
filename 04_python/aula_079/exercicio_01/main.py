from funcoes import *

limpa()

print("==== Cálculo de Áreas com Funções ====\n")
print("--- Escolha uma opção ---\n")

print("(t) para triângulos.")
print("(r) para rectângulos.")
print("(c) para circulo.")

opcao = input("\nOpção: ")

animar("analisar", 0.5)

limpa()

if(opcao.lower() == "t"):
  triangulo()
elif(opcao.lower() == "r"):
  rectangulo()
elif(opcao.lower() == "r"):
  rectangulo()
else:
  print("==== Cálculo de Áreas com Funções ====\n")
  print("--- OPÇÃO INVÁLIDA ---")

print("\n\n")