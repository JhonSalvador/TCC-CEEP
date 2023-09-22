<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente');
    $telefone_cliente = filter_input(INPUT_POST, 'telefone_cliente');
    $tipo_cliente = filter_input(INPUT_POST, 'tipo_cliente');
    $email_cliente = filter_input(INPUT_POST, 'email_cliente', FILTER_VALIDATE_EMAIL);
    $senha_cliente = filter_input(INPUT_POST, 'senha_cliente');

    if($nome_cliente && $telefone_cliente && $tipo_cliente && $email_cliente && $senha_cliente){

        $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = :email_cliente");
        $sql->bindValue(':email_cliente', $email_cliente);
        $sql->execute();

        if(
            $sql->rowCount() ===0){

                $sql = $pdo->prepare("INSERT INTO tb_clientes (nome_cliente, telefone_cliente, tipo_cliente, email_cliente, senha_cliente) VALUES (:nome_cliente, :telefone_cliente, :tipo_cliente, :email_cliente, :senha_cliente)");
                $sql->bindValue(':nome_cliente', $nome_cliente);
                $sql->bindValue(':telefone_cliente', $telefone_cliente);
                $sql->bindValue(':tipo_cliente', $tipo_cliente);
                $sql->bindValue(':email_cliente', $email_cliente);
                $sql->bindValue(':senha_cliente', $senha_cliente);
                $sql->execute();
            
                header("Location: ../listagemcliente.php");
                exit;
            }
            else{
                header("Location: ../cadastrocliente.php");
            }
    }
    else{
        header("Location: ../cadastrocliente.php");
        exit;
    }

?>