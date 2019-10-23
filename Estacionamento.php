<?php

namespace Challenges;

use Challenges\Veiculos\Veiculo;
use \InvalidArgumentException;

class Estacionamento
{
    public $carro;
    private $carrosEstacionados = [];
    const VAGAS = 12;

    public function getCarrosEstacionados()
    {
    return $this -> carrosEstacionados;
    }

    public function estaLotado()
    {
        if(count($this->carrosEstacionados) == self::VAGAS){
            return true;
        }else {
            return false;
        }
    }

    public function estaEstacionado(Carro $carro)
    {
        if(in_array($carro,$this->carrosEstacionados)){
            return true;
        }else {
            return false;
        }
   }

   public function estacionar(Carro $carro){

    if ($this->estaLotado()){
        throw new EstacionamentoLotadoException("Está lotado",1);
    }else{
        $this->carrosEstacionados[]=$carro;
    }

   }

}