<?php
    include('conexao.php');

    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
     //Recebendo valores do campo formulário
    $cheque = $_POST['cheque'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];

    echo "<h1>Alteração de dados</h1>";
    echo "<p>Usuário: $nome</p>";
    $sql = "UPDATE usuario SET
            id='$id',
            data='$data',  
            tipo='$tipo',
            cheque='$cheque',
            valor='$valor',
            historico='$historico',
            WHERE id=$id"; 
            //Comando que funciona apenas no banco de dados
    echo $sql;
    $result = mysqli_query($con,$sql); //Envia as informações para o banco de dados
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: $msqli_erro($con)"
?>
<a href="index.php">Voltar</a>