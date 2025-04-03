print("\n\n")

temperatura = float(input("- Digite uma temperatura em Celsius: "))

def converter_para_kelvin():
  kelvin = temperatura + 273.15
  print(f"\n--- ({temperatura:.2f} c) = ({kelvin:.2f} k) ---")

def converter_para_fahrenheit():
  fahr = temperatura * 1.8 + 32
  print(f"\n--- ({temperatura:.2f} c) = ({fahr:.2f} f) ---")

opcao = input("\n- Você deseja converter para (K)elvin ou (F)ahrenheit? ")

if opcao.upper() == "K":
  converter_para_kelvin()
elif opcao.upper() == "F":
  converter_para_fahrenheit()
else:
  print("\n--- Opção Inválida ---")

print("\n\n")
