<?php


class Viagem{

  // Atributos
  public $titulo;
  public $texto;
  public $imagem;

  // Construtor
  public function __construct($titulo, $imagem, $texto){
    $this->titulo = $titulo;
    $this->texto = $texto;
    $this->imagem = $imagem;
  }

}


?>