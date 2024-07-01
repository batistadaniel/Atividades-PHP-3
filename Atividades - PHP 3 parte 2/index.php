<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades - PHP 3 parte 2</title>
</head>
<body>
    <main>
        <form action="" method="post">

            <h1>Calculadora de Desconto</h1>
            <label for="valor">Valor do produto: R$ </label>
            <input type="text" id="valor" name="valor" required>

            <button type="submit">Calcular Desconto</button>

        </form>
    </main>

    <div id="desconto">
        <?php
            $valor = $_POST["valor"];
            
            $desconto = round($valor * 0.07, 2);      
            
            echo "O valor original é: R$ $valor" . "<br>";
            echo "O valor do desconto é: R$ $desconto" . "<br>";
            echo "O valor com desconto é: R$ ". round($valor - $desconto, 2)  . "<br>";
        ?>
    </div>
</body>
</html>