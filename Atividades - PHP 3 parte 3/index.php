<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades - PHP 3 parte 3</title>
</head>
<body>
    <main>
        <form action="" method="post">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo">
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
            
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade">
            
            <input type="submit" value="Enviar">

        </form>
    </main>

    <div id="msg">
        <?php
            $nome = $_POST["nome"];
            $sexo = $_POST["sexo"];
            $idade = $_POST["idade"];

            if (($sexo === "feminino") and ($idade < 25)) {
                echo "$nome, ACEITA";
            }
            else {
                echo "$nome, NÃO ACEITA";
            }
        ?>
    </div>
</body>
</html>