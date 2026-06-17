<?php

    try{
        $pdo = new PDO("mysql: host=localhost; dbname=celulares", "root", "senai");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo "algo deu de errado".$e->getMessage();
    }

?>