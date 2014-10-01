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

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function persist(Cliente $cliente)
    {

    }

    public function flush()
    {

    }
}