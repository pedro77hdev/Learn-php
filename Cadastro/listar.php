<?php

include "conexao.php";
include 'listarBD.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
   <h1>Lista De Dados</h1> 
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
    </tr>
  </thead>

  <?php while($usuario = mysqli_fetch_assoc($list)){ ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $usuario['id'];?></th>
      <td><?php echo $usuario['nome']?></td>
      <td><?php echo $usuario['sobrenome']?></td>
      
    </tr>
    <!-- <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr> -->

    <?php } ?>

  </tbody>

     

</table>
    
</body>
</html>