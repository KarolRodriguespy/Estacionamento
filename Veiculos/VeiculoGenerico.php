<?php

namespace Challenges\Veiculos;

use Challenges\Motorista;

abstract class VeiculoGenerico
{
    public $tipo;

    public function __construct($tipo)
    {
        $this -> tipo=$tipo;
    }

    public function getType():string {
        return $this->tipo;
    }

    public function setType(string $tipo):void{
        $this->tipo=$tipo;
    }

    public function getMotorista():Motorista{
        return $this-> Motorista;
    }
}