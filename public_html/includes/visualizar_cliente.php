<?php
require_once 'array_clientes.php';

$posicao = (int)$_GET['posicao'];
$quant_clientes = count($clientes_lista);

if ($posicao >= $quant_clientes || $posicao < 0) {

    echo '<div class="page-header">';
    echo "<h2 class=\"sub-header\">Cliente não encontrado</h2><p class=\"lead\"></p>";
    echo '<a href="\"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>';
    echo '</div>';

} else {
    $cliente = $clientes_lista[$posicao];
    ?>
    <div class="page-header">
        <h2 class="sub-header"><small>Cliente</small><br> <?php echo $cliente->getNome(); ?></h2><br>
        <a href="/"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>Campo</th>
                <th>Dados</th>
            </tr>
            </thead>
            <tbody>
            <?php

            echo '<tr>';
            echo '<td>Nome</td>';
            echo '<td>' . $cliente->getNome() . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Tel Fixo</td>';
            echo '<td>' . $cliente->getTelFixo() . '</td>';
            echo '</tr>';

            if ($cliente instanceof \classes\PessoaFisica) {
                echo '<tr>';
                echo '<td>CPF</td>';
                echo '<td>' . $cliente->getCpf() . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>RG</td>';
                echo '<td>' . $cliente->getRg() . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Celular</td>';
                echo '<td>' . $cliente->getCelular() . '</td>';
                echo '</tr>';

            } else if ($cliente instanceof \classes\PessoaJuridica) {
                echo '<tr>';
                echo '<td>CNPJ</td>';
                echo '<td>' . $cliente->getCnpj() . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Inscrição Estadual</td>';
                echo '<td>' . $cliente->getInscEstadual() . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Celular</td>';
                echo '<td>' . $cliente->getFax() . '</td>';
                echo '</tr>';
            }
            echo '<tr>';
            echo '<td>Estrelas</td>';
            echo '<td>' . $cliente->getGrauDeImportancia() . '</td>';
            echo '</tr>';

            
            echo '<tr>';
            echo '<td>Endereço</td>';
            echo '<td>' . $cliente->getEndereco() . '</td>';
            echo '</tr>';
          
            if ($cliente->getEnderecoAlternativo()) {
            echo '<tr>';
            echo '<td>Endereço de cobrança</td>';
            echo '<td>' . $cliente->getEnderecoAlternativo() . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '</tr>';
              }

            ?>
            </tbody>
        </table>
    </div>
<?php
}