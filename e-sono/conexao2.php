<?php 

session_start();

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "e-sono";

global $pdo;

try {

    // orientada a objetos com pdo
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}


?>