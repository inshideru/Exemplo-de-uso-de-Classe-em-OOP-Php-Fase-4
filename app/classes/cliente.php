<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 09/09/14
 * Time: 10:05
 */

namespace classes;


class cliente {
    public $nome;
    public $cpf;
    public $rg;
    public $tel_fixo;
    public $celular;
    public $endereco;

    public function __construct($nome, $cpf, $rg, $tel_fixo, $celular, $endereco)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->tel_fixo = $tel_fixo;
        $this->celular = $celular;
        $this->endereco = $endereco;
    }
}