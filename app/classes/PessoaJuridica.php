<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 18/09/14
 * Time: 12:33
 */

namespace classes;


class PessoaJuridica extends Cliente implements GrauDeImportancia, EnderecoAlternativo
{
    private $cnpj;
    private $insc_estadual;
    private $fax;
    private $importancia;

    public function __construct($nome, $cnpj, $insc_estadual, $tel_fixo, $fax, $endereco)
    {
        parent::__construct($nome, $tel_fixo, $endereco);
        $this->cnpj = $cnpj;
        $this->fax = $fax;
        $this->insc_estadual = $insc_estadual;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $insc_estadual
     */
    public function setInscEstadual($insc_estadual)
    {
        $this->insc_estadual = $insc_estadual;
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