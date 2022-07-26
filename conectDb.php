<?php
$dsn = 'mysql:dbname=php_database;host=127.0.0.1';
$user = 'admin';
$password = 'admin';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
