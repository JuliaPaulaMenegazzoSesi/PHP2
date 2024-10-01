<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletim</title>
</head>
<body>
    <h1>Boletim</h1>
    <form name="boletim" action="" method="get">
        <input type="number" id="n1">
        <input type="number" id="n2">
        <input type="number" id="n3">
        <input type="number" id="n4">
        <input type="number" id="n5">
        <button>Enviar</button>
    </form>      
    <h2 id="resultado"></h2>
</body>
</html>
<?php 
    if (isset($_GET['n1'],
              $_GET['n2'],
              $_GET['n3'],
              $_GET['n4'],
              $_GET['n5']))
    {
        $n1 = floatval($_GET['n1']);
        $n2 = floatval($_GET['n2']);
        $n3 = floatval($_GET['n3']);
        $n4 = floatval($_GET['n4']);
        $n5 = floatval($_GET['n5']);

        $media = ($n1 + $n2 + $n3 + $n4 + $n5) / 5;

    }
?>