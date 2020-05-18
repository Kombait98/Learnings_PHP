<?php

class ConfigBd {

    private $conecta;

    function __construct() {
        $dns = "mysql:host=localhost;dbname=tbls_mb";
        $usuario = "root"; // usuário
        $senha = "ifpa@123";
        try {
            $con = new PDO($dns, $usuario, $senha);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conecta = $con;
        } catch (PDOException $e) {
            $conecta = $e->getMessage();
            print($conecta);
        }
        return $conecta;
    }

    public function setConecta() {
        $this->conecta;
    }

    public function dtBr($data, $dtBr = false, $hr = false) { // 31/03/1988 -> 1988-03-31
        if (!$dtBr) { // $dtBr == false => Formato do banco de dados
            $dt = explode("/", $data);
            $dtResult = implode("-", array_reverse($dt));
        } else { // Formato para visualização
            $dtHr = explode(" ", $data); // 2020-03-31 18:22:44
            $dt = explode("-", $dtHr[0]);
            $dtResult = implode("/", array_reverse($dt));
            if ($hr) {
                $dtResult .= " {$dtHr[1]}";
            }
        }
        return $dtResult;
    }

}

//$stmt = $con->prepare("INSERT INTO pessoa(nome, email) VALUES(?, ?)");
//$stmt->bindParam(1,”Nome da Pessoa”);
//$stmt->bindParam(2,”email@email.com”);
//$stmt->execute();

//try {
//    $conn = new PDO($dsn, $user, $password);

//} catch (PDOException $e) {
//    echo $e->getMessage();
//}