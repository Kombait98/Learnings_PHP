<h5> Cadastrar Hospedagem </h5>
<hr/>
<br/>
<form action="" method="post">
    <div class="form-group row">
        <label for="formHospAposento" class="col-sm-2 col-form-label">Aposento</label>
        <div class="col-sm-7">
            <select class="form-control" id="formHospAposento" name="formHospAposento">
                <option disabled selected value="0">--- Selecionar o Aposento ---</option>
                <?php
                foreach ($listAposento as $col) {
                    echo "<option value='{$col['id_aposento']}'>{$col['numero']} - {$col['tipo_aposento']}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="formHospCliente" class="col-sm-2 col-form-label">Cliente</label>
        <div class="col-sm-7">
            <select class="form-control" id="formHospCliente" name="formHospCliente">
                <option disabled selected value="0">--- Selecionar o Cliente ---</option>
                <?php
                foreach ($listCliente as $col) {
                    echo "<option value='{$col['id_cliente']}'>{$col['cpf']} - {$col['nome']}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="formHospFunc" class="col-sm-2 col-form-label">Funcionário</label>
        <div class="col-sm-7">
            <select class="form-control" id="formHospFunc" name="formHospFunc">
                <option disabled selected value="0">--- Selecionar o Aposento ---</option>
                <?php
                foreach ($listFuncionario as $col) {
                    echo "<option value='{$col['id_funcionario']}'>{$col['id_funcionario']} - {$col['nome']}</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="formHospDtEntrada" class="col-sm-2 col-form-label">Dt Entrada</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="formHospDtEntrada" id="formHospDtEntrada" value="<?php echo date('d/m/Y'); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="formSaveHosp" style="margin-right: 15px"><strong><i class="fas fa-check"></i> Cadastrar</strong></button>
            <button type="button" class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i> Cancelar</button>
        </div>
    </div>
</form>

