<?php
session_start();
include_once "../conexaobnc.php";
$pdo = connect();

if (isset($_POST['btnLogin'])) {

    $cod_cliente = [];
    $email_cliente = $_POST["email_cliente"];
    $senha_cliente = $_POST["senha_cliente"];

    if (empty($email_cliente) && empty($senha_cliente)) {
        echo "Necessário informar usuario ou senha";
        exit();
    }

    //$sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = $email_cliente");
    
    $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE cod_cliente AND email_cliente = :email_cliente AND senha_cliente = :senha_cliente");

    //substituindo as variaveis magicas por dados digitados
    $sql->bindParam(':email_cliente', $email_cliente);
    $sql->bindParam(':senha_cliente', $senha_cliente);
    $sql->execute();

    // se o comando der certo
    if ($sql->execute()) {

        $user=$sql->fetch();
        //mostra mensagem de realização do comando
        if ($sql->rowCount() > 0) {
            $_SESSION['cod_cliente'] = $user['cod_cliente'];
            $_SESSION['email_cliente'] = $user['email_cliente'];
            $_SESSION['senha_cliente'] = $user['senha_cliente'];
            
        }
        else{
            
        }
    } else {
        echo "Usuario ou Senha Invalido<br>";
    }
}
?>