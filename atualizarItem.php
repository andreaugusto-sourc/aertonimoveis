<?php

require_once 'conexao.php';
require_once 'crud/crud.php';

$conexao = conectar();

$idItem = $_POST['idItem'];

$novoNome = $_POST['novoNome'];

if (isset($_FILES["novoImg"])) {
    $imagem = $_FILES["novoImg"];

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
$novoImg = $novoCaminho ."." . $extensao;

$novoValor = $_POST['novoValor'];

$novaDescri = $_POST['novaDescri'];

$novoLocal = $_POST['novoLocal'];


$resultado = atualizarItem($conexao,$idItem,$novoNome,$novoImg,$novoValor,$novaDescri,$novoLocal);

if($resultado) {
    echo "Item atualizado";

}else{
    echo "Item não atualizado";

}

echo "<br> <a href='admin.php'>Voltar</a>";
?>