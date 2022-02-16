<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();
$idItem = $_GET['id'];

$item = exibirItem($conexao,$idItem);
$item = mysqli_fetch_assoc($item);

$resultado = exibirSecundaria($conexao,$idItem);

$secundarias = mysqli_fetch_assoc($resultado);

$imagens = explode(";",$secundarias['secundariasItem']);

$count = count($imagens);

$count = $count-1
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mais imagens</title>
</head>
<body>
<div class="container">
<?php include 'header.php' ?>

<main id="bloco-carousel" class="bloco-flex">

<div class="carousel">

<ion-icon class="icon-carousel" id="voltar" name="chevron-back-outline"></ion-icon>
<section>

<img src="images/<?= $item['imgItem']?>">
<?php 

 for($i = 0; $i < count($imagens); $i++) {
     echo "<img src='images/$imagens[$i]' class='off'>";
 }

?>
</section>
<ion-icon class="icon-carousel" id="avancar" name="chevron-forward-outline"></ion-icon>

</div>

<div class="info">

<p><strong>Tipo: </strong><?= $item['nomeItem']?></p>
<p><strong>Descrição: </strong><?= $item['descriItem']?></p>
<p><strong>Valor proposto: </strong>R$ <?= $item['valorItem']?></p>
<p><strong>Localidade: </strong><?= $item['localItem']?></p>

<div class="caixa-contato2">

<ion-icon class="icon" name="logo-whatsapp"></ion-icon>
<a id="contatar" target="blank" href="https://wa.me/qr/RDEJYI57XBPXK1">Contatar</a>


</div>
<p id="ouLigue"><strong>Ou ligue: </strong> (15) 99761-0116</p>
</div>


</main>
<a id="marcador"></a>
</div>

<input type="hidden" value="<?= $count;?>" id="count">
<script src="js/carousel.js"></script>

<?php include 'footer.php'?>

    
</body>
</html>