<?php

class Usuario {

    public function login($email, $password) {
        global $pdo;

        $sql = "SELECT * FROM usuario WHERE email = :email AND password = :password";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue("email", $email);
        $sql->bindValue("password", md5($password));
        $sql->execute();

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();

            $_SESSION['idusuario'] = $dado['idusuario'];

            return true;
        }else {
            return false;
        }
    }

}

?>   