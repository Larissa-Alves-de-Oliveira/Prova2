<?php
    include('conexao.php');
    $id = $_GET['id'];
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
    <title>Alterar</title>
</head>
<body>
    <form action="altera_fluxo_caixa_exe.php" method="post">
        <fieldset>
            <legend>Cadastro </legend>
            <input name="id" type="hidden"
                value="<?php echo $row['id'] ?>">
            <div>
                <label for="data">Data:</label>
    
                <input type="date" name="data" id="data"
                value="<?php echo $row['data']?>">
            </div>
            <div>
                <label for="tipo">Tipo:</label>
    
                <input type="radius" name="tipo" id="tipo"
                value="<?php echo $row['tipo']?>">
            </div>
            <div>
                <label for="valor">Valor:</label>
    
                <input type="number" step=".01" name="valor" id="valor"
                value="<?php echo $row['valor']?>">
            </div>
            <div>
                <label for="historico">Historico:</label>
    
                <input type="text" name="historico" id="historico"
                value="<?php echo $row['historico']?>">
            </div>
            <label for="cheque">Cheque:</label><br>

            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</body>
</html>