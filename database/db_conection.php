<?php 
    $username = '';
    $password = '';

    try {
        $conn = new PDO('mysql:host=localhost;dbname=gsc;charset=utf8', $username, $password); # Producao
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
