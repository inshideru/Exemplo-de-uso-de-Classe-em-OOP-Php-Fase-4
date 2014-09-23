<?php

$clientes_lista = array(
    new app\Classes\PessoaFisica('Fernando', '123.231.231-22', '244557-yy', '3213-9899', '93564-4774', 'Rua das Flores, 453'),
    new app\Classes\PessoaFisica('Maria', '222.231.111-32', '111222-x', '4525-4455', '93467-5556', 'Rua da Justiça, 4355'),
    new app\Classes\PessoaJuridica('Twins Importações', '31.453.345/00008-05', '12346589', '4445-7745', '3234-4444', 'Hell\'s Kitchen', '322'),
    new app\Classes\PessoaFisica('Marcelo', '444.554.789-33', '52345-hh', '3467-5645', '93477-7755', 'Rua Marcondes da Silva, 456'),
    new app\Classes\PessoaJuridica('Secury Network', '55.231.231/00001-08', '12334789', '4567-0900', '2347-8928', 'Rua Roberto Silva, 644'),
    new app\Classes\PessoaFisica('Renato', '323.444.555-99', '57853-e', '4324-3478', '92347-8928', 'Rua Agnaldo Timóteo, 6357'),
    new app\Classes\PessoaFisica('Paulo', '345.075.452-67', '7348922-4', '2347-3455', '93344-5566', 'Rua Marca das Oito Cordas, 5647'),
    new app\Classes\PessoaJuridica('Pereira & Associados', '23.231.776/00001-01', '33235568', '2347-3455', '3422-6789', 'Rua Doutor Scarface, 1232'),
    new app\Classes\PessoaJuridica('Ar Fresco Ltda.', '23.667.231/00001-08', '478968043', '3767-8900', '3536-8907', 'Av Paola Duarte, 07'),
    new app\Classes\PessoaFisica('Vinicius', '234.567.876-92', '2348089-th', '2347-7345', '9445-5677', 'Rua Fagafa Magafa, 456778'),
    new app\Classes\PessoaJuridica('Bar das Oito', '23.555.231/00001-09', '34637967', '3421-6455', '3467-5556', 'Rua da Mingau, 4556'),
    new app\Classes\PessoaFisica('Larissa', '438.856.456-68', '734553-yu', '4545-7457', '94534-4633', 'Rua Bola da Vez, 9875'),
    new app\Classes\PessoaFisica('Letícia', '453.238.722-23', '5643345-x', '4445-7745', '94533-4452', 'Rua Alemanha, 67677'),
    new app\Classes\PessoaJuridica('Mar Azul', '23.231.231/00001-65', '52362688', '3456-6677', '3564-4774', 'Rua das Flores, 453'),
    new app\Classes\PessoaFisica('Juliano', '766.340.345-00', '879556-n', '3457-7455', '93234-4445', 'Rua Rato de Praia, 77'),
    new app\Classes\PessoaJuridica('Melões e Cia', '23.231.222/00001-06', '436578677', '3456-9000', '3477-7755', 'Rua Marcolino de Oliveira, 09'),
    new app\Classes\PessoaJuridica('Padaria Pão Duro', '23.345.231/00004-76', '78000989', '2347-7345', '3237-6544', 'Alameda Billabong, 457'),
    new app\Classes\PessoaJuridica('Oficina Marcondes', '12.231.345/00004-33', '123167890', '4545-7457', '3452-3445', 'Rua do Forno Frio, 567'),
    new app\Classes\PessoaFisica('Mariana', '450.084.422-34', '07844456-g', '2345-7456', '94322-4453', 'Rua Raichu Thunder, 54'),
    new app\Classes\PessoaJuridica('Casa de Rações da Gatona', '33.231.321/00002-31', '12335000', '2345-7456', '3156-4453', 'Beco do Crime, 32'),
);

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