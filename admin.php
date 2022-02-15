<?php


require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();



if (isset($_GET['modo'])) {
    if ($_GET['modo'] == "itens") {
      $modo = "itens";
      $resultado = exibirItens($conexao);
    
    }else if($_GET['modo'] == "secundarias") {
      $modo = "secundarias";
      $resultado = exibirSecundarias($conexao);
  
    }
  }else {
    $modo = "";
  }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

<div class="container">

<?php include 'header.php' ?>

<main class="bloco-flex">

<div id="aba">

<a href="cadastroItem.php">Adicionar Item</a>
<a href="admin.php?modo=itens">Todos Itens</a>
<aside></aside>
<a href="cadastroSecundarias.php">Adicionar Secundárias</a>
<a href="admin.php?modo=secundarias">Todas Secundárias</a>

</div>

<section class="bloco-coluna">

<?php if($modo == "itens") { ?>

<?php while($linha = mysqli_fetch_assoc($resultado)) : ?>

<div class="bloco-linha">

<img src="images/<?= $linha['imgItem']?>" class="linha-img">
<a class="linha-nome" href=""><?= $linha['nomeItem']?></a>
<a href="deletar.php?id=<?= $linha['idItem']?>">Deletar</a>
<a href="editar.php?id=<?= $linha['idItem']?>">Editar</a>

</div>

<?php endwhile ?>


<?php }elseif($modo == "secundarias") { ?>

<?php while($linha = mysqli_fetch_assoc($resultado)) : ?>

<div class="bloco-linha">

<a class="linha-nome" href=""><?= $linha['idItem']?></a>
<a href="deletar.php?id=<?= $linha['idItem']?>">Deletar</a>
<a href="editar.php?id=<?= $linha['idItem']?>">Editar</a>

</div>

<?php endwhile ?>


<?php }else{
    echo "<h1>Nenhuma tabela de dados selecionada!</h1>";
} ?>
</section>


</main>

</div>

<?php include 'footer.php' ?>
    
</body>
</html>