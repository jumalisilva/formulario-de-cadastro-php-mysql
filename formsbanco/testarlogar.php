<?php
// Iniciando a sessão
session_start();

/* TESTANDO retorno na tela
print_r($_REQUEST);
*/

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    /* TESTANDO dados digitados
    print_r('E-mail: ' . $email);
    print_r('<br>');
    print_r('Senha: ' . $senha);
    print_r('<br>');
    */

    $sql = "SELECT * FROM formulariocadastro WHERE email = '$email' and senha = '$senha'";

    $result = $conexao -> query($sql);
    /* TESTANDO funcionamento do select
    print_r($sql);
    print_r($result);
    */

if(mysqli_num_rows($result) < 1) 
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
else 
{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: homedosistema.php');
}

} 
else 
{
    header('Location: login.php');
}

?>