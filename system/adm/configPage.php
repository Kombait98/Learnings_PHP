<?php

class configPage {

    private $linkMenu;

    function getLinkMenu() {
        return $this->linkMenu;
    }

    function setLinkMenu($page, $subp = null, $menup = null, $pageAcao = null, $acao = null, $usu = null) {
        $linkSubp = !empty($subp) ? "&subp=$subp" : null;
        $linkMenup = !empty($menup) ? "&menup=$menup" : null;
        $linkPageAcao = !empty($pageAcao) ? "&$pageAcao=$acao" : null;
        $linkUsu = !empty($usu) ? "&usid=$usu" : null;
        $link = "?page=$page" . $linkSubp . $linkMenup . $linkPageAcao . $linkUsu;
        return $link;
    }

    function nomeSobrenome($nomeCompleto) {
        $arrayNome = explode(" ", $nomeCompleto);
        $nome = $arrayNome[0];
        $sobrenome = end($arrayNome);
        return $nome . " " . $sobrenome;
    }

    function numDiaria($dtEntrada, $vlrDiaria = false) {
        $dtAtual = date('Ymd');
        $dtEntFormat = date("Ymd", strtotime($dtEntrada));
        $nDiaria = (strtotime($dtAtual) - strtotime($dtEntFormat)) / 86400; // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
        $numDiaria = $nDiaria < 0 ? 0 : $nDiaria;
        if($vlrDiaria != false){
            $numDiaria *= $vlrDiaria;
        }
        return $numDiaria;
    }

}
