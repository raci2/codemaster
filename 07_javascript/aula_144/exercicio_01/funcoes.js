function enviar(event) {
  event.preventDefault();

  let texto = input_texto.value;
  let tempo = parseFloat(input_tempo.value) * 1000;

  setTimeout(alert, tempo, texto);
}