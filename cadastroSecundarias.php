<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();

$resultado = exibirItens($conexao);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de imagens secundárias</title>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">

<section class="bloco-coluna">

<form method="POST" action="salvarSecundarias.php">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<label for="secundariasItem">Imagens complementares:</label>
<input type="file" id="secundariasItem" name="secundariasItem[]">

<select name="idItem" id="idItem">
    <?php while($item = mysqli_fetch_assoc($resultado)) {
        echo "<option>" . $item['idItem'] . " - " . $item['nomeItem'] . "</option>";
    } ?>
</select>



<button type="submit" id="botao">Cadastrar</button>

</form>

</section>



</div>


<?php include 'footer.php' ?>   
</body>
</html>