<?php

namespace Challenges;

use Challenges\Veiculos\Veiculo;
use \InvalidArgumentException;

class Estacionamento
{
    public $carro;
    public $motocicleta;
    private $veiculosEstacionados = [];
    const VAGAS = 20;

    public function getCarrosEstacionados()
    {
        return $this->veiculosEstacionados;
    }

    public function estaLotado()
    {
        return count($this->veiculosEstacionados) == self::VAGAS;
    }

    public function estaEstacionado(Carro $carro)
    {
        return in_array($carro, $this->veiculosEstacionados);
    }

    public function estacionar(Carro $carro)
    {
        if($this->estaLotado()) {
            throw new EstacionamentoLotadoException('lotado', 1);
        }

        return $this->veiculosEstacionados[] = $carro;
    }
}