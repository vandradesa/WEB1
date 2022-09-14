
<?php
    include_once("conexao.php");

    if(isset($_POST['novocadastro'])){
        $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

    }

    $result_usuario = "INSERT INTO usuario(nome, cpf) VALUES ('$nome', '$cpf')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

?>