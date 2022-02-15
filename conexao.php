<?php

function conectar () {
    $conexao = mysqli_connect("localhost","root","","test");
    return $conexao;
}


?>