<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
    <?php include 'header.php' ?>
<section class="bloco-coluna">

<form method="POST" action="salvarItem.php" enctype="multipart/form-data">

<label for="nomeItem">Nome do item:</label>
<input type="text" id="nomeItem" name="nomeItem">

<label for="imgItem">Capa imagem do item:</label>
<input type="file" id="imgItem" name="imgItem">

<label for="valorItem">Valor(R$) do item:</label>
<input type="number" id="valorItem" name="valorItem">

<label for="descriItem">Descrição do item:</label>
<input type="textarea" id="descriItem" name="descriItem">

<label for="localItem">Local(Cidade/Região) do item:</label>
<input type="text" id="localItem" name="localItem">

<button type="submit" id="botao">Cadastrar</button>

</form>

</section>
</div>
<?php include 'footer.php' ?>
</body>
</html>