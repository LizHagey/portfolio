<?php
    $dsn = 'mysql:host=localhost;dbname=topaller_recipe1';
    $username = 'topaller';
    $password = '#38Majic48@';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>