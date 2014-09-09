<div class="row">
    <div class="col-md-8">
        <h2 class="sub-header">Clientes</h2>
        <p class="lead">Esta é a lista de clientes.</p>
    </div>

    <div class="col-md-4">
        <h4 class="sub-header">Ordenar</h4>
        <a href="?sort=asc" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-circle-arrow-up"></span>
            Crescente</a>
        <a href="?sort=desc" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-circle-arrow-down"></span>
            Decrescente</a>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>#</th>
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

            foreach ($clientes_lista as $indice => $cliente) {
                echo '<tr>';
                echo '<td>' . $indice . '</td>';
                echo '<td><a href="visualizar_cliente?posicao=' . $indice . '">' . $cliente->nome . '</a></td>';
                echo '<td>' . $cliente->cpf . '</td>';
                echo '<td>' . $cliente->rg . '</td>';
                echo '<td>' . $cliente->tel_fixo . '</td>';
                echo '<td>' . $cliente->celular . '</td>';
                echo '<td>' . $cliente->endereco . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>