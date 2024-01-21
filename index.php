<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Desafios</title>
</head>
<body>
    <main>
        <div>
            <h1>Desafios Curso em Vídeo</h1>
        </div>
    </main>

    <main>
        <div>
            <h5>*Desafio 01</h5>
            <h1>Informe um Número</h1>

        
                <form action="index.php" method="get">
                    
                    <label for="numero">Digite um número</label>
                    <input type="text" name="numero" placeholder="Digite um número...">
                    <input type="submit" value="Mostrar">
                
                    
                        <?php 
                            $numero = $_GET['numero'] ?? 0;
                            if($numero > 0)
                            {
                                echo "<h1>Resultado Final</h1>";
                                echo "<p>O número escolhido foi o $numero;</p>";
                                echo "<p>O antecessor dele é " . $numero - 1 . ";</p>";
                                echo "<p>O sucessor dele é " . $numero + 1 . ";</p>";

                            }
                        ?>
                </form>
                
        
        </div>

    </main>

    <main>
        <div>
        <h5>*Desafio 02</h5>
            <h1>Trabalhando com números aleatórios</h1>
            <form>
            <p>Gerando número entre 0 e 100...</p>
        
                <?php 
                    function GerarNumero(){
                        $numero = mt_rand(0, 100);

                        // random_int() gera números aleatórios criptograficamente seguros
                        // porém é a mais lenta 

                        echo "<p><b>Número gerado: $numero</b></p>";
                    }

                    if(isset($_GET['primeiraVez'])== 1)
                    {
                        GerarNumero();
                    }

                ?>
            
    
                </form>
                <button style=" width: 100%;background-color: #4CAF50;font-size: 1em;color: white;padding: 10px 20px;margin: 5px 0;border: none;border-radius: 4px;cursor: pointer;" onclick="window.location.href ='index.php?primeiraVez=1'">GERAR</a></button>
     
        
        </div>
 
    </main>

    <main>
        <div>
        <h5>*Desafio 03</h5>
        <h1>Conversor de Moedas v1.0</h1>
            <form action="index.php" method="get">
                
                <label for="reais">Quantos R$ você tem na carteira?</label>
                <input type="number" name="numero2"  min="0" step="0.001" placeholder="Digite um valor...">
                <input type="submit" value="Converter">
            

            <?php 
                $numero2 = $_GET['numero2'] ?? 0;
                if($numero2 != 0 & $numero2 != null)
                {
                    $emDolar2 = $numero2/4.92;
                    

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h1>Resultado</h1>" ;
                    // echo "<p>Sua carteira em Dólar Americano é de <b>US$ ". number_format($numero,2,',','.') .".</b></p>" ;
                    echo "<p>Valor digitado: ". numfmt_format_currency($padrao, $numero2,"BRL") ."</p>";
                    echo "<p>Sua carteira em Dólar Americano é de: <b>". numfmt_format_currency($padrao, $emDolar2,"USD") ."</b></p>" ;
                    echo "<H5>*Cotação de acordo com o valor colocado direto no meu código.</H5>" ;

                }
                
            ?>
        </form>
        
            
        </div>
 
    </main>

    <main>
        <div>
        <h5>*Desafio 04</h5>
            <h1>Analisador de Número Real</h1>
            <form action="index.php" method="get">
                <label for="numero3">Número Real:</label>
                <input type="number" name="numero3"  min="0" step="0.001" placeholder="Digite um número...">
                <input type="submit" value="Analisar">

                <?php
                $numero3 = $_GET['numero3'] ?? 0;

                if($numero3 != 0 & $numero3 != null)
                {
                    echo "<h1>Resultado:</h1>";   
                    echo "<p>Número escolhido: $numero3</p>";
                    echo "<ul><li>A parte inteira é: ". intval($numero3) ."</li>";
                    echo "<li>A parte fracionária é: ". number_format($numero3-(intval($numero3)),3,',','.') ."</li></ul>";
                }
                
                ?>
            </form>
        </div>

    </main>

    <main>
        <div>
        <h5>*Desafio 05</h5>
        <h1>Conversor de Moedas v2.0</h1>
            <form action="index.php" method="get">
                
                <label for="reais">Quantos R$ você tem na carteira?</label>
                <input type="number" name="numero4" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite um valor...">
                <input type="submit" value="Converter">
            

            <?php 
                $numero4 = $_GET['numero4'] ?? 0;
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'01-13-2024\'&@dataFinalCotacao=\'01-20-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $dados = json_decode(file_get_contents($url), true);
            
                $cotacao = $dados['value'][0]['cotacaoCompra'];



                if($numero4 != 0 & $numero4 != null)
                {
                    $emDolar = $numero4/$cotacao;
                    

                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                    echo "<h1>Resultado</h1>" ;
                    // echo "<p>Sua carteira em Dólar Americano é de <b>US$ ". number_format($numero,2,',','.') .".</b></p>" ;
                    echo "<p>Valor digitado: ". numfmt_format_currency($padrao, $numero4,"BRL") ;

                    echo "<p>Sua carteira em Dólar Americano é de: <b>". numfmt_format_currency($padrao, $emDolar,"USD") ."</b></p>" ;

                    echo "<H5>*Cotação de acordo com a API do Banco Central Do Brasil.</H5>" ;

                }
                
            ?>
        </form>
            
        </div>

    </main>
    


    
</body>
</html>