<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades - PHP 3 parte 1</title>
</head>
<body>
    <main>
        <form action="" method="post">

            <h1>Calculadora de IMC</h1>
            <label for="peso">Peso em Kg:</label>
            <input type="text" id="peso" name="peso" required>
            <label for="altura">Altura em m:</label>
            <input type="text" id="altura" name="altura" required>
            <button type="submit">Calcular IMC</button>

        </form>
    </main>

    <div id="imcResultado">
        <?php
            $peso = @$_POST["peso"];
            $altura = @$_POST["altura"];
            
            $imc = round($peso / ($altura * $altura), 2);
            
            echo $imc;
        ?>
    </div>
</body>
</html>