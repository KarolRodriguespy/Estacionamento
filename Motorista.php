<?php

namespace Challenges;

use \InvalidArgumentException;

class Motorista
{
    public $motorista;
    public $idade;
    public $numerohabilitacao;
    public $pontos;
    public $deficiente;
  


  public function __construct($motorista,$idade,$pontos,$numerohabilitacao)
  {
      $this->motorista = $motorista;
      $this->idade = $idade;
      $this->pontos = $pontos;
      $this->numerohabilitacao=$numerohabilitacao;
      

      if ($idade < 18){
      throw new InvalidArgumentException("Idade invalida");
    }

    if($numerohabilitacao == " "){
    throw new InvalidArgumentException("CNH inexistente");
    }

    if ($pontos > 20){
      throw new InvalidArgumentException("CNH suspensa");
   }

  }

  public function isIdoso($idade){
    if ($idade > 70) {
      return false;
    }else{
      return true;
    }
  }
  public function isDeficiente($deficiente){
    if ($deficiente == true){
      return true;
    }else{
      return false;
    }
  }
}