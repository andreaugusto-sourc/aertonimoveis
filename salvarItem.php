<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();

$nomeItem = $_POST['nomeItem'];

if (isset($_FILES["imgItem"])) {
    $imagem = $_FILES["imgItem"];

    if ($imagem['size'] > 4003269) {
        die("arquivo muito grande! Máximo de 3MB");
    }

    if($imagem['error']) {
        die("Falha ao enviar o arquivo.");
    }
    $diretorio = "images/";

    $imagemCaminho = $imagem['name'];

    $novoCaminho = uniqid();

    $extensao = strtolower(pathinfo($imagemCaminho,PATHINFO_EXTENSION));
    if ($extensao !=  "jpg" && $extensao != 'png' && $extensao != "webp" ) {
        die("Tipo de arquivo inválido!");
    }

    $alocacao = move_uploaded_file($imagem["tmp_name"], $diretorio . $novoCaminho . "." . $extensao);
    if($alocacao) {
        echo "Sucesso";
        echo "<br> <a href=\"images/$novoCaminho.$extensao\">Ver</a> ";
        
    
    }else{
        echo " Falha";
    }
    
}
$imgItem = $novoCaminho ."." . $extensao;



$valorItem = $_POST['valorItem'];

$descriItem = $_POST['descriItem'];

$localItem = $_POST['localItem'];


$resultado = adicionarItem($conexao,$nomeItem,$imgItem,$valorItem,$descriItem,$localItem);


if($resultado) {
    echo "Item adicionado";

}else{
    echo "Item não adicionado";

}

echo "<br> <a href='admin.php'>Voltar</a>";


?>