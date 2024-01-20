<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Conversor 2.0</title>
</head>
<body>
<main>
        <div>
            <form action="index.php" method="get">
                <h1>Conversor de Moedas v2.0</h1>
                <label for="reais">Quantos R$ você tem na carteira?</label>
                <input type="number" name="numero" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                <input type="submit" value="Converter">
            

            <?php 
                $numero = $_GET['numero'] ?? 0;
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-13-2024\'&@dataFinalCotacao=\'01-20-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);
            
                $cotacao = $dados['value'][0]['cotacaoCompra'];



                if($numero != 0 & $numero != null)
                {
                    $numero = $numero/$cotacao;
                    

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h1>Resultado</h1>" ;
                    // echo "<p>Sua carteira em Dólar Americano é de <b>US$ ". number_format($numero,2,',','.') .".</b></p>" ;
                    echo "<p>Sua carteira em Dólar Americano é de: <b>". numfmt_format_currency($padrao, $numero,"USD") ."</b></p>" ;

                    echo "<H5>*Cotação de acordo com o Banco Central Do Brasil</H5>" ;

                }
                
            ?>
        </form>
            
        </div>
    </main>
</body>
</html>