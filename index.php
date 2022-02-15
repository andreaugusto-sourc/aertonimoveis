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
    <title>Index</title>
</head>
<body>

<div class="container">

<?php include 'header.php' ?>

<section class="bloco-flex">
<?php while ($linha = mysqli_fetch_assoc($resultado)) : ?>

<div class="item">

<div class="item-texto">

<div class="caixa-img">
      
<a href="maisImagens.php?id=<?= $linha['idItem']?>"><img src="images/<?= $linha['imgItem']?> "></a>     
          
</div>

<a><strong>Tipo:</strong>  <?= $linha['nomeItem'] ?> </a>
<a id="descriItem"><strong>Descrição:</strong> <?= $linha['descriItem'] ?></a>
<a id="item-valor"><strong>Valor proposto:</strong> R$ <?= $linha['valorItem'] ?> </a>
<a><strong>Localidade:</strong> <?= $linha['localItem']?></a>

</div>

<div class="caixa-contato">

<ion-icon class="icon" name="arrow-forward-outline"></ion-icon>
<a id="contatar" href="maisImagens.php?id=<?= $linha['idItem']?>">Mais imagens</a>


</div>


</div>


<?php endwhile ?>    
</section>
</div>

<?php include 'footer.php' ?>
    
</body>
</html>