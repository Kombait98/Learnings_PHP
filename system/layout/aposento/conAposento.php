<h5>Consultar Aposento</h5>
<hr/>
<p>
    <a href="<?php echo $configPage->setLinkMenu('aposento','aposento','cadAposento'); ?>" class="btn btn-outline-info"><i class="fa fa-plus"></i> Cadastrar Aposento</a>
</p>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo</th>
            <th scope="col">Valor (R$)</th>
            <th scope="col">Descrição</th>
            <th scope="col">Nº Aposento</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listConsulta as $col): ?>
            <tr>
                <th scope="row"><?php echo ++$ln; ?></th>
                <td><?php echo $col['tipo_aposento']; ?></td>
                <td><?php echo $col['vlr']; ?></td>
                <td><?php echo $col['descricao']; ?> </td>
                <td><?php echo $col['numero']; ?> </td>
                <td>
                    <a class="btn btn-sm btn-link" href="?page=aposento&subp=aposento&menup=cadAposento&editAposento=<?php echo $col['id_aposento']; ?>" role="button"><i class="fas fa-edit"></i> Editar</a> |
                    <a class="btn btn-sm btn-link text-danger" href="#" role="button"><i class="fas fa-bed"></i> Histórico</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


