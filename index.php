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
    <div class="aba_superior">
        <h2>FEEDBack Cell</h2>
    </div>
    <div class="container">

        <div class="celulares">
            <section>
                <h2>A14 5G</h2>
            </section>
            <form method="POST">
                <input type="hidden" name="celular" value="A14 5G">
                <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required>
                <button type="submit" name="gostei" onclick="return confirm('feedback enviado')">Gostei</button>
                <button type="submit" name="nao_gostei" onclick="return confirm('feedback enviado')">Não Gostei</button>
            </form>
        </div>

        <div class="celulares">
            <section>
                <h2>Iphone 12</h2>
            </section>
            <form method="POST">
                <input type="hidden" name="celular" value="Iphone 12">
                <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required>
                <button type="submit" name="gostei" onclick="return confirm('feedback enviado')">Gostei</button>
                <button type="submit" name="nao_gostei" onclick="return confirm('feedback enviado')">Não Gostei</button>
            </form>
        </div>

    </div>
</body>
</html>
