<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    require 'conexao2.php';
    require 'Usuario.php';

    $usuario = new Usuario();
    
    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);

    if($usuario->login($email, $password) == true) {
        if(isset($_SESSION['idusuario'])){
            header("Location: index.php");
        }else{
            header("Location: login.php");
            
        }
        
}else{
    header("Location: login.php");
    }

}

?>