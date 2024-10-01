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
        <input type="number" name="n1" required>
        <input type="number" name="n2" required>
        <input type="number" name="n3" required>
        <input type="number" name="n4" required>
        <input type="number" name="n5" required>
        <button type="submit">Enviar</button>
    </form> 


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

        if($media > 89) {
            echo "<h2>Média: " . number_format($media, 2, ',', '.') . "</h2>";
            echo "<h2>Nota A</h2>";
        } elseif ($media > 79) {
            echo "<h2>Média: " . number_format($media, 2, ',', '.') . "</h2>";
            echo "<h2>Nota B</h2>";
        } elseif ($media > 69) {
            echo "<h2>Média: " . number_format($media, 2, ',', '.') . "</h2>";
            echo "<h2>Nota C</h2>";
        } elseif ($media > 59) {
            echo "<h2>Média: " . number_format($media, 2, ',', '.') . "</h2>";
            echo "<h2>Nota D</h2>";
        } else {
            echo "<h2>Média: " . number_format($media, 2, ',', '.') . "</h2>";
            echo "<h2>Nota F</h2>";
        }

    }
?>


   
</body>
</html>
