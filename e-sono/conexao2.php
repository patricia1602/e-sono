<?php 

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "e-sono";


// orientada a objetos com pdo
$pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// sistemas
$sql = $pdo->query("SELECT * FROM usuario");
$sql->execute();

echo $sql->rowCount();

?>