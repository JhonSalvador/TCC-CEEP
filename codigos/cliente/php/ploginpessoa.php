<?php
session_start();
include_once "../conexaobnc.php";
$pdo = connect();

if (isset($_POST['btnLogin'])) {

        $cod_cliente = [];
        $email_cliente = $_POST["email_cliente"];
        $senha_cliente = $_POST["senha_cliente"];

    
        
        $sql = $pdo->prepare("SELECT * FROM tb_clientes WHERE email_cliente = :email_cliente AND senha_cliente = :senha_cliente");


        //substituindo as variaveis magicas por dados digitados
        $sql->bindParam(':email_cliente', $email_cliente);
        $sql->bindParam(':senha_cliente', $senha_cliente);
        
        $sql->execute();
    
        if ($sql->execute()) {
        $usuario=$sql->fetch();

            if($sql->rowCount() > 0){
                $_SESSION['cod_cliente'] = $usuario['cod_cliente'];
                $_SESSION['nome_cliente'] = $usuario['nome_cliente'];
                $_SESSION['tipo_cliente'] = $usuario['tipo_cliente'];

                if($_SESSION['tipo_cliente'] == 'A'){
                header(("Location: ./admin/adminhome.php"));
                echo "logado com sucesso";
                }

                elseif($_SESSION['tipo_cliente'] == 'C'){
                header("Location:../homecliente.php");
                echo "logado com sucesso";
                }

            }
        }
        else{
            echo "Senha ou Email incorretos!";
            header("Location:../loginpessoa.php");
            exit();
        }
}

?>