<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe o cálculo do salário</title>
</head>
<body>
    <?php
     $_nome = $_POST["nome"];
    echo "Nome do(a) Funcionário(a): " . $_nome . "<br>";
    $_data = $_POST["data_ad"];
    echo "Data de Admissão: " . $_data . "<br>";
    $_salario = $_POST["salario"];
    echo "Salário: " . $_salario . "<br>";
    $_tele = $_POST["telefone"];
    echo "Contato: " . $_tele . "<br>";
    $_aumento = 2500;
    echo "Aumento: " . $_aumento . "<br>";
    $_soma = $_salario + $_aumento;
    echo "O salário de " . $_nome . " com aumento é: " . $_soma . "<br>";

    ?>
</body>
</html>