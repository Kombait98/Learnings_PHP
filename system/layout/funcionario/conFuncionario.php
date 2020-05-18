<h5>Consultar Funcionário</h5>
<hr/>
<br/>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Cpf</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listConsulta as $col): ?>
            <tr>
                <th scope="row"><?php echo ++$ln; ?></th>
                <td><?php echo $col['nome']; ?></td>
                <td><?php echo $col['email']; ?></td>
                <td><?php echo $col['cpf']; ?> </td>
                <td>
                    <a class="btn btn-sm btn-link" href="?page=cliente&subp=cliente&menup=cadCliente&editUsu=Y&usid=<?php echo $col['id_funcionario']; ?>" role="button"><i class="fas fa-edit"></i> Editar</a> |
                    <a class="btn btn-sm btn-link text-danger" href="?page=cliente&subp=cliente&menup=cadCliente&editUsu=Y&usid=<?php echo $col['id_funcionario']; ?>" role="button"><i class="fas fa-bed"></i> Histórico</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


