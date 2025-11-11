<?php
    $host = '127.0.0.1';
    $db = 'oficina_db';
    $user = 'root';
    $pass = '';

    try{
        $pdo = new PDO("mysql:host=$host;port=3308;dbname=$db;charset=utf8, $user,$pass");
        $pdo->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION)

    }catch(PDOException $e){

        die("Erro na conexão: " . $e->getMessage());
        
    }
?>