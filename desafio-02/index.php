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
        <button onclick=" window.location.href = '../index.html' ">Voltar</button>
    </main>
    
</body>
</html>