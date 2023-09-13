<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    $cod_cliente = filter_input(INPUT_POST, 'cod_cliente', FILTER_SANITIZE_NUMBER_INT);
    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente');
    $telefone_cliente = filter_input(INPUT_POST, 'telefone_cliente');
    $tipo_cliente = filter_input(INPUT_POST, 'tipo_cliente');
    $email_cliente = filter_input(INPUT_POST, 'email_cliente', FILTER_VALIDATE_EMAIL);
    $senha_cliente = filter_input(INPUT_POST, 'senha_cliente');

    if($cod_cliente && $telefone_cliente && $tipo_cliente && $email_cliente && $senha_cliente){
        $sql = $pdo->prepare("UPDATE tb_clientes SET nome_cliente = :nome_cliente, telefone_cliente = :telefone_cliente, tipo_cliente = :tipo_cliente, email_cliente = :email_cliente, senha_cliente = :senha_cliente WHERE cod_cliente = :cod_cliente");
        $sql->bindValue(':nome_cliente', $nome_cliente);
        $sql->bindValue(':telefone_cliente', $telefone_cliente);
        $sql->bindValue(':tipo_cliente', $tipo_cliente);
        $sql->bindValue(':email_cliente', $email_cliente);
        $sql->bindValue(':senha_cliente', $senha_cliente);
        $sql->bindValue(':cod_cliente', $cod_cliente);
        $sql->execute();
        header("Location: ../listagemcliente.php");
        exit;
    }
    else{
        header("Location: ../editarcliente.php");
        exit;
    }
?>

