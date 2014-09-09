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
    <h2 class="sub-header">Cliente <?php echo $cliente->nome; ?></h2>
    <a href="\"><span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar</a>
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
            echo '<td>' . $cliente->nome . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>CPF</td>';
            echo '<td>' . $cliente->cpf . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>RG</td>';
            echo '<td>' . $cliente->rg . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Tel Fixo</td>';
            echo '<td>' . $cliente->tel_fixo . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Celular</td>';
            echo '<td>' . $cliente->celular . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>Endereço</td>';
            echo '<td>' . $cliente->endereco . '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '</tr>';

        ?>
        </tbody>
    </table>
</div>
<?php
}