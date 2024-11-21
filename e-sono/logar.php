<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require 'conexao2.php';

    require 'Usuario.php';

    $usuario = new Usuario();

    $login = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($usuario->login($email, $senha) == true) {
        if(isset($_SESSION['idusuario'])){
            header("Location: index.php");
        }else {
            header("Location: login.php");
        }
    }else {
        header("Location: login.php");
    }

} else {
    header("Location: login.php");
}

?>