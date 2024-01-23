<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Raizes</title>
</head>
<body>

<?php 
    $numero = $_GET['numero'] ?? 0;
?>

<main>
    <h5>*Desafio 08</h5>
<h1>Informe um Número</h1>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="get">

    <label for="numero">Número</label>
    <input type="number" name="numero" value="<?=$numero?>">
    <input type="submit">
    </form>
    <button onclick="window.location.href = '../index.html'">Voltar</button>
    </main>
    

    <?php 
    if($numero != null && $numero != 0)
    {
        $raizQuadrada = sqrt($numero);
        $raizCubica = pow($numero, 1/3);

        echo"<main><h1>Resultado Final</h1>";
        echo"<p>Analisando o número <b>$numero</b>, temos:</p>";
        echo"<ul><li>A sua raiz quadrada é <b>". number_format($raizQuadrada,3,',','.') ."</b>.</li></ul>";
        echo"<ul><li>A sua raiz cúbica é <b>". number_format($raizCubica,3,',','.') ."</b>.</li></ul>";
    }
    ?>
</body>
</html>