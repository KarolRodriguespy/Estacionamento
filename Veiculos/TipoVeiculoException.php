<?php

namespace Challenges\Veiculos;

class TipoVeiculoException extends \RuntimeException
{
    public $mensagem = 'Não permitido';
    
    public function __construct($mensagem, $code = 0)
    {
        parent::__construct($mensagem, $code);
    }
}