<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    private $criancas;
    private $adultos;
    private $temBebida;

    /**
     * @return mixed
     */
    public function getCriancas()
    {
        return $this->criancas;
    }

    /**
     * @param mixed $criancas
     */
    public function setCriancas($criancas)
    {
        $this->criancas = $criancas;
    }

    /**
     * @return mixed
     */
    public function getAdultos()
    {
        return $this->adultos;
    }

    /**
     * @param mixed $adultos
     */
    public function setAdultos($adultos)
    {
        $this->adultos = $adultos;
    }

    /**
     * @return mixed
     */
    public function getTemBebida()
    {
        return $this->temBebida;
    }

    /**
     * @param mixed $temBebida
     */
    public function setTemBebida($temBebida)
    {
        $this->temBebida = $temBebida;
    }
}
