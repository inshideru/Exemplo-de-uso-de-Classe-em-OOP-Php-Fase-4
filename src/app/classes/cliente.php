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

    public function __construct($nome, $tel_fixo, $endereco)
    {
        $this->nome = $nome;
        $this->tel_fixo = $tel_fixo;
        $this->endereco = $endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $tel_fixo
     */
    public function setTelFixo($tel_fixo)
    {
        $this->tel_fixo = $tel_fixo;
    }

    /**
     * @return mixed
     */
    public function getTelFixo()
    {
        return $this->tel_fixo;
    }


}