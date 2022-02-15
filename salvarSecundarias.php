<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();

$idItem = $_POST['idItem'];

$replacement = "";
$pattern = "/[A-Za-z\-]+/";
$idItem = preg_replace($pattern,$replacement,$idItem);

$secundariasItem = $_POST['secundariasItem'];

$secundariasItem = implode(";",$secundariasItem);

echo $secundariasItem;

$resultado = adicionarSecundarias($conexao,$secundariasItem,$idItem);

if($resultado) {
    echo "Item adicionado";

}else{
    echo "Item não adicionado";

}

echo "<br> <a href='admin.php'>Voltar</a>";








?>