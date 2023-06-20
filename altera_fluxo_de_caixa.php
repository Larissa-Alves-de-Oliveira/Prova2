<?php
    include('conexao.php');
    $id= $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar fluxo de caixa</title>
</head>
<body>
    <form action="altera_fluxo_de_caixa_exe.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Cadastro fluxo - IFSP</legend>
            <input name="id" type="hidden"
                value="<?php echo $row['id'] ?>">;
            <div>
                <label for="data">Data:</label>
    
                <input type="date" name="data" id="data"
                value="<?php echo $row['data']?>">
            </div>
            <div>
                <label for="tipo">Tipo:</label>
    
                <input type="tipo" name="tipo" id="tipo"
                value="<?php echo $row['tipo']?>">
            </div>
            <div>
                <label for="valor">Valor:</label>
    
                <input type="valor" name="valor" id="valor"
                value="<?php echo $row['valor']?>">
            </div>
            <div>
                <label for="historico">Histórico:</label>
    
                <input type="historico" name="historico" id="historico"
                value="<?php echo $row['historico']?>">
            </div>
            <div>
                <label for="cheque">Cheque:</label>
    
                <input type="text" name="cheque" id="cheque"
                value="<?php echo $row['cheque']?>">
            </div>
        </fieldset>
    </form>
</body>
</html>
