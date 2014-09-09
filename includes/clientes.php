<h2 class="sub-header">Clientes</h2>
<div class="table-responsive">
    <table class="table table-striped table-responsive table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Tel Fixo</th>
            <th>Celular</th>
            <th>Endereço</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'array_clientes.php';

        foreach($clientes_lista as $cliente) {
            echo '<tr>';
            echo '<td>' . $cliente->nome . ' </td>';
            echo '<td>' . $cliente->cpf . ' </td>';
            echo '<td>' . $cliente->rg . ' </td>';
            echo '<td>' . $cliente->tel_fixo . ' </td>';
            echo '<td>' . $cliente->celular . ' </td>';
            echo '<td>' . $cliente->endereco . ' </td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>