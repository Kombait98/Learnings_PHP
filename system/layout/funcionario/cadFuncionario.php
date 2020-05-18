<h5> Cadastrar Funcionário </h5>
<hr/>
<br/>
<form action="" method="post">
    <div class="form-group row">
        <label for="formFuncNome" class="col-sm-1 col-form-label">Nome</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="formFuncNome" id="formFuncNome" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncSexo" class="col-sm-1 col-form-label">Sexo</label>
        <div class="col-sm-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="formFuncSexo" id="formFuncSexo1" value="1"><label class="form-check-label" for="formFuncSexo1">Masculino</label>&emsp;&emsp;
                <input class="form-check-input" type="radio" name="formFuncSexo" id="formFuncSexo0" value="0"><label class="form-check-label" for="formFuncSexo0">Feminino</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncCpf" class="col-sm-1 col-form-label">Cpf</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formFuncCpf" id="formFuncCpf" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncEmail" class="col-sm-1 col-form-label">Email</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="formFuncEmail" id="formFuncEmail" value="">
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncContato1" class="col-sm-1 col-form-label">Contatos</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formFuncContato1" id="formFuncContato1" value="" placeholder="Contato 1">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formFuncContato2" id="formFuncContato2" value=""  placeholder="Contato 2">
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncCargo" class="col-sm-1 col-form-label">Cargo</label>
        <div class="col-sm-2">
            <select class="form-control" name="formFuncCargo" id="formFuncCargo">
                <option value="0" disabled selected>--- Sel. Cargo ---</option>
                <option value="Recepcionista">Recepcionista</option>
                <option value="Gerente">Gerente</option>
                <option value="Auxiliar Financeiro">Auxiliar Financeiro</option>
                <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                <option value="Serviços Gerais">Serviços Gerais</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncSal" class="col-sm-1 col-form-label">Salário</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" name="formFuncSal" id="formFuncSal" value="" placeholder="R$">
        </div>
    </div>
    <div class="form-group row">
        <label for="formFuncSenha1" class="col-sm-1 col-form-label">Senha</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" name="formFuncSenha1" id="formFuncSenha1" placeholder="Digite a Senha">
        </div>
        <div class="col-sm-2">
            <input type="password" class="form-control" name="formFuncSenha2" id="formFuncSenha2" placeholder="Confirme a Senha">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-1 col-form-label"></label>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-sm btn-outline-primary" name="formSave" style="margin-right: 15px"><strong><i class="fas fa-check"></i> Cadastrar</strong></button>
            <button type="reset" class="btn btn-sm btn-outline-danger" name="formFuncClear"><i class="fas fa-times"></i> Cancelar</button>
        </div>
    </div>
</form>

