<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    $cod_produto = filter_input(INPUT_POST, 'cod_produto', FILTER_SANITIZE_NUMBER_INT);
    $nome_produto = filter_input(INPUT_POST, 'nome_produto');
    $preco_produto = filter_input(INPUT_POST, 'preco_produto');
    $descricao_produto = filter_input(INPUT_POST, 'descricao_produto');
    $ativo_produto = filter_input(INPUT_POST, 'ativo_produto');

    if($cod_produto && $nome_produto && $preco_produto && $descricao_produto && $ativo_produto){
        $sql = $pdo->prepare("UPDATE tb_produtos SET nome_produto = :nome_produto, preco_produto = :preco_produto, descricao_produto = :descricao_produto, ativo_produto = :ativo_produto WHERE cod_produto = :cod_produto");
        $sql->bindValue(':nome_produto', $nome_produto);
        $sql->bindValue(':preco_produto', $preco_produto);
        $sql->bindValue(':descricao_produto', $descricao_produto);
        $sql->bindValue(':ativo_produto', $ativo_produto);
        $sql->bindValue(':cod_produto', $cod_produto);
        $sql->execute();
        header("Location: ../listagemproduto.php");
        exit;
    }
    else{
        header("Location: ../editarproduto.php");
        exit;
    }
?>

