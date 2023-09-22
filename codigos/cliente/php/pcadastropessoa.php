<?php
    require_once '../conexaobnc.php';
    $pdo = connect();
    $error = [];

    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente');
    $telefone_cliente = filter_input(INPUT_POST, 'telefone_cliente');
    $email_cliente = filter_input(INPUT_POST, 'email_cliente', FILTER_VALIDATE_EMAIL);
    $senha_cliente = filter_input(INPUT_POST, 'senha_cliente');
    $senha_cliente1 = filter_input(INPUT_POST, 'senha_cliente1');

    if ($senha_cliente != $senha_cliente1){
        $error = "Senhas não combinam";
    }

    if($nome_cliente && $telefone_cliente && $email_cliente && $senha_cliente && $senha_cliente1){

        $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = :email_cliente");
        $sql->bindValue(':email_cliente', $email_cliente);
        $sql->execute();

       

        if(
            $sql->rowCount() ===0){

                $sql = $pdo->prepare("INSERT INTO tb_clientes (nome_cliente, telefone_cliente, tipo_cliente, email_cliente, senha_cliente) VALUES (:nome_cliente, :telefone_cliente, :tipo_cliente, :email_cliente, :senha_cliente)");
                $sql->bindValue(':nome_cliente', $nome_cliente);
                $sql->bindValue(':telefone_cliente', $telefone_cliente);
                $sql->bindValue(':tipo_cliente', 'C');
                $sql->bindValue(':email_cliente', $email_cliente);
                $sql->bindValue(':senha_cliente', $senha_cliente);
                $sql->execute();
            
                header("Location: ../homecliente.php");
                exit;
            }
            else{
                header("Location: ../cadastropessoa.php");
            }
    }
    else{
        header("Location: ../cadastropessoa.php");
        exit;
    }

?>