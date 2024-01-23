<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Caixa</title>
</head>
<body>

<?php 
$valor = $_GET['valor'] ?? 0;
?>
    <main>
    <h5>*Desafio 13</h5>
    <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="valor" step="00.01" min="0" value="<?=$valor?>">
            <h5>*Notas disponíveis: R$100, R$50, R$10, R$5</h5>
            <input type="submit" value="Sacar" >
        </form>
        <button onclick="window.location.href = '../index.html'">Voltar</button>
    </main>

    <?php 
    if($valor != null && $valor != 0)
    {
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
        $nota100 = intdiv($valor,100);
        $nota50 = intdiv(($valor%100),50);
        $nota10 = intdiv((($valor%100)%50),10);
        $nota5 = intdiv(((($valor%100)%50)%10),5);

        if($valor % 5 != 0)
        {
            for($i = 0; $i != 100000000000000000;$i++)
            {
                if(($valor+$i) % 5 == 0)
                {
                    echo "<script>alert('Valor digitado inválido! Valores aceitos próximos ao digitado: ". numfmt_format_currency($padrao,($valor+$i),"BRL") ." e ". numfmt_format_currency($padrao,(($valor+$i)-5),"BRL") ."');</script>";
                    return;
                }

            }


           

        }
        


        echo"<main><h2>Saque de ".numfmt_format_currency($padrao,$valor,"BRL")." Realizado</h2>";
        echo '<p><img style="width: 150px; align-self: normal" src="nota100.jpg" > x'. $nota100 . '</p>';

        echo '<p><img style="width: 150px; align-self: normal" src="nota50.jpg" > x'. $nota50 . '</p>';

        echo '<p><img style="width: 150px; align-self: normal" src="nota10.png" > x'. $nota10 . '</p>';

        echo '<p><img style="width: 150px; align-self: normal" src="nota5.jpg" > x'. $nota5 . '</p>';

    }
    
    ?>
</body>
</html>