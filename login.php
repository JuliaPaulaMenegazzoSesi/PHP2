<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
</head>
<body>
    <form name="senha" method="get">
        <input type="text" name="senhaU" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    $senhaC = "1234";

    if(isset($_GET['senhaU'])) {
        $senhaU = $_GET['senhaU'];

        if ($senhaU === $senhaC) {
            echo "<h2>Login correto</h2>";
            echo "<img src='https://media.tenor.com/eXkvpaKHqUoAAAAM/stupid-idiot-cat-dancing.gif'>";
        } else {
            echo "<h2>Login incorreto</h2>";
            echo "<img src='https://external-preview.redd.it/ejd1cnVqeXpxMzVkMb8jJq4INQakE2TcNQQ2RDZN0R_STwGaDU6BCN3K78I8.png?width=140&height=140&crop=140:140,smart&format=jpg&v=enabled&lthumb=true&s=ee173e86532573a0694961ab8906748d1817479c'>";
        }
    }
    ?>
</body>
</html>