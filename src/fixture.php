<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 04/10/14
 * Time: 17:37
 */
require 'app/ClassesInterfaces/EnderecoAlternativo.php';
require 'app/ClassesInterfaces/GrauDeImportancia.php';
require 'app/Classes/Cliente.php';
require 'app/Classes/PessoaFisica.php';
require 'app/Classes/PessoaJuridica.php';
require 'app/Classes/DataBase.php';
require 'app/db_config.php';

$pdo = null;
try {
    $pdo = new PDO(SGBD . ':host=localhost;dbname=' . DBNAME, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro:'.$e->getCode().
        ', Mensagem '.$e->getMessage().
        ', Arquivo: '.$e->getFile().
        ', Linha: '.$e->getLine();
    die;
}

$sql_create_tables = <<<EOL
drop table if exists tb_pessoa_fisica;

create table tb_pessoa_fisica (
    id_pessoa_fisica int not null auto_increment primary key,
	nome varchar(60),
    tel_fixo varchar(13),
    endereco varchar(255),
    celular varchar(14),
    rg varchar(15),
    cpf varchar(13),
    importancia int,
    endereco_alternativo varchar(255)
);

drop table if exists tb_pessoa_juridica;

create table tb_pessoa_juridica (
    id_pessoa_fisica int not null auto_increment primary key,
	nome varchar(60),
    tel_fixo varchar(13),
    endereco varchar(255),
    cnpj varchar(18),
    insc_estadual varchar(15),
    fax varchar(13),
    importancia int,
    endereco_alternativo varchar(255)
);
EOL;

/* Criar tabelas */
$statement = $pdo->prepare($sql_create_tables);
try {
    $statement->execute();
    echo "Tabelas criadas\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
$statement = null;

/* Instanciando Clientes */
$clientes_lista = array(
    (new app\Classes\PessoaFisica())
        ->setNome('Fernando')
        ->setCpf('123.231.231-22')
        ->setRg('244557-yy')
        ->setTelFixo('3213-9899')
        ->setCelular('93564-4774')
        ->setEndereco('Rua das Flores, 453'),
    (new app\Classes\PessoaFisica())
        ->setNome('Maria')
        ->setCpf('222.231.111-32')
        ->setRg('111222-x')
        ->setTelFixo('4525-4455')
        ->setCelular('93467-5556')
        ->setEndereco('Rua da Justiça, 4355'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Twins Importações')
        ->setCnpj('31.453.345/00008-05')
        ->setInscEstadual('12346589')
        ->setTelFixo('4445-7745')
        ->setFax('3234-4444')
        ->setEndereco('Hell\'s Kitchen', '322'),
    (new app\Classes\PessoaFisica())
        ->setNome('Marcelo')
        ->setCpf('444.554.789-33')
        ->setRg('52345-hh')
        ->setTelFixo('3467-5645')
        ->setCelular('93477-7755')
        ->setEndereco('Rua Marcondes da Silva, 456'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Secury Network')
        ->setCnpj('55.231.231/00001-08')
        ->setInscEstadual('12334789')
        ->setFax('4567-0900')
        ->setTelFixo('2347-8928')
        ->setEndereco('Rua Roberto Silva, 644'),
    (new app\Classes\PessoaFisica())
        ->setNome('Renato')
        ->setCpf('323.444.555-99')
        ->setRg('57853-e')
        ->setTelFixo('4324-3478')
        ->setCelular('92347-8928')
        ->setEndereco('Rua Agnaldo Timóteo, 6357'),
    (new app\Classes\PessoaFisica())
        ->setNome('Paulo')
        ->setCpf('345.075.452-67')
        ->setRg('7348922-4')
        ->setTelFixo('2347-3455')
        ->setCelular('93344-5566')
        ->setEndereco('Rua Marca das Oito Cordas, 5647'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Pereira & Associados')
        ->setCnpj('23.231.776/00001-01')
        ->setInscEstadual('33235568')
        ->setTelFixo('2347-3455')
        ->setFax('3422-6789')
        ->setEndereco('Rua Doutor Scarface, 1232'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Ar Fresco Ltda.')
        ->setCnpj('23.667.231/00001-08')
        ->setInscEstadual('478968043')
        ->setTelFixo('3767-8900')
        ->setFax('3536-8907')
        ->setEndereco('Av Paola Duarte, 07'),
    (new app\Classes\PessoaFisica())
        ->setNome('Vinicius')
        ->setCpf('234.567.876-92')
        ->setRg('2348089-th')
        ->setTelFixo('2347-7345')
        ->setCelular('9445-5677')
        ->setEndereco('Rua Fagafa Magafa, 456778'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Bar das Oito')
        ->setCnpj('23.555.231/00001-09')
        ->setInscEstadual('34637967')
        ->setTelFixo('3421-6455')
        ->setFax('3467-5556')
        ->setEndereco('Rua da Mingau, 4556'),
    (new app\Classes\PessoaFisica())
        ->setNome('Larissa')
        ->setCpf('438.856.456-68')
        ->setRg('734553-yu')
        ->setTelfixo('4545-7457')
        ->setCelular('94534-4633')
        ->setEndereco('Rua Bola da Vez, 9875'),
    (new app\Classes\PessoaFisica())
        ->setNome('Letícia')
        ->setCpf('453.238.722-23')
        ->setRg('5643345-x')
        ->setTelFixo('4445-7745')
        ->setCelular('94533-4452')
        ->setEndereco('Rua Alemanha, 67677'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Mar Azul')
        ->setCnpj('23.231.231/00001-65')
        ->setInscEstadual('52362688')
        ->setFax('3456-6677')
        ->setTelfixo('3564-4774')
        ->setEndereco('Rua das Flores, 453'),
    (new app\Classes\PessoaFisica())
        ->setNome('Juliano')
        ->setCpf('766.340.345-00')
        ->setRg('879556-n')
        ->setTelFixo('3457-7455')
        ->setCelular('93234-4445')
        ->setEndereco('Rua Rato de Praia, 77'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Melões e Cia')
        ->setCnpj('23.231.222/00001-06')
        ->setInscEstadual('436578677')
        ->setFax('3456-9000')
        ->setTelFixo('3477-7755')
        ->setEndereco('Rua Marcolino de Oliveira, 09'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Padaria Pão Duro')
        ->setCnpj('23.345.231/00004-76')
        ->setInscEstadual('78000989')
        ->setFax('2347-7345')
        ->setTelFixo('3237-6544')
        ->setEndereco('Alameda Billabong, 457'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Oficina Marcondes')
        ->setCnpj('12.231.345/00004-33')
        ->setInscEstadual('123167890')
        ->setFax('4545-7457')
        ->setTelFixo('3452-3445')
        ->setEndereco('Rua do Forno Frio, 567'),
    (new app\Classes\PessoaFisica())
        ->setNome('Mariana')
        ->setCpf('450.084.422-34')
        ->setRg('07844456-g')
        ->setTelFixo('2345-7456')
        ->setCelular('94322-4453')
        ->setEndereco('Rua Raichu Thunder, 54'),
    (new app\Classes\PessoaJuridica())
        ->setNome('Casa de Rações da Gatona')
        ->setCnpj('33.231.321/00002-31')
        ->setInscEstadual('12335000')
        ->setFax('2345-7456')
        ->setTelFixo('3156-4453')
        ->setEndereco('Beco do Crime, 32'),
);


/** @var  DataBase */
$db = new app\Classes\DataBase($pdo);

foreach ($clientes_lista as $cliente) {
    $db->persist($cliente);
    if ($db->flush()) {
        echo "Cliente {$cliente->getNome()} adicionado.\n";
    }
}
