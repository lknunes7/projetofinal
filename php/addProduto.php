<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Adicionar Pessoas</title>
</head>
<body>
<fieldset>
<legend>Inserir novo Produto</legend>
<form action="insertProduto.php" method="post" enctype="multipart/form-data">
<label for="txtNome">Nome: </label>
<input type="text" name="txtNome" required autofocus placeholder="Informe
o nome"><br><br>

<label for="txtPreco">Preço: </label>
<input type="text" name="txtPreco" required maxlength="3"
placeholder="Informe o preço"><br><br>
<label for="">Imagem</label>
<input type="file" riquired name="arquivo">

<br><br>
<input type="submit" value="Salvar" h>
<a href="index2.php"><input type="button" name="btnCancelar" value="Cancelar"></a>
</form>
</fieldset>
</body>
