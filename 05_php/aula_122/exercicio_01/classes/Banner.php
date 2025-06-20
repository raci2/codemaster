<?php


class Banner{

  // Atributos
  public $titulo;
  public $legenda;
  public $imagem;

  // Construtor
  public function __construct($titulo, $legenda, $imagem){
    $this->titulo = $titulo;
    $this->legenda = $legenda;
    $this->imagem = $imagem;
  }

}


?>