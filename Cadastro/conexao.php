<?php

$server = "localhost";
$user = "root";
$password = "";
$bd = "cadastro_php";

$conexaobd = mysqli_connect($server , $user, $password , $bd);

if(!$conexaobd) {

    echo "not connected";
}




?>