<?php

namespace Challenges\Veiculos;

use Challenges\Motorista;

interface Veiculo
{
    public function getType(): string;

    public function setType(string $tipo): void;

    public function getMotorista(): Motorista;
}