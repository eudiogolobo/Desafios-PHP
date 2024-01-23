<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Salário</title>
</head>
<body>

<main>
    <?php 
    $salario = $_GET['salario'] ?? 0;
    ?>
    <h5>*Desafio 07</h5>
    <h1>Informe Seu Salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="salario">Salário (R$)</label>
        <input type="number" step="00.01" name="salario" value="<?=$salario?>">
        <h5>*Considerando o salário mínimo de <b>R$1.380,00</b></h5>
        <input type="submit">

    </form>
    <button onclick="window.location.href = '../index.html'">Voltar</button>
</main>

 <?php 
    if($salario != null && $salario != 0)
    {
        $resto = $salario % 1380;
        $qtdSalarios = intdiv($salario,1380);
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo"<main><h1>Resultado</h1>";
        echo"<p>Quem recebe um salário de ". numfmt_format_currency($padrao,$salario,"BRL") ." ganha</p>";
        echo "<p><b>$qtdSalarios salários mínimos + ". numfmt_format_currency($padrao, $resto,"BRL") ."</b>.</p>";
        echo"</main>";
    }
 ?>
    
</body>
</html>