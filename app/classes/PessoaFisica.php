<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 18/09/14
 * Time: 12:33
 */

namespace classes;


class PessoaFisica extends Cliente implements GrauDeImportancia, EnderecoAlternativo
{
    private $celular;
    private $rg;
    private $cpf;
    private $importancia;
    private $endereco_alternativo;

    public function __construct($nome, $tel_fixo, $endereco, $cpf, $rg, $celular)
    {
        parent::__construct($nome, $tel_fixo, $endereco);
        $this->celular = $celular;
        $this->rg = $rg;
        $this->cpf = $cpf;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }


    function setGrauDeImportancia($grau)
    {
        $this->importancia = $grau;
    }

    function getGrauDeImportancia()
    {
        return $this->importancia;
    }

    function setEnderecoAlternativo($endereco)
    {
        $this->endereco_alternativo = $endereco;
    }

    function getEnderecoAlternativo()
    {
        return $this->endereco_alternativo;
    }
}