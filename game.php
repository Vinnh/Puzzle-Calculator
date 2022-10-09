<?php
    $op = $_GET['operacao'];
    $n1 = rand(1, 99);
    $n2 = rand(1, 99);

    
    switch ($op)
    {
        case 'soma':
            $op = '+';
            break;
        
        case 'sub':
            $op = '-';
            break;
        
        case 'mult':
            $op = 'x';
            break;
        
        default:
            $op = '/';
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Calculator</title>
    <link rel="stylesheet" href="gamestyle.css">
</head>
<body>

    <main>
        <h1><span>P</span>uzzle <span>C</span>alculator</h1>

        <div class="container">
        <div class="partida">
            <div class="numeros">
                <span><?php echo $n1;?></span>
                <span><?php echo $op;?></span>
                <span><?php echo $n2;?></span>
            </div>
        </div>

        <div class="resultado">
            <form method="POST" action="/resultado.php?n1=<?=$n1?>&n2=<?=$n2?>&op=<?=$_GET['operacao']?>">
                <legend>Resposta</legend>

                <input class="form" type="text" name="resposta">
                <button class="btn" type="submit">Submeter</button>
            </form>
        </div> 

        </div>

        <div class="op">
        <a href="index.html">voltar</a>            
        </div>


    </main>
    
</body>
</html>