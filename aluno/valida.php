<?php

    session_start();

    if(isset($_POST['login'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
            $erros = "USUÁRIO INVALIDO";
    
       
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
            $erros = "Senha invalida";

            if($usuario == 'vanessa' && $senha == '12345'){
                $_SESSION['usuario'] = $_POST['usuario'];
                header('Location: menuAluno.php');
            }else{
                header('Location: loginAluno.php');
                exit;
            }

    }

    if(isset($_POST['novaconta'])){
        header('Location: novoCadastro.php');
    }


   if(isset($_GET['erro'])){
    $erro = "É necessário logar para acessar o sistema";
   }


?>