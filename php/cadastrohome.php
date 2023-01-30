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
        justify-content: center;
        display: flex;
    }

    .box {
        background-color: rgba(0, 0, 0, 0.5);
        position: relative;
        padding: 50px;
        border-radius: 15px;
        margin-top: 250px;
    }

    input {
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 10px;
        font-size: 15px;
        background-color: white;
        width: 20vw;
    }

    ::placeholder {
        color: silver;
    }

    .botao-entrar {
        background-color: #00C53B;
        border: none;
        padding: 10px;
        width: 10vw;
        border-radius: 10px;
        font-size: 15px;
        cursor: pointer;
        margin: 0 auto;
        color: white;
        justify-content: center;
        display: flex;
    }

    .botao-entrar:hover {
        background-color: #00C53B;
        color: black;
    }

    legend {
        background-color: #00C53B;
        border: 1px solid #00C53B;
        color: white;
        border-radius: 10px;
        justify-content: center;
        display: flex;
        
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
    <div class="box">
        <form action="cadastrohome.php" method="POST">
            <fieldset>
                <legend>
                    <h3>Cadastro</h3>
                </legend>

                <br>

                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Completo:</label><br><p>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>

                

                <div class="inputBox">
                    <label for="email" class="labelInput">Email:</label><br><p>
                    <input type="text" name="email" id="email" class="inputUser" required>
                </div>

                

                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha:</label><br><p>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>


                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone:</label><br><p>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>

                <br>

                <label value="genero" class="input">Gênero:</label><p>
                <select class="input" name="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>

                <br><br><br>

                <label for="datanasc">Data de Nascimento:</label><br><p>
                <input type="date" name="datanasc" id="datanasc" required>

                <br>

                <div class="inputBox">
                    <label for="cidade" class="labelInput">Cidade:</label><br><p>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                </div>


                <div class="inputBox">
                    <label for="estado" class="labelInput">Estado:</label><br><p>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                </div>

                

                <div class="inputBox">
                    <label for="endereco" class="labelInput">Endereço:</label><br><p>
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                </div>

                

                <div>
                    <button type="submit" name="submit" id="submit" class="botao-entrar">Cadastrar</button>
                </div>

                <div>
                    <br>
                    <h6 style="color: whitesmoke; text-align: center;">Já possuí conta?<p></p><a
                            href="loginhome.php"
                            style="color: #00C53B; align-items: center; font-size: x-small;">Logar</a></h6>
                </div>

                <div class="index">
                    <a href="index.php"><img src="../images/botao-de-inicio.png"/></a>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>