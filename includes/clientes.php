<div class="row">
    <div class="col-md-8">
        <h2 class="sub-header">Clientes</h2>
    </div>

    <div class="col-md-4">
        <h4 class="sub-header">Ordenar</h4>
        <a href="?sort=asc" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-circle-arrow-up"></span>
            Crescente</a>
        <a href="?sort=desc" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-circle-arrow-down"></span>
            Decrescente</a>
    </div>
</div>
<hr>
<div class="row">
    <div class="table-responsive">
        <table class="table table-striped table-responsive table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Tel Fixo</th>
                <th>Endereço</th>
                <th>Tipo</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require_once 'array_clientes.php';

            foreach ($clientes_lista as $indice => $cliente) {
                echo '<tr>';
                echo '<td>' . $indice . '</td>';
                if ($cliente)
                echo '<td><a href="visualizar_cliente?posicao=' . $indice . '">' . $cliente->getNome() . '</a></td>';
                echo '<td>' . $cliente->getTelFixo() . '</td>';
                echo '<td>' . $cliente->getEndereco() . '</td>';
                echo '<td>';
                echo $cliente instanceof \classes\PessoaFisica ? 'Pessoa Física' : 'Pessoa Jurídica';
                echo '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>