<?php
namespace App;

/**
 * 
 * Desenvolvido por: Leonardo Tumadjian
 **/
class Calculadora
{
    // Acumulador de total
    public $total;

    public function __construct($inicial=0)
    {
        $this->total = $inicial;
    }

    public function somar($valor)
    {
        $this->total += $valor;
        return $this;
    }

    public function subtrair($valor)
    {
        $this->total -= $valor;
        return $this;
    }

    public function expoente($expoente)
    {
        if ($expoente == 0) {
            throw new \Exception("Expoente não pode ser 0");
        }
        $this->total **= $expoente;
        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
