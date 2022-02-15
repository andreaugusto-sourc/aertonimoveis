<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();
$idItem = $_GET['id'];

$resultado2 = deletarSecundarias($conexao,$idItem);
$resultado = deletarItem($conexao,$idItem);

if($resultado) {
    echo "Deletado com sucesso.";
}else {
    echo "Não deletado com sucesso!";
}
echo "<br> <a href='index.php'>Voltar</a>";




?>