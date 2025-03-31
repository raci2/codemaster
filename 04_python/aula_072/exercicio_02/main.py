print("\n\n")

print("=== Clínica de Nutrição ===\n")


nome = input("- Digite o nome do(a) paciente: ")
peso = float(input("- Digite o peso do(a) paciente: "))
altura = float(input("- Digite a altura do(a) paciente: "))

imc = peso / altura ** 2

print(f"\nO(a) paciente(a) ({nome}) está com um IMC de ({imc:.1f}).")

print("\n\n")