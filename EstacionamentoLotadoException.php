<?php
namespace Challenges;

class EstacionamentoLotadoException extends \Exception
{
    public $mensagem = "Estacionamento lotado";

    public function __construct($mensagem,$cod=0)
    {
       parent::__construct($mensagem,$cod);
    }

}