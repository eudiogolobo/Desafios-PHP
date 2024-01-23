<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Idade</title>
</head>
<body>

    <?php 
        $anoAtual = $_GET['anoAtual'] ?? null;
        $nascimento = $_GET['nascimento'] ?? null; 
        ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>  
            <input type="number" name="nascimento" value="<?=$nascimento?>">
            <label for="anoAtual">Quer saber sua idade em que ano? (atualmente estamos em <?="<b>". date('Y') ."</b>"?>)</label>
            <input type="number" name="anoAtual" value="<?=$anoAtual?>">  
            <input type="submit">
         </form>
    </main>

    <?php 
    if($anoAtual != null && $nascimento != null && $anoAtual != 0 && $nascimento != 0)
    {
        $idade = $anoAtual - $nascimento;
        echo"<main><h2>Resultado</h2>";
        echo"<p>Quem nasceu em ". $nascimento ." vater ter <b>$idade anos</b> em ". ($anoAtual) ."!</p>";
    }
    ?>
</body>
</html>