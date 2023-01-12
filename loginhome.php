<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="images/imagem sem fundo.png"/>
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

        fieldset{
            border: 0px solid #D7C3B3;
        }
    </style>
</head>

<body>
    <div class="tela-login">
        <fieldset>
            <legend><h3>Login</h3></legend>
            <br>
            <input type="text" placeholder="digite o email cadastrado">
            <br><br>
            <input type="password" placeholder="digite a senha cadastrada">
            <br><br>
            <button class="botao-entrar"><b>Entrar</b></button>
            <div>
                <br>
                <h6 style="color: whitesmoke; text-align: center;">Não possuí conta?<p></p><a href="cadastrohome.php" style="color: #D7C3B3; align-items: center; font-size: x-small;">Cadastrar-se</a></h6>
            </div>
        </fieldset>
    </div>
</body>

</html>