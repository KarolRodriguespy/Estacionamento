<?php

namespace Challenges;

use Challenges\Veiculos\Tipo;
use Challenges\Veiculos\Veiculo;
use Challenges\Veiculos\VeiculoGenerico;

class Motocicleta extends VeiculoGenerico implements Veiculo
{
    private $placa;
    private $modelo;
    private $cor;
    private $motorista;

   
    public function __construct($placa,$modelo,$cor,$motorista)
    {
        $this->placa=$placa;
        $this->modelo=$modelo;
        $this->cor=$cor;
        $this->motorista =$motorista;

    }
  
}
