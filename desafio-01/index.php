<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="../css/estilo.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Desafio do Antecessor e Sucessor</title>
</head>
<body>
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
        <button onclick=" window.location.href = '../index.html' ">Voltar</button>
    </main>

    
</body>
</html>