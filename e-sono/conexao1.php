<?php 

    $localhost = "localhost";
    $user = "root";
    $password = "";
    $banco = "e-sono";

    $conecta = mysqli_connect($localhost, $user, $password, $banco);

    // ESTRUTURAL
    $sql = mysqli_query($conecta, "SELECT * FROM usuario");

    echo "Existem".mysqli_num_rows($sql)."registros."; #vai imprimir quantas linhas tem nesse resultado
?>