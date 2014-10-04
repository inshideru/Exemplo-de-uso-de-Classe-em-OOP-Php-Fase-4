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


class PessoaJuridica extends Cliente implements GrauDeImportancia, EnderecoAlternativo
{
    private $cnpj;
    private $insc_estadual;
    private $fax;
    private $importancia;
    private $endereco_alternativo;

    public function __construct()
    {
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    public function setInscEstadual($insc_estadual)
    {
        $this->insc_estadual = $insc_estadual;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInscEstadual()
    {
        return $this->insc_estadual;
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