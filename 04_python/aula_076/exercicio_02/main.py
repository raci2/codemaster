print("\n\n")

def idade_dias():
  print("Exemplo: 20 anos 3 meses e 25 dias")

  anos = int(input("- Digite a sua idade em anos: "))
  meses = int(input("- Digite a sua idade em meses: "))
  dias = int(input("- Digite a sua idade em dias: "))
  
  idade_dias = dias + (anos * 365) + (meses * 30)
  

  print(F"\nA idade em dias é: ({idade_dias})")

idade_dias()

print("\n\n")
