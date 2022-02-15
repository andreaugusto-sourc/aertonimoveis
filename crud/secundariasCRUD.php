<?php

function adicionarSecundarias ($conexao,$secundariasItem,$idItem) {

    $comando = "INSERT INTO secundarias (secundariasItem,idItem) values ('$secundariasItem','$idItem')";

    $resultado = mysqli_query($conexao,$comando);
    return $resultado;

}

function deletarSecundarias ($conexao,$idSecundaria) {

    $comando = "DELETE FROM secundarias where idSecundaria = '$idSecundaria' ";

    $resultado = mysqli_query($conexao,$comando);

    return $resultado;
}

function exibirSecundarias ($conexao) {

    $comando = "SELECT * FROM secundarias";

    $resultado = mysqli_query($conexao,$comando);

    return $resultado;
}
function exibirSecundaria ($conexao,$idSecundaria) {

    $comando = "SELECT * FROM secundarias where idSecundaria = '$idSecundaria'";

    $resultado = mysqli_query($conexao,$comando);

    return $resultado;
}







?>