from funcoes import *

limpa()

print("===== For com String =====\n")

texto = "Codemaster"

for i in texto:
  print(i)

print("\n===== For com Range (fim) =====\n")

for i in range(10):
  print(i)

print("\n===== For com Range (início, fim) =====\n")

for i in range(-5, 5):
  print(i)

print("\n===== For com Range (início, fim, salto) =====\n")

for i in range(0, 11, 2):
  print(i)

print("\n\n")
