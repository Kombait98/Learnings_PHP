<?php
if (isset($upHeader)) {
    header("Location: {$configPage->setLinkMenu('cliente', 'cliente', 'consulta', 'upTrue', $_POST['formUp'])}");
}
?>
<h5> <?php echo (isset($editConsulta)) ? 'Editar' : 'Cadastrar' ?> Cliente </h5>
<hr/>
<br/>
<form action="" method="post">
    <div class="form-group row">
        <label for="formClienteNome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="formClienteNome" id="formClienteNome" value="<?php echo isset($editConsulta) ? $editConsulta['nome'] : '' ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteContato1" class="col-sm-2 col-form-label">Contatos</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formClienteContato1" id="formClienteContato1" value="<?php echo isset($editConsulta) ? $editConsulta['contato1'] : '' ?>" placeholder="Contato 1">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formClienteContato2" id="formClienteContato2" value="<?php echo isset($editConsulta) ? $editConsulta['contato2'] : '' ?>"  placeholder="Contato 2">
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="formClienteEmail" id="formClienteEmail" value="<?php echo isset($editConsulta) ? $editConsulta['email'] : '' ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteCpf" class="col-sm-2 col-form-label">Cpf</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="formClienteCpf" id="formClienteCpf" value="<?php echo isset($editConsulta) ? $editConsulta['cpf'] : '' ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteSexo" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="formClienteSexo" id="formClienteSexo1" value="1" <?php echo isset($editConsulta) && $editConsulta['sexo'] == 1 ? "checked" : '' ?>><label class="form-check-label" for="formClienteSexo1">Masculino</label>&emsp;&emsp;
                <input class="form-check-input" type="radio" name="formClienteSexo" id="formClienteSexo0" value="0" <?php echo isset($editConsulta) && $editConsulta['sexo'] == 0 ? "checked" : '' ?>><label class="form-check-label" for="formClienteSexo0">Feminino</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteDtNasc" class="col-sm-2 col-form-label">Data de Nasc.</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" name="formClienteDtNasc" id="formClienteDtNasc" value="<?php echo isset($editConsulta) ? $bdMb->dtBr($editConsulta['dt_nasc'], true) : '' ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="formClienteSenha" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-3">
            <input type="password" class="form-control" name="formClienteSenha" id="formClienteSenha" value="<?php echo isset($editConsulta) ? $editConsulta['senha'] : '' ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
        <div class="col-sm-3">
            <hr/>
            <?php if (isset($editConsulta)): ?>
                <button type="submit" class="btn btn-sm btn-outline-success" name="formUp" value="<?php echo $editConsulta['id_cliente'] ?>" style="margin-right: 15px"><strong><i class="fas fa-pencil-alt"></i> Alterar</strong></button>
                <a href="<?php echo $configPage->setLinkMenu('cliente', 'cliente', 'consulta') ?>" class="btn btn-sm btn-outline-danger" ><i class="fas fa-times"></i> Cancelar</a>
            <?php else: ?>
                <button type="submit" class="btn btn-sm btn-outline-primary" name="formSave" style="margin-right: 15px"><strong><i class="fas fa-check"></i> Cadastrar</strong></button>
                <button type="reset" class="btn btn-sm btn-outline-danger" name="formClienteClear"><i class="fas fa-times"></i> Cancelar</button>
            <?php endif; ?>
        </div>
    </div>
</form>