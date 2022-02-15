<?php

require_once 'conexao.php';
require_once 'crud/crud.php';


$conexao = conectar();

$idItem = $_GET['id'];

$resultado = exibirItem($conexao,$idItem);

$item = mysqli_fetch_assoc($resultado);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
</head>
<body>
<body>
<div class="container">
<?php include 'header.php' ?>
<section class="bloco-coluna">

<form method="POST" action="atualizarItem.php" enctype="multipart/form-data">
<input type="hidden" value="<?= $item['idItem']?>" name="idItem">

<label for="novoNome">Nome do item:</label>
<input type="text" id="novoNome" value="<?= $item['nomeItem']?>" name="novoNome">

<label for="novoImg">Capa imagem do item:</label>
<input type="file" id="novoImg" value="<?= $item['imgItem']?>" name="novoImg">

<label for="novoValor">Valor(R$) do item:</label>
<input type="number" id="novoValor" value="<?= $item['valorItem']?>" name="novoValor">

<label for="novaDescri">Descrição do item:</label>
<input type="textarea" id="novaDescri" value="<?= $item['descriItem']?>" name="novaDescri">

<label for="novoLocal">Local(Cidade/Região) do item:</label>
<input type="text" id="novoLocal" value="<?= $item['localItem']?>" name="novoLocal">

<button type="submit" id="botao">Cadastrar</button>

</form>

</section>
</div>
<?php include 'footer.php' ?>
</body>
</html>