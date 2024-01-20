<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css"/>
    <title>Gerar Número</title>
</head>
<body>
    <main>
        <div>
            <h1>Trabalhando com números aleatórios</h1>
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
        
            <button onclick="window.location.href ='index.php?primeiraVez=1'">GERAR</a></button>
        
        </div>
    </main>
</body>
</html>