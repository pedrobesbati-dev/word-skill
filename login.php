<?php

    require "config.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        
        $sql = "SELECT * FROM usuarios WHERE nome = :nome AND senha = :senha";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if($usuario){
            header("Location: index.php");
            exit();
        }else{
            $erro = "nome de usuário ou senha incorretos";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aba de Login</title>
</head>
<body>
    <div class="container">
        <section>
                <h2>Aba de Login</h2>
            <form method="POST">
                <label for="nome">NOME:<br><br>
                    <input type="text" name="nome" placeholder="digite o seu nome de usuario aqui"><br><br>
                </label>
                <label for="senha">SENHA:<br><br>
                    <input type="password" name="senha"><br><br>                    
                </label>
                <button type="submit">LOGAR</button>
            </form>
        </section>
    </div>
</body>
</html>