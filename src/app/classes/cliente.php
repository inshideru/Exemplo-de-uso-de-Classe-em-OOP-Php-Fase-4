<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 09/09/14
 * Time: 10:05
 */

namespace app\Classes;


abstract class Cliente
{
    public $nome;
    public $tel_fixo;
    public $endereco;

    public function __construct()
    {
    }

    /**
     * @param $endereco
     * @return Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param $nome
     * @return Cliente
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param $tel_fixo
     * @return Cliente
     */
    public function setTelFixo($tel_fixo)
    {
        $this->tel_fixo = $tel_fixo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelFixo()
    {
        return $this->tel_fixo;
    }


}