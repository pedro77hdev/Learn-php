<?php

    session_start();

    echo "Bem vindo";


    $_SESSION['cor'] = "vermelho  ";
    $_SESSION['animal'] = 'cachorro';
    $_SESSION['data'] = time();

    echo '<br> 
    <a href="index2.php">
        pagina 2
    </a>';

?>