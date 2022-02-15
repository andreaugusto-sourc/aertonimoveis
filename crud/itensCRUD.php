<?php

function adicionarItem ($conexao,$nomeItem,$imgItem,$valorItem,$descriItem,$localItem) {
    
    $comando = "INSERT INTO itens (nomeItem,imgItem,valorItem,descriItem,localItem) values ('$nomeItem','$imgItem','$valorItem','$descriItem','$localItem')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}
function atualizarItem($conexao,$idItem,$novoNome,$novoImg,$novoValor,$novaDescri,$novoLocal) {

    $comando = "UPDATE itens SET nomeItem = '$novoNome', imgItem = '$novoImg', valorItem = '$novoValor', descriItem = '$novaDescri',localItem = '$novoLocal' where idItem = '$idItem' ";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}
function exibirItens ($conexao) {
    
    $comando = "SELECT * FROM itens";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
    

}
function exibirItem ($conexao,$idItem) {
    
    $comando = "SELECT * FROM itens where idItem = '$idItem' ";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
    

}

function deletarItem ($conexao,$idItem) {

    $comando = "DELETE FROM itens where idItem = '$idItem'";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
}






?>