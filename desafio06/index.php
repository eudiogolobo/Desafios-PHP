<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Divisão</title>
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <h5>*Desafio 06</h5>
        <h1>Anatomia de uma Divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="get">

        <label for="dividendo">Dividendo</label>
        <input type="number" name="dividendo" value="<?=$dividendo?>">
        <label for="divisor">Divisor</label>
        <input type="number" name="divisor" value="<?=$divisor?>">
        <input type="submit">

    </form>
    <button onclick=" window.location.href = '../index.html'">Voltar</button>
</main>

 <?php 
    if($dividendo != null && $divisor != null && $divisor != 0 && $dividendo != 0)
    {
        $resto = $dividendo % $divisor;

        $cosciente = intdiv($dividendo, $divisor);


        echo"<main><h1>Resultado</h1>";
        echo"<p>Dividendo <b>". $dividendo ."</b></p>";
        echo"<p>Divisor <b>". $divisor ."</b></p>";
        echo"<p>Cosciente <b>". $cosciente ."</b></p>";
        echo"<p>Resto <b><u>". $resto ."</u></b></p>";

        echo"</main>";
    }
 ?>
</body>
</html>