<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 18/09/14
 * Time: 12:33
 */

namespace app\Classes;
use app\ClassesInterfaces\GrauDeImportancia;
use app\ClassesInterfaces\EnderecoAlternativo;


class PessoaFisica extends Cliente implements GrauDeImportancia, EnderecoAlternativo
{
    private $celular;
    private $rg;
    private $cpf;
    private $importancia;
    private $endereco_alternativo;

    public function __construct()
    {
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
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
        return $this;
    }

    function getGrauDeImportancia()
    {
        return $this->importancia;
    }

    function setEnderecoAlternativo($endereco)
    {
        $this->endereco_alternativo = $endereco;
        return $this;
    }

    function getEnderecoAlternativo()
    {
        return $this->endereco_alternativo;
    }
}