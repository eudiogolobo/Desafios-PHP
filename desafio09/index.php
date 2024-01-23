<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Média</title>
</head>
<body>

        <?php 

            $valor01 = $_GET['valor01'] ?? 0;
            $peso01 = $_GET['peso01'] ?? 0;
            $valor02 = $_GET['valor02'] ?? 0;          
            $peso02 = $_GET['peso02'] ?? 0;
        ?>
        <main>
            <h5>*Desafio 09</h5>
        <h1>Médias Aritmétricas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor01">1° Valor</label>
            <input type="number" name="valor01" value="<?=$valor01?>" step="00.01" min="0" >
            <label for="peso01">1° Peso</label>
            <input type="number" name="peso01" value="<?=$peso01?>" step="00.01" min="0">

            <label for="valor02">2° Valor</label>
            <input type="number" name="valor02" value="<?=$valor02?>" step="00.01" min="0" >
            <label for="peso02">2° Peso</label>
            <input type="number" name="peso02" value="<?=$peso02?>" step="00.01" min="0">

            <input type="submit">
    
        </form>
        <button onclick="window.location.href = '../index.html'">Voltar</button>
    </main>

    <?php 
    if($valor01 != 0 && $valor01 != null && $valor02 != 0 && $valor02 != null && $peso01 != 0 && $peso01 != null && $peso02 != 0 && $peso02 != null)
    {
        echo "<main><h2>Cálculo da Médias</h2>";
        echo "<p>Analisando os valores $valor01 e $valor02:</p>";
        echo"<ul><li>A <b>Média Aritmétrica Simples</b> entre os valores é igual a ". number_format(($valor01+$valor02)/2, 2,',','.') ."</li></ul>";
        echo"<ul><li>A <b>Média Aritmétrica Ponderada</b> com pesos $peso01 e $peso02 é igual a ". number_format((($valor01*$peso01)+($valor02 * $peso02))/($peso01+$peso02), 2,',','.') ."</li></ul>";
    }
    ?>
</body>
</html>