<?php

class TblCliente extends ConfigBd {

    private $stmt;
    private $insertCliente;
    private $selectCliente;
    private $updateCliente;

    public function __construct() {
        $this->stmt = parent::__construct();
    }

    function getInsert() {
        return $this->insertCliente;
    }

    function setInsert($post) {
        $insertCliente = array($post['formClienteNome'], $post['formClienteCpf'], $post['formClienteSexo'], $this->dtBr($post['formClienteDtNasc']), $post['formClienteContato1'], $post['formClienteContato2'], $post['formClienteEmail'], $post['formClienteSenha']);
        $query = $this->stmt->prepare("INSERT INTO cliente(nome,cpf,sexo,dt_nasc,contato1,contato2,email,senha) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $result = $query->execute($insertCliente);
        $this->insertCliente = $result;
    }

    function getSelect() {
        return $this->selectCliente;
    }

    function setSelect($idCliente = NULL) {
        if (!empty($idCliente)) {
            $this->selectCliente = $this->stmt->query("SELECT * FROM cliente WHERE id_cliente = $idCliente")->fetch(PDO::FETCH_ASSOC);
        } else {
            $this->selectCliente = $this->stmt->query("SELECT id_cliente, nome, cpf, email, dt_nasc, contato1 FROM cliente ORDER BY nome ASC;")->fetchALL();
        }
    }

    function getUpdate() {
        return $this->updateCliente;
    }

    function setUpdate($post) {
        $formCliente = array(
            'id_cliente' => $post['formUp'],
            'nome' => $post['formClienteNome'],
            'cpf' => $post['formClienteCpf'],
            'sexo' => $post['formClienteSexo'],
            'dt_nasc' => $this->dtBr($post['formClienteDtNasc']),
            'contato1' => $post['formClienteContato1'],
            'contato2' => $post['formClienteContato2'],
            'email' => $post['formClienteEmail'],
            'senha' => $post['formClienteSenha']
        );
        $this->setSelect($post['formUp']);
        $upCol = array();
        $upCliente = array('id_cliente' => $post['formUp']);
        foreach ($this->selectCliente as $col => $vlrBD) {
            if ($formCliente[$col] != $vlrBD) {
                $upCol[] = "$col=:$col";
                $upCliente[$col] = $formCliente[$col];
            }
        }
        if (count($upCol) > 0) {
            $query = $this->stmt->prepare("UPDATE cliente SET " . implode(',', $upCol) . " WHERE id_cliente=:id_cliente");
            $query->execute($upCliente);
            $this->updateCliente = $query->rowCount();
        } else {
            $this->updateCliente = 0;
        }
    }

}
