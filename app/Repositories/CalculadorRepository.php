<?php
/**
 * Created by PhpStorm.
 * User: Basis
 * Date: 20/03/2018
 * Time: 11:41
 */

namespace App\Repositories;
use App\Pedido;


class CalculadorRepository
{
    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function calcularCompras(){
        $this->pedido->getAdultos();

    }

}