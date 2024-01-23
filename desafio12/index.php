<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Segundos</title>
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            <input type="submit">
        </form>
    </main>

    <?php 
        if($segundos != null && $segundos != 0)
        {
            $semanas = intdiv($segundos,604800);
            $dias = intdiv(($segundos%604800),86400);
            $horas = intdiv((($segundos%604800)%86400),3600);
            $minutos = intdiv(((($segundos%604800)%86400)%3600),60);
            $segundosSobra = intdiv((((($segundos%604800)%86400)%3600)%60),1);;    

            echo "<main><h2>Totalizando tudo</h2>";
            echo"<p>Analisando o valor que você digitou, <Strong>". number_format($segundos,0, ',','.') ." segundos</Strong> equivalem a um total de:</p>";
            echo"<ul><li>". number_format($semanas,0,',','.') ." semanas</li></ul>";
            echo"<ul><li>$dias dias</li></ul>";
            echo"<ul><li>$horas horas</li></ul>";
            echo"<ul><li>$minutos minutos</li></ul>";
            echo"<ul><li>$segundosSobra segudos</li></ul>";
       
        }
    ?>
</body>
</html>