<?php

session_start();

echo 'Bem vindo a segunda pagina  <br>';

echo $_SESSION['cor'];
echo $_SESSION['animal'] , '<br>';

echo date('y m d H:i:s' , $_SESSION['data']);

echo '<br> <a href="index.php">Voltar</a>';

?>