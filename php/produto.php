<?php
include_once('config.php');
if (isset($_POST['submit'])) {
    //print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('Email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Telefone: ' . $_POST['telefone']);
    //print_r('<br>');
    //print_r('Sexo: ' . $_POST['genero']);
    //print_r('<br>');
    //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Cidade: ' . $_POST['cidade']);
    //print_r('<br>');
    //print_r('Estado: ' . $_POST['estado']);
    //print_r('<br>');
    //print_r('Endereço: ' . $_POST['endereco']);



    $nomeprod = $_POST['nomeprod'];
    $idprod = $_POST['idprod'];
    $descricaoprod = $_POST['descricaoprod'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $result = mysqli_query($conexao, "INSERT INTO produto(nomeprod,idprod,descricaoprod,preco,estoque) 
        VALUES ('$nomeprod','$idprod','$descricaoprod','$preco','$estoque')");

    if ($result === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        //echo "<script>window.location = 'select.php';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
        echo "<script>window.history.back();</script>";
    }
    $conexao->close();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(90deg, rgb(255, 136, 0), rgb(131, 4, 4));
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
            padding: 15px;
            border-radius: 15px;
            width: 28%;
            color: black;
        }

        fieldset {
            border: 3px solid red;
        }

        legend {
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(45deg, orange, red);
            border-radius: 8px;
            color: white;
        }

        .inputBox {
            position: relative;
            color: black;
        }

        .inputUser {
            border: none;
            background-color: whitesmoke;
            border-radius: 5px;
            border-bottom: 1px solid whitesmoke;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
        }

        .labelInput {
            position: relative;
            top: 5px;
            left: 0px;
            color: white;
        }

        #submit {
            background-image: linear-gradient(45deg, orange, red);
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!--<a href="home.php">Voltar</a>-->
    <div class="box">
        <form action="produto.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Produtos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeprod" id="nomeprod" class="inputUser" required>
                    <label for="nomeprod" class="labelInput">Nome</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="idprod" id="idprod" class="inputUser" required>
                    <label for="idprod" class="labelInput">Código</label>
                </div>

                <br><br>

                <div class="inputBox">
                <input type="text" name="descricaoprod" id="descricaoprod" class="inputUser" required>
                <label for="descricaoprod" class="labelInput">Descrição do Produto</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="preco" id="preco" class="inputUser" required>
                    <label for="preco" class="labelInput">Preço</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="estoque" id="estoque" class="inputUser" required>
                    <label for="estoque" class="labelInput">Estoque Disponível</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>