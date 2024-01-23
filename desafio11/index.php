<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Reajuste</title>
</head>
<body>
    <?php 
        $percentual = $_GET['percentual'] ?? 0;
        $preco = $_GET['preco'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" step="00.01" name="preco" value="<?=$preco?>">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="percentualId">?%</span></strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" value="<?=$percentual?>" oninput="valorPercentual()">
            <input type="submit">
        </form>
    </main>
    <script>
        valorPercentual();
        // Declarações automáticas
        function valorPercentual(){
            
            percentualId.innerText = percentual.value+"%";
        }
    </script>

    <?php 
    if($preco != null && $percentual != null && $preco != 0 && $percentual != 0)
    {
        $total = $preco * (1.00+($percentual/100));
        $padrao = numfmt_create("pt-BR",NumberFormatter::CURRENCY);
        echo"<main><h2>Resultado do Reajuste</h2>";
        echo "<p>O produto que custava ". numfmt_format_currency($padrao, $preco, "BRL") ."  com <Strong>$percentual% de aumento</Strong> vai passar a custar<Strong> ". numfmt_format_currency($padrao, $total, "BRL") ."</Strong> a partir de agora.</p>";

    }
    ?>


    
</body>
</html>