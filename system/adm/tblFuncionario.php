<?php

class TblFuncionario extends ConfigBd {

    private $stmt;
    private $insertFunc;
    private $selectFunc;

    public function __construct() {
        $this->stmt = parent::__construct();
    }

    function getInsert() {
        return $this->insertFunc;
    }

    function setInsert($post) {
        $insertFunc = array($post['formFuncNome'], $post['formFuncCpf'], $post['formFuncEmail'], $post['formFuncContato1'], $post['formFuncContato2'], $post['formFuncCargo'], $post['formFuncSal'], $post['formFuncSexo'], $post['formFuncSenha1']);
        $query = $this->stmt->prepare("INSERT INTO funcionario(nome,cpf,email,celular_1,celular_2,cargo,salario,sexo,senha) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $result = $query->execute($insertFunc);
        $this->insertFunc = $result;
    }

    function getSelect() {
        return $this->selectFunc;
    }

    function setSelect($idFunc = NULL) {
        if (!empty($idFunc)) {
            $this->selectFunc = NULL;
        } else {
            $this->selectFunc = $this->stmt->query("SELECT id_funcionario, nome, cpf, email FROM funcionario LIMIT 10;")->fetchALL();
        }
    }

}
