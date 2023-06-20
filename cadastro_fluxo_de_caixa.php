<?php
    include("conexao.php");
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];

    echo "Id: <br>Data: $data<br>Tipo: $tipo<br>Valor: $valor<br>Histórico: $historico<br>";

    $sql = "INSERT INTO fluxo_caixa (id, data, tipo, valor, historico) VALUES ('".$id."','".$data."','".$tipo."','".$valor."','".$historico."')";

    echo $sql."<br>";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados cadastrados com sucesso!";
    }else{
        echo "Erro ao tentar cadastrar!";
    }

?>