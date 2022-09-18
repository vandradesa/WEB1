<?php
    include_once("conexao.php");

    if(isset($_POST['novoCadastro'])){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
        $rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_NUMBER_INT);
        $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_NUMBER_INT);
        $tipo = '1';
        $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
        $curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_SPECIAL_CHARS );
        $senha = filter_input(INPUT_POST, 'senha');

        $result_usuario = "INSERT INTO Cliente ( nome, cpf, matricula, email, rg, data_nasc, tipo, telefone, curso, senha ) VALUES ('$nome', '$cpf', '$matricula', '$email','$rg','$data', '$tipo', '$telefone','$curso', '$senha')";
        $result_usuario = mysqli_query($conn, $result_usuario);

        header("Location: index.php");
    }

   
    

?>