<h5>Consultar Reserva</h5>
<hr/>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Pesquisa</h5>
        <p class="card-text">
        <form action="" method="post" class="form-inline">
            <select class="custom-select my-1 mr-sm-2" id="tipoPesquisa" name="tipoPesquisa">
                <option selected disabled>Pesquisar por...</option>
                <option value="na">Aposento (número)</option>
                <option value="cm">Cliente (nome)</option>
                <option value="de">Data de Entrada</option>
            </select>
            <div class="col-md-4">
                <input type="text" class="form-control my-1 mr-sm-2" id="descTipoPesquisa" name="descTipoPesquisa" style="width: 100%" placeholder="Digite aqui...">
            </div>
            <button type="submit" class="btn btn-primary my-1 mr-sm-2" id="pesqHosp" name="pesqHosp"><i class="fas fa-search"></i> Pesquisar</button>
        </form>        
        </p>
    </div>
</div>
<br/>
<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tipo Aposento</th>
            <th scope="col">Cliente</th>
            <th scope="col">Dt Entrada</th>
            <th scope="col">Nº Diária</th>
            <th scope="col">Vlr Diária (R$)</th>
            <th scope="col" title="TD = Total de Diária(s)">Vlr TD's (R$)</th>
            <th scope="col">Vlr Consumo (R$)</th>
            <th scope="col" title="Vlr Total = Total de Diária(s) + Vlr Consumo">Vlr Total</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listHospedagem as $col): ?>
            <tr>
                <th scope="row"><?php echo ++$ln; ?></th>
                <td><a href="<?php echo $configPage->setLinkMenu('aposento', 'aposento', 'consulta', 'pesqApo', $col['id_aposento']); ?>"><?php echo $col['num_ap'] . " - " . $col['tipo_ap']; ?> </a></td>
                <td><a href="<?php echo $configPage->setLinkMenu('cliente', 'cliente', 'consulta', 'pesqCli', $col['id_cliente']); ?>"><?php echo $configPage->nomeSobrenome($col['cli_nome']); ?> </a></td>
                <td><?php echo $bdMb->dtBr($col['dt_entrada'], true); ?> </td>
                <td><?php echo $configPage->numDiaria($col['dt_entrada']); ?> </td>
                <td><?php echo $col['vlr_ap']; ?> </td>
                <td><?php echo $td = $configPage->numDiaria($col['dt_entrada'], $col['vlr_ap']); ?></td>
                <td><?php echo $consumo = "0.00"; ?></td>
                <td><?php echo $td + $consumo; ?> </td>
                <td>
                    <a class="btn btn-sm btn-link" href="<?php echo $configPage->setLinkMenu('aposento', 'hospedagem', 'conConsumo'); ?>" role="button"><i class="fas fa-cart-plus"></i> Consumo</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


