<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../images/imagem sem fundo.png" />
    <title>ɴᴀᴛᴋos ➜ ʟᴏɢɪɴ</title>
    <style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url(../images/natural-cosmetics-on-desk.jpg);
        background-size: 100%;
    }

    .tela-login {
        background-color: rgba(0, 0, 0, 0.5);
        position: relative;
        padding: 50px;
        border-radius: 15px;
    }

    input {
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        background-color: white;
    }

    ::placeholder {
        color: silver;
    }

    .botao-entrar {
        background-color: #00C53B;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
        cursor: pointer;
        width: 1000px;
        margin: 0 auto;
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
                <input type="text" name="email" id="email" placeholder="E-mail" required>
                <br><br>
                <label for="senha" style="color: #D7C3B3;">Senha: </label><br><p>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <br><br>
                <div>
                <input type="submit" class="botao-entrar" style="font-weight: bolder;" value="Entrar">
                </div>
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