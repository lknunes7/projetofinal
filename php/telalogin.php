<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(90deg, #159a76, green);
        }

        div {
            background-color: #D7C3B3;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #31683E;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: #31683E;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: #D7C3B3;
            font-size: 15px;
            cursor: pointer;
        }

        .inputSubmit:hover {
            background-color: #285a33;

        }
    </style>
</head>

<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
    </div>
</body>

</html>