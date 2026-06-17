<?php
    require "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celular = $_POST['celular'] ?? '';
        $comentario = $_POST['comentario'] ?? '';
        $reacao = '';

        if (isset($_POST['gostei'])) {
            $reacao = 'Gostei';
        } elseif (isset($_POST['nao_gostei'])) {
            $reacao = 'Não Gostei';
        }

        $stmt = $pdo->prepare("INSERT INTO feedback (celular, comentario, reacao) VALUES (?, ?, ?)");
        
        $stmt->execute([$celular, $comentario, $reacao]);
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba de celulares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      
    <h2>FEEDBack Cell</h2>

    <div class="container">
        <h2>O foco do nosso site não é ser uma vitrine mas sim podermos estar recebendo os feedbacks dos usuários de cada celular</h2>
            <div class="celulares-wrapper">
            <div class="celulares">
                <section>
                    <h2>A14 5G</h2>
                    <img src="A14 5G.webp">
                </section>
                <form method="POST">
                    <input type="hidden" name="celular" value="A14 5G">
                    <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required><br>
                    <button type="submit" name="gostei" onclick="return confirm('feedback enviado')">Gostei</button><br>
                    <button type="submit" name="nao_gostei" onclick="return confirm('feedback enviado')">Não Gostei</button><br><br>
                </form>
            </div>
            <div class="celulares">
                <section>
                    <h2>Iphone 12</h2>
                    <img src="Iphone 12.webp">
                </section>
                <form method="POST">
                    <input type="hidden" name="celular" value="Iphone 12">
                    <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required><br>
                    <button type="submit" name="gostei" onclick="return confirm('feedback enviado')">Gostei</button><br>
                    <button type="submit" name="nao_gostei" onclick="return confirm('feedback enviado')">Não Gostei</button><br><br>
                </form>
            </div>
            <div class="celulares">
                <section>
                    <h2>Motorola edge 60</h2>
                    <img src="Motorola edge 60.webp">
                </section>
                <form method="POST">
                    <input type="hidden" name="celular" value="Iphone 12">
                    <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required><br>
                    <button type="submit" name="gostei" onclick="return confirm('feedback enviado')">Gostei</button><br>
                    <button type="submit" name="nao_gostei" onclick="return confirm('feedback enviado')">Não Gostei</button><br><br>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <button onclick="window.location.href='login.php'" class="login">Login</button>
</body>
</html>
