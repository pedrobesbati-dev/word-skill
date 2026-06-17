<?php

    try{
        $pdo = new PDO("mysql: host=localhost; dbname=celulares", "root", "senai");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "deu certo";
    }catch(PDOException $e){
        echo "algo deu de errado".$e->getMessage();
    }

?>