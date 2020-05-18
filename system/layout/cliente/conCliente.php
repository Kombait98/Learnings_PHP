<h5>Consultar Cliente</h5>
<hr/>
<?php if (isset($_GET['upTrue'])): ?>
    <div class="alert alert-info" role="alert">
        Cliente Alterado com Sucesso
    </div>
<?php endif; ?>
<br/>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Cpf</th>
            <th scope="col" title="Data de Nascimento">Dt Nasc</th>
            <th scope="col">Contato</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listConsulta as $col): ?>
            <tr <?php echo isset($_GET['upTrue']) && $_GET['upTrue'] == $col['id_cliente'] ? "class='table-warning'" : "" ?>>
                <th scope="row"><?php echo ++$ln; ?></th>
                <td><?php echo $col['nome']; ?></td>
                <td><?php echo $col['cpf']; ?></td>
                <td><?php echo $col['dt_nasc']; ?> </td>
                <td><?php echo $col['contato1']; ?> </td>
                <td><?php echo $col['email']; ?> </td>
                <td>
                    <a class="btn btn-sm btn-link" href="?page=cliente&subp=edit&menup=cadCliente&editUsu=<?php echo $col['id_cliente']; ?>" role="button"><i class="fas fa-edit"></i> Editar</a> |
                    <a class="btn btn-sm btn-link text-danger" href="?page=cliente&subp=cliente&menup=cadCliente&editUsu=Y&usid=<?php echo $col['id_funcionario']; ?>" role="button"><i class="fas fa-bed"></i> Histórico</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="7"><i>Dt Nasc - Data de Nascimento</i></th>
        </tr>
    </tfoot>
</table>


