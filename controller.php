<?php

require_once './system/adm/configBd.php';
require_once './system/adm/configPage.php';

$configPage = new ConfigPage();

if (isset($_GET['page'])) {

    $classPage = 'Tbl' . ucfirst($_GET['page']);
    $ln = null;
    $col = null;

    spl_autoload_register(function($class_name) {
        require_once './system/adm/' . $class_name . '.php';
    });

    $bdMb = new $classPage();

    if (isset($_POST['formSave'])) {
        $bdMb->setInsert($_POST);
    }

    if (isset($_GET['menup']) && $_GET['subp'] == 'edit') {
        $bdMb->setSelect($_GET['editUsu']);
        $editConsulta = $bdMb->getSelect();
    }

    if (isset($_GET['menup']) && $_GET['menup'] == 'consulta') {
        $bdMb->setSelect();
        $listConsulta = $bdMb->getSelect();
    }

    if (isset($_POST['formUp'])) {
        $bdMb->setUpdate($_POST);
        if ($bdMb->getUpdate() > 0) {
            $upHeader = true;
        }
    }

    if (isset($_GET['menup']) && $_GET['menup'] == 'cadHospedagem') {
        $bdMb->setSelect(NULL, true); // Selecionar todos os aposentos
        $listAposento = $bdMb->getSelect();
        $listCliente = $bdMb->getSelectCliente();
        $listFuncionario = $bdMb->getSelectFuncionario();

        if (isset($_POST['formSaveHosp'])) {
            $bdMb->setInsertHospedagem($_POST['formHospAposento'], $_POST['formHospCliente'], $_POST['formHospDtEntrada']);
        }
    }

    if (isset($_GET['menup']) && $_GET['menup'] == 'conHospedagem') {
        if (isset($_POST['pesqHosp'])) {
            $bdMb->setSelectHospedagem($_POST['tipoPesquisa'], $_POST['descTipoPesquisa']);
        } else {
            $bdMb->setSelectHospedagem();
        }
        $listHospedagem = $bdMb->getSelectHospedagem();
    }
}

