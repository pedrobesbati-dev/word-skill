<?php
    require "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celular = $_POST['celular'];
        $comentario = $_POST['comentario'];
        $reacao = $_POST['reacao'];

        $stmt = $pdo->prepare("INSERT INTO feedback (celular, comentario, reacao) VALUES (?, ?, ?)");
        $stmt->execute($celular, $comentario, $reacao);
        
        echo "Feedback enviado!";
    }
?>

<form method="POST">
    <select name="celular">
        <option value="A14 5G">A14 5G</option>
        <option value="Iphone 12">Iphone 12</option>
    </select>
    
    <input type="text" name="comentario" placeholder="Comentário" required>
    
    <label><input type="radio" name="reacao" value="Gostei" checked> Gostei</label>
    <label><input type="radio" name="reacao" value="Não Gostei"> Não Gostei</label>
    
    <button type="submit">Enviar</button>
</form>

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
                <button type="submit" name="gostei">Gostei</button>
                <button type="submit" name="nao_gostei">Não Gostei</button>
            </form>
        </div>

        <div class="celulares">
            <section>
                <h2>Iphone 12</h2>
            </section>
            <form method="POST">
                <input type="hidden" name="celular" value="Iphone 12">
                <input type="text" name="comentario" maxlength="200" placeholder="Digite seu comentário (máx 200 letras)" required>
                <button type="submit" name="gostei">Gostei</button>
                <button type="submit" name="nao_gostei">Não Gostei</button>
            </form>
        </div>

    </div>
</body>
</html>
