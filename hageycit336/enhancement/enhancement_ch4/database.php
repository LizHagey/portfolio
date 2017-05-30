<?php
    $dsn = 'mysql:host=localhost;dbname=topaller_recipe1';
    $username = 'topaller';
    $password = '#38Majic48@';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>