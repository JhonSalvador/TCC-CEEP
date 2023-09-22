<?php
    require_once '../../conexaobnc.php';
    $pdo = connect();

    $cod_cliente = filter_input(INPUT_GET, 'cod_cliente', FILTER_SANITIZE_NUMBER_INT);

    if($cod_cliente){
        $sql = $pdo->prepare("DELETE FROM tb_clientes WHERE cod_cliente = :cod_cliente");
        $sql->bindValue(':cod_cliente', $cod_cliente);
        $sql->execute();
        header("Location: ../listagemcliente.php");
        exit;
    }
?>
    