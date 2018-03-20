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

    public function calcularCompras(Pedido $pedido){
        $qtdAdultos         = $pedido->getAdultos();
        $qtdCriancas        = $pedido->getCriancas();

        //100 salgadas para cada 10 adultos
        $qtdSalgadosAdultos  =  (int)($qtdAdultos/10)* 100;

        //10 salgadas para cada 2 crianças
        $qtdSalgadosCriancas =  (int)($qtdCriancas/2)* 10;

        //calcular doces
        $qtdDoces            = (int)($qtdCriancas/4)* 5;

        //calcular carne
        $qtdCarne            = (int)(($qtdCriancas+$qtdAdultos)/6)* 1;

        //calcula refrigerante
        $qtdRefri            = (int)(($qtdCriancas+$qtdAdultos)/4)* 2;
        return  array(
            'qtdCerveja' => $pedido->getTemBebida() == 'S' ? ((int)($qtdAdultos/3)* 12) - $qtdCriancas : 0,
            'qtdWhisky'  => $pedido->getTemBebida() == 'S' ? ((int)($qtdAdultos/30))* 1 : 0,
            'qtdSalgados'=> $qtdSalgadosAdultos+$qtdSalgadosCriancas,
            'qtdCarne'   => $qtdCarne,
            'qtdRefri'   => $qtdRefri,
            'qtdDoces'   => $qtdDoces
        );

    }

}