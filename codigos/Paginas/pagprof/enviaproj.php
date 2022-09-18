<?php
    include_once("conexao.php");
    session_start();


    if(isset($_POST['enviarproj'])){
        $nomeproj = filter_input(INPUT_POST, 'nomeproj', FILTER_SANITIZE_SPECIAL_CHARS);
        $resumoproj = filter_input(INPUT_POST, 'resumoproj', FILTER_SANITIZE_SPECIAL_CHARS);
        $atividades = filter_input(INPUT_POST, 'incluir_atividades', FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);     

        $result_usuario = "INSERT INTO projeto (nome, resumo, atividades) VALUES ('$nomeproj','$resumoproj', '$atividades')";
        $resultado = mysqli_query($conn, $result_usuario);

        $sql_proj = "SELECT * FROM projeto WHERE nome = '$nomeproj'";
        $resultado = mysqli_query($conn, $sql_proj); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

        $reg = mysqli_fetch_row($resultado);
            $id_proj = $reg[0];

        $result_participa = "INSERT INTO participa ( cpf_cliente, id_projeto) VALUES ('$cpf','$id_proj')";
        $resultado = mysqli_query($conn, $result_participa); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

        $nome = $_SESSION['nome'];

        $sql_user = "SELECT * FROM cliente WHERE nome = '$nome'";
        $resultado = mysqli_query($conn, $sql_user); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
        $reg = mysqli_fetch_row($resultado);
        $id_user = $reg[4];

        $result_participa = "INSERT INTO participa (cpf_cliente, id_projeto) VALUES ('$id_user','$id_proj')";
        $resultado = mysqli_query($conn, $result_participa); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

        $_SESSION['msg'] = "<div><h1 style='color:black;'> </br></br>- Projeto criado </p></div>";

        header("Location: novoproj.php");
    }

   
    

?>