print("\n\n")

print("=== Média Escolar ===\n")

nome = input("- Digite o nome do aluno(a): ")
prova1 = float(input("- Digite a nota da prova 1: "))
prova2 = float(input("- Digite a nota da prova 2: "))
tpc = float(input("- Digite a nota do trabaho de casa: "))

media = (prova1 + prova2 + tpc) / 3

print(f"\nO(a) aluno(a) ({nome}) obteve uma média final de ({media:.1f}) valores.")

print("\n\n")