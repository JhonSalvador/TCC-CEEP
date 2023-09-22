<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    
    $nome_produto = filter_input(INPUT_POST, 'nome_produto');
    $preco_produto = filter_input(INPUT_POST, 'preco_produto');
    $descricao_produto = filter_input(INPUT_POST, 'descricao_produto');
    $ativo_produto = filter_input(INPUT_POST, 'ativo_produto');


    if($nome_produto && $preco_produto && $descricao_produto && $ativo_produto){

        $sql = $pdo->prepare("SELECT * FROM tb_produtos WHERE nome_produto = :nome_produto");
        $sql->bindValue(':nome_produto', $nome_produto);
        $sql->execute();

        if($sql->execute()){

                $sql = $pdo->prepare("INSERT INTO tb_produtos (nome_produto, preco_produto, descricao_produto, ativo_produto) VALUES (:nome_produto, :preco_produto, :descricao_produto, :ativo_produto)");
                $sql->bindValue(':nome_produto', $nome_produto);
                $sql->bindValue(':preco_produto', $preco_produto);
                $sql->bindValue(':descricao_produto', $descricao_produto);
                $sql->bindValue(':ativo_produto', $ativo_produto);
                $sql->execute();
            
                header("Location: ../listagemproduto.php");
                exit;

        }
        else{
            header("Location: ../cadastroproduto.php");
        }
    }
    else{
        exit;
    }
