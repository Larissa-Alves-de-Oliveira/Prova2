<?php
    include("conexao.php");

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $cheque = $_POST['c'];
    $historico = $_POST['historico'];

    echo "Id: $id<br>Data: $data<br>Tipo: $tipo<br>Valor: $valor<br>Cheque: $cheque<br>Histórico: $historico<br>";

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, cheque, historico) VALUES ('".$data."','".$tipo."','".$valor."','".$cheque."','".$historico."')";

    echo $sql."<br>";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados cadastrados com sucesso!";
    }else{
        echo "Erro ao tentar cadastrar!";
    }

?>