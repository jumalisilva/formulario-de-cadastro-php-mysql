<?php

if(isset($_POST['submit'])) {

    /* TESTANDO retorno dos dados
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('E-mail: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);
    print_r('<br>');
    print_r('Telefone: ' . $_POST['telefone']);
    print_r('<br>');
    print_r('Gênero: ' . $_POST['genero']);
    print_r('<br>');
    print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
    print_r('<br>');
    print_r('Endereço: ' . $_POST['endereco']);
    print_r('<br>');
    print_r('Cidade: ' . $_POST['cidade']);
    print_r('<br>');
    print_r('Estado: ' . $_POST['estado']);
    */

    include_once('config.php');

    $nomeCompleto = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, "INSERT INTO formulariocadastro(nomeCompleto, email, senha, telefone, genero, data_nascimento, endereco, cidade, estado)VALUES('$nomeCompleto', '$email', '$senha', $telefone,  '$genero', '$data_nascimento', '$endereco', '$cidade', '$estado')"
    );

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesforms.css"/>
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Realize o seu cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
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
                <p><strong>Gênero:</strong></p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                <br>
                    <input type="radio" id="outros" name="genero" value="outros" required>
                    <label for="outros">Outros</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
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
                <input type="submit" name="submit" id="submit"/>
            </fieldset>
        </form>
    </div>
</body>
</html>