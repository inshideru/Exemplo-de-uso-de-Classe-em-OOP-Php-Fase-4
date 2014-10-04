<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 01/10/14
 * Time: 15:43
 */

namespace app\Classes;


class DataBase
{
    /** @var  PDO */
    private $pdo;
    /** @var  \PDOStatement */
    private $statement;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->statement = null;
    }

    public function persist(Cliente $cliente)
    {
        if ($cliente instanceof PessoaFisica) {
            $this->persistPessoaFisica($cliente);
        } elseif ($cliente instanceof PessoaJuridica) {
            $this->persistPessoaJuridica($cliente);
        }
    }

    private function persistPessoaFisica(PessoaFisica $pessoaFisica)
    {
        $sql = "INSERT INTO tb_pessoa_fisica
                (nome, tel_fixo, endereco, celular, rg, cpf, importancia, endereco_alternativo)
                VALUES
                (:nome, :tel_fixo, :endereco, :celular, :rg, :cpf, :importancia, :endereco_alternativo)";

        $this->statement = $this->pdo->prepare($sql);

        $this->statement->bindValue(':nome', $pessoaFisica->getNome());
        $this->statement->bindValue(':tel_fixo', $pessoaFisica->getTelFixo());
        $this->statement->bindValue(':endereco', $pessoaFisica->getEndereco());
        $this->statement->bindValue(':celular', $pessoaFisica->getCelular());
        $this->statement->bindValue(':rg', $pessoaFisica->getRg());
        $this->statement->bindValue(':cpf', $pessoaFisica->getCpf());
        $this->statement->bindValue(':importancia', $pessoaFisica->getGrauDeImportancia());
        $this->statement->bindValue(':endereco_alternativo', $pessoaFisica->getEnderecoAlternativo());

    }

    private function persistPessoaJuridica(PessoaJuridica $pessoaJuridica)
    {
        $sql = "INSERT INTO tb_pessoa_juridica
                (nome, tel_fixo, endereco, cnpj, insc_estadual, fax, importancia, endereco_alternativo)
                VALUES
                (:nome, :tel_fixo, :endereco, :cnpj, :insc_estadual, :fax, :importancia, :endereco_alternativo)";

        $this->statement = $this->pdo->prepare($sql);

        $this->statement->bindValue(':nome', $pessoaJuridica->getNome());
        $this->statement->bindValue(':tel_fixo', $pessoaJuridica->getTelFixo());
        $this->statement->bindValue(':endereco', $pessoaJuridica->getEndereco());
        $this->statement->bindValue(':cnpj', $pessoaJuridica->getCnpj());
        $this->statement->bindValue(':insc_estadual', $pessoaJuridica->getInscEstadual());
        $this->statement->bindValue(':fax', $pessoaJuridica->getFax());
        $this->statement->bindValue(':importancia', $pessoaJuridica->getGrauDeImportancia());
        $this->statement->bindValue(':endereco_alternativo', $pessoaJuridica->getEnderecoAlternativo());
    }

    public function flush()
    {
        if ($this->statement) {
            try {

                $this->statement->execute();

            } catch (Exception $e) {
                echo $e->getMessage();
            }
            return true;
        }

        return false;
    }
}