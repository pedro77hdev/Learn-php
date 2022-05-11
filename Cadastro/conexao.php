<?php

$server = "localhost";
$user = "root";
$password = "";
$bd = "cadastro_php";

$conexaobd = mysqli_connect($server , $user, $password , $bd);

if(!$conexaobd) {

    echo "not connected";
}

else {

    echo "connected";

}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];


$sql = mysqli_query($conexaobd, "INSERT INTO user(nome ,sobrenome) VALUES('$nome' , '$sobrenome')");

if ($sql) {
    header("location: arquivo.php");
}

?>