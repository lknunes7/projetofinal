<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="images/imagem sem fundo.png" />
    <title>ɴᴀᴛᴋos ➜ ʟᴏɢɪɴ</title>
    <style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: #D7C3B3;
    }

    .tela-login {
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 15px;
        border-radius: 15px;
    }

    input {
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        background-color: #31683E;
        color: #D7C3B3;
    }

    ::placeholder {
        color: #D7C3B3;
    }

    .botao-entrar {
        background-color: #D7C3B3;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
        color: #31683E;
        cursor: pointer;
    }

    .botao-entrar:hover {
        background-color: rgb(209, 204, 204);
        color: #31683E;
    }

    legend {
        background-color: #D7C3B3;
        border: 1px solid #D7C3B3;
        text-align: center;
        color: #31683E;
        border-radius: 10px;
        width: 50%;
    }

    fieldset {
        border: 0px solid #D7C3B3;
    }

    .index {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="tela-login">
        <fieldset>
            <form action="validarlogin.php" method="post">
                <legend>
                    <h3>Login</h3>
                </legend>
                <br>
                <label for="email" style="color: #D7C3B3;">Email: </label><br><p>
                <input type="text" name="email" id="email" placeholder="digite o email cadastrado" required>
                <br><br>
                <label for="senha" style="color: #D7C3B3;">Senha: </label><br><p>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha" required>
                <br><br>
                <input type="submit" class="botao-entrar" style="font-weight: bolder;" value="Entrar">
                <div>
                    <br>
                    <h6 style="color: whitesmoke; text-align: center;">Não possuí conta?<p></p><a
                            href="cadastrohome.php"
                            style="color: #D7C3B3; align-items: center; font-size: x-small;">Cadastrar-se</a></h6>
                </div>

                <div class="index">
                    <a href="index.php"><img src="https://img.icons8.com/material-outlined/24/null/home--v2.png" /></a>
                </div>
            </form>
            </form>
        </fieldset>
    </div>
</body>

</html>