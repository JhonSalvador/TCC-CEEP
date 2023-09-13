<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    $cod_produto = filter_input(INPUT_GET, 'cod_produto', FILTER_SANITIZE_NUMBER_INT);

    if($cod_produto){
        $sql = $pdo->prepare("DELETE FROM tb_produtos WHERE cod_produto = :cod_produto");
        $sql->bindValue(':cod_produto', $cod_produto);
        $sql->execute();
        header("Location: ../listagemproduto.php");
        exit;
    }
?>
    