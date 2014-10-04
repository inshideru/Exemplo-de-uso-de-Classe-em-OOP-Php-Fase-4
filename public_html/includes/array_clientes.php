<?php
require '../src/app/db_config.php';

$pdo = null;
$clientes_lista = array();

try {
    $pdo = new PDO(SGBD . ':host=localhost;dbname=' . DBNAME, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try {
    $statement = $pdo->prepare("SELECT * FROM tb_pessoa_fisica");
    $statement->execute();

    while ($resultado = $statement->fetchObject('app\Classes\PessoaFisica')) {
        $clientes_lista[] = $resultado;
    }
} catch (PDOException $e) {
    echo 'Erro:'.$e->getCode().
        ', Mensagem '.$e->getMessage().
        ', Arquivo: '.$e->getFile().
        ', Linha: '.$e->getLine();
    die;
}

try {
    $statement = $pdo->prepare("SELECT * FROM tb_pessoa_juridica");
    $statement->execute();

    while ($resultado = $statement->fetchObject('app\Classes\PessoaJuridica')) {
        $clientes_lista[] = $resultado;
    }
} catch (PDOException $e) {
    echo 'Erro:'.$e->getCode().
        ', Mensagem '.$e->getMessage().
        ', Arquivo: '.$e->getFile().
        ', Linha: '.$e->getLine();
    die;
}

/** Gerando números aleatórios para teste */
foreach ($clientes_lista as $cliente) {
    $cliente->setGrauDeImportancia(rand(1,5));
}

$clientes_lista[0]->setEnderecoAlternativo('Rua das Amebas, 234');
$clientes_lista[2]->setEnderecoAlternativo('Avenida Saturnino de Brito, 12312');
$clientes_lista[7]->setEnderecoAlternativo('Rua Sofia Vergara, 8008');
$clientes_lista[18]->setEnderecoAlternativo('Alameda dos Flamboyants, 21');

if (isset($_GET['sort'])) {

    if ($_GET['sort'] == 'asc') {
        ksort($clientes_lista);
    } else if ($_GET['sort'] == 'desc') {
        krsort($clientes_lista);
    }

}