import math
import random

print("\n\n")

ex_int = -10

ex_float = 3.567

print("=== Funções dos Inteiros ===\n")

print("Inteiro 'original': (",ex_int,")")
print("Inteiro 'módulo': (",abs(ex_int),")\n")

print("Número aleatorio inteiro 'entre 1 e 5': (", random.randint(1,5),")\n")

print("=== Funções dos Floats ===\n")

print("Float 'original': (",ex_float,")\n")

print("Float 'arredondado': (",round(ex_float),")")
print("Float 'arredondado para 1 casa decimal': (",round(ex_float,1),")")
print("Float 'arredondado para 1 casa decimal': (",round(ex_float,2),")\n")
print("Float 'arredondado para cima': (",math.ceil(ex_float),")")
print("Float 'arredondado para baixo': (",math.floor(ex_float),")")

print("\n\n")