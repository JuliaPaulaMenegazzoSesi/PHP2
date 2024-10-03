<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>
    <h1>Pratos</h1>
    <div class="pratos">
        <div class="lasanha">
            <h2>Lasanha</h2>
            <img src="https://www.gastronomia.com.br/wp-content/uploads/2023/12/comida-com-l-lasanha-lagosta-linguica-e-muito-mais.jpg" alt="">
            <p>R$20,00</p>
        </div>
        <div>
            <h2>Strogonoff</h2>
            <img src="https://www.unileverfoodsolutions.com.br/dam/global-ufs/mcos/SLA/calcmenu/recipes/BR-recipes/chicken-&-other-poultry-dishes/strogonoff-de-frango/main-header.jpg" alt="">
            <p>R$15,00</p>
        </div>
        <div>
            <h2>Cuscuz</h2>
            <img src="https://receitastanahora.com.br/wp-content/uploads/2021/07/cuscuz.jpg" alt="">
            <p>R$10,00</p>
        </div>
    </div>
    <h1>Bebidas</h1>
    <div class="bebidas">
        <div class="agua">
            <h2>Água</h2>
            <img src="https://static.biologianet.com/2019/05/agua.jpg" alt="">
            <p>R$2,00</p>
        </div>
        <div class="suco">
            <h2>Suco</h2>
            <img src="https://www.assai.com.br/sites/default/files/styles/blog_destaque/public/blog/copos_com_sucos_de_frutas_-_suco_natural_-_assai_atacadista.jpg?itok=kLNPgjqS" alt="">
            <p>R$5,00</p>
        </div>
        <div class="refri">
            <h2>Refrigerante</h2>
            <img src="https://mineirinhocasadonorte.com/cdn/shop/products/20220209_123438_1_1024x1024@2x.png?v=1649299276" alt="">
            <p>R$30,00</p>
        </div>
    </div>
    <div class="checkboxes">
        <h3>Faça seu pedido</h3>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label>
                <input type="checkbox" name="pedido[]" value="Lasanha"> Lasanha
            </label>
            <label>
                <input type="checkbox" name="pedido[]" value="Strogonoff"> Strogonoff
            </label>
            <label>
                <input type="checkbox" name="pedido[]" value="Cuscuz"> Cuscuz
            </label>
            <label>
                <input type="checkbox" name="pedido[]" value="Água"> Água
            </label>
            <label>
                <input type="checkbox" name="pedido[]" value="Suco"> Suco
            </label>
            <label>
                <input type="checkbox" name="pedido[]" value="Refri"> Refrigerante
            </label>

            <h3>Selecione o desconto</h3>
            <input type="radio" id="0" name="desconto" value="0">
            <label for="0">Sem desconto</label><br>
            <input type="radio" id="10" name="desconto" value="10">
            <label for="10">10% de desconto</label><br>
            <input type="radio" id="20" name="desconto" value="20">
            <label for="20">20% de desconto</label><br>
            <input type="radio" id="30" name="desconto" value="30">
            <label for="30">30% de desconto</label><br>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <?php 
    if(isset($_GET['pedido'])){
        $pedido = $_GET['pedido'];
        $preco = [
            "Lasanha" => 20,
            "Strogonoff" => 15,
            "Cuscuz" => 10,
            "Água" => 2,
            "Suco" => 5,
            "Refri" => 30
        ];

        $total = 0;

        foreach ($pedido as $item){
            $total += $preco[$item];
        }

        $desconto = isset($_GET['desconto']) ? (int)$_GET['desconto'] : 0;
        $totalF = $total - $total * ($desconto/100);

        echo "<h3>Seu pedido:</h3>";
        echo "<p>Total: R$" . number_format($total, 2, ',', '.') . "</p>";
        echo "<p>Desconto: $desconto%</p>";
        echo "<p>Total com desconto: R$" . number_format($totalF, 2, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
