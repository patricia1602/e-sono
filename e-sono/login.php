<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="">
</head>

<body>

    <form class="form-signin" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imagemLogin" src="imagem/emoji.png" alt="">
                <h2 class="title">E-sono</h2>
                <p>Login</p>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="card-group">
                <label><input type="checkbox" name="lembrar"> Lembre-me</label>
            </div>

            <div class="card-group btn">
                <button type="submit">Acessar</button>
            </div>

        </div>
    </form>

</body>

</html>