
<?php
    include_once("conexao.php");

    if(isset($_POST['novocadastro'])){
        $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS); //'name' aqui referencia o id da tag <input type="text" name="name">
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        //$tipo = "aluno";

    }

    $result_usuario = "INSERT INTO usuario(nome, cpf) VALUES ('$nome', '$cpf')"; //INSERT INTO aqui, é a parte que faz INSERT no banco "usuario" que tem as colunas "nome" e "cpf"
    $resultado_usuario = mysqli_query($conn, $result_usuario);

?>
