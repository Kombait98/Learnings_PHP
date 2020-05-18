<?php

class TblAposento extends ConfigBd {

    private $stmt;
    private $insertAposento;
    private $insertHospedagem;
    private $selectAposento;
    private $selectCliente;
    private $selectFuncionario;
    private $selectHospedagem;
    private $selectPesqHosp;

    public function __construct() {
        $this->stmt = parent::__construct();
    }

    function getInsert() {
        return $this->insertAposento;
    }

    function setInsert($post) {
        $insertAposento = array($post['formAposentoTipo'], $post['formAposentoValor'], $post['formAposentoDesc'], $post['formAposentoNum']);
        $query = $this->stmt->prepare("INSERT INTO aposento(tipo_aposento,vlr,descricao,numero) VALUES(?, ?, ?, ?)");
        $result = $query->execute($insertAposento);
        $this->insertAposento = $result;
    }

    function getSelect() {
        return $this->selectAposento;
    }

    function setSelect($idAposento = NULL, $hospedagem = false) {
        if (!empty($idAposento)) {
            $this->selectAposento = NULL;
        } else {
            $this->selectAposento = $this->stmt->query("SELECT * FROM aposento;")->fetchALL();
            if ($hospedagem == true) {
                $this->setSelectCliente();
                $this->setSelectFuncionario();
            }
        }
    }

    function getSelectCliente() {
        return $this->selectCliente;
    }

    function setSelectCliente() {
        $this->selectCliente = $this->stmt->query("SELECT id_cliente, nome, cpf FROM cliente ORDER BY nome ASC;")->fetchALL();
    }

    function getSelectFuncionario() {
        return $this->selectFuncionario;
    }

    function setSelectFuncionario() {
        $this->selectFuncionario = $this->stmt->query("SELECT id_funcionario, nome FROM funcionario ORDER BY nome ASC;")->fetchALL();
    }

    function getInsertHospedagem() {
        return $this->insertHospedagem;
    }

    function setInsertHospedagem($idAposento, $idCliente, $dtEntrada) {
        $insertHospedagem = array($idAposento, $idCliente, $this->dtBr($dtEntrada) . " " . date('H:i:s'));
        $query = $this->stmt->prepare("INSERT INTO hospedagem (id_aposento, id_cliente, dt_entrada) VALUES(?, ?, ?)");
        $result = $query->execute($insertHospedagem);
        $this->insertHospedagem = $result;
    }

    function getSelectHospedagem() {
        return $this->selectHospedagem;
    }

    function setSelectHospedagem($tipoPesquisa = null, $descTipoPesquisa = null) {
        $selectUnique = "";
        if (!empty($tipoPesquisa) && !empty($descTipoPesquisa)) {
            $arrayTipoPesquisa = array(
                'na' => "a.numero = $descTipoPesquisa",
                'cm' => "c.nome LIKE '%$descTipoPesquisa%'",
                'de' => "h.dt_entrada = '{$this->dtBr($descTipoPesquisa)}'"
            );
            $selectUnique = "AND $arrayTipoPesquisa[$tipoPesquisa]";
        }
        $this->selectHospedagem = $this->stmt->query(
                        "SELECT h.*, a.numero num_ap, a.tipo_aposento tipo_ap, a.vlr vlr_ap, c.nome cli_nome " .
                        "FROM hospedagem h, aposento a, cliente c " .
                        "WHERE h.id_aposento=a.id_aposento AND h.id_cliente=c.id_cliente $selectUnique;"
                )->fetchALL();
    }

    function getSelectPesqHosp() {
        return $this->selectPesqHosp;
    }

    function setSelectPesqHosp($selectPesqHosp) {
        $this->selectPesqHosp = $selectPesqHosp;
    }

}
