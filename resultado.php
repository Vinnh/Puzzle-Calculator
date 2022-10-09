<?php

  $n1 = $_GET['n1'];
  $n2 = $_GET['n2'];
  $op = $_GET['op'];
  $resposta = $_POST['resposta'];


  if ($op == "soma"){
      $resultado = $n1 + $n2;
  }
  else if ($op== 'sub'){
      $resultado = $n1 - $n2;
  }
  else if ($op== 'mult'){
      $resultado = $n1 * $n2;
  }
  else{
      $resultado = $n1 / $n2;
  }

  $acertou = $resultado == $resposta;



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>puzzle calculator</title>
    <link rel="stylesheet" href="gamestyle.css">
</head>
<body>
    <?php if($acertou){ ?>
    <div class="resultado">
        <img src="https://i0.wp.com/abes-dn.org.br/wp-content/uploads/2022/05/quality-g096c0fb43_1920.png?fit=1200%2C1200&ssl=1" alt="deu certo!">
        <h1>Parabéns, Você acertou!</h1>
        <a href="index.html">jogue novamente</a>
    </div>
    <?php } else { ?>
    <div class="resultado">
        <img src="https://imagensemoldes.com.br/wp-content/uploads/2020/08/Imagem-X-Vermelho-PNG-1015x1024.png" alt="deu ruim!">
        <h1>Que pena, Você errou!</h1>
        <a href="index.html">Tentar Novamente</a>
    </div>
    <?php } ?>
</body>
</html>