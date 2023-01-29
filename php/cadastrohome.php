<?php

if(isset($_POST['submit']))
{

    include_once('configLk.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha1 = $_POST['senha'];
    $senha=md5($senha1);
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['datanasc'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    $sql = "INSERT INTO usuarios(nome,email,senha,telefone,genero,datanasc,cidade,estado,endereco) 
    VALUES ('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')";

    $result = $conn->query($sql);
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../images/imagem sem fundo.png" />
    <title>𝙽𝙰𝚃𝙺𝙾𝚂 ➜ 𝙲𝙰𝙳𝙰𝚂𝚃𝚁𝙾</title>
    <style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-image: url(../images/natural-cosmetics-on-desk.jpg);
        background-size: 100%;
    }

    .box {
        background-color: rgba(0, 0, 0, 0.5);
        position: relative;
        padding: 100px;
        border-radius: 15px;
        color: #D7C3B3;
    }

    ::placeholder {
        color: #D7C3B3;
    }

    .botao-entrar {
        
        background-color: #00C53B;
        border: none;
        padding: 10px;
        width: 10%;
        border-radius: 10px;
        font-size: 15px;
        color: #31683E;
        cursor: pointer;
        width: 1000px;
        margin: 0 auto;
    }

    .botao-entrar:hover {
        background-color: rgb(209, 204, 204);
        color: #31683E;
    }

    fieldset {
        border: 0px solid #D7C3B3;
    }

    .gener {
        color: #D7C3B3;
        font-size: 15px;
        border: 4px solid #31683E;
        border-radius: 3px;
        background-color: #31683E;
    }

    legend {
        background-color: #D7C3B3;
        border: 1px solid #D7C3B3;
        text-align: center;
        color: #31683E;
        border-radius: 10px;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid #D7C3B3;
        outline: none;
        width: 100%;
        color: #D7C3B3;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
        color: #31683E;
        font-size: 15px;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -20px;
        color: #D7C3B3;
        font-size: 12px;
        border: 1px solid #31683E;
        border-radius: 3px;
        background-color: #31683E;
    }

    #datanasc {
        color: #D7C3B3;
        background-color: #31683E;
        border-radius: 3px;
        outline: none;
        padding: 10px;
        border: none;
    }

    .index {
        text-align: center;
        color: white;
    }
    </style>
</head>

<body>
    <div class="box">
        <form action="cadastrohome.php" method="POST">
            <fieldset>
                <legend>
                    <h3>Cadastro de Usuários</h3>
                </legend>

                <br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="email" class="labelInput">Nome Completo</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br>

                <label class="gener">Gênero:</label>
                <br>
                <p></p>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>

                <br><br>

                <label
                    style="color: #D7C3B3; font-size: 15px; border: 4px solid #31683E; border-radius: 3px; background-color: #31683E;"
                    for="datanasc">Data de Nascimento:</label>
                <input type="date" name="datanasc" id="datanasc" required>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                <br><br>

                <div>
                    <button type="submit" name="submit" id="submit" class="botao-entrar">Enviar</button>
                </div>

                <div>
                    <br>
                    <h6 style="color: whitesmoke; text-align: center;">Já possuí conta?<p></p><a href="loginhome.php"
                            style="color: #D7C3B3; align-items: center; font-size: x-small;">Logar</a></h6>
                </div>

                <div class="index">
                    <a href="index.php"><img src="https://img.icons8.com/material-outlined/24/null/home--v2.png" /></a>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>