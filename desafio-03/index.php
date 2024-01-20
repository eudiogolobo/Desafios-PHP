<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div>
            <form action="index.php" method="get">
                <h1>Conversor de Moedas v1.0</h1>
                <label for="reais">Quantos R$ você tem na carteira?</label>
                <input type="number" name="numero"  min="0" step="0.001">
                <input type="submit" value="Converter">
            

            <?php 
                $numero = $_GET['numero'] ?? 0;
                if($numero != 0 & $numero != null)
                {
                    $numero = $numero/4.92;
                    

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h1>Resultado</h1>" ;
                    // echo "<p>Sua carteira em Dólar Americano é de <b>US$ ". number_format($numero,2,',','.') .".</b></p>" ;
                    echo "<p>Sua carteira em Dólar Americano é de: <b>". numfmt_format_currency($padrao, $numero,"USD") ."</b></p>" ;
                    echo "<H5>*Cotação de acordo com o valor colocado direto no meu código</H5>" ;

                }
                
            ?>
        </form>
            
        </div>
    </main>
</body>
</html>