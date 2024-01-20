<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real</title>
</head>
<body>

    <main>
        <div>
        <h5>*Desafio 04</h5>
            <h1>Analisador de Número Real</h1>
            <form action="index.php" method="get">
                <label for="numero">Número Real:</label>
                <input type="number" name="numero"  min="0" step="0.001" placeholder="Digite um número...">
                <input type="submit" value="Analisar">

                <?php
                $numero = $_GET['numero'] ?? 0;

                if($numero != 0 & $numero != null)
                {
                    echo "<h1>Resultado:</h1>";   
                    echo "<p>Número escolhido: $numero</p>";
                    echo "<ul><li>A parte inteira é: ". intval($numero) ."</li>";
                    echo "<li>A parte fracionária é: ". number_format($numero-(intval($numero)),3,',','.') ."</li></ul>";
                }
                
                ?>
            </form>
        </div>
        <button onclick=" window.location.href = '../index.html' ">Voltar</button>
    </main>
   
</body>
</html>