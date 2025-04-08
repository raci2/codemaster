print("\n\n")

def salario_novo():
  salario = float(input("- Digite o seu salario mensal: "))
  reajuste = float(input("- Digite o percentual de reajuste: "))

  percentagem = reajuste / 100
  
  novo_salario = salario * (1 + percentagem)
  

  print(F"\nO novo salario é: ({novo_salario:.2f})")

salario_novo()

print("\n\n")
