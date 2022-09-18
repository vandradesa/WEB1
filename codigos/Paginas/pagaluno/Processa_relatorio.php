<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele


session_start();


    //$select_projAlu = $_POST['select_projetoAlu']; //Entre 'aspas' o "name" da tag select do HTML da outra página. SIM! Vc pega o valor de select, da opção selecionada, pelo nome dele.
    //TINHA FALTADO O UNDERLINE_OU_UNDERSCORE NA GLOBAL!
    $relatorio_arquivo = $_POST['relatorio_arquivo'];
    $descri_relatorio=filter_input(INPUT_POST, 'descri_relatorio', FILTER_SANITIZE_SPECIAL_CHARS);;
    $horas_relatorio = filter_input(INPUT_POST, 'horas_relatorio', FILTER_SANITIZE_NUMBER_INT);;
    $nome = $_SESSION['nome'] ;
    //$nome ='vanessa';

    if(isset($_POST['botao_relatorio'])){
        $sql_user = "SELECT * FROM cliente WHERE nome = '$nome'";
        $resultado_s_projetos = mysqli_query($conn, $sql_user); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
        while ($linha_projetos = mysqli_fetch_assoc($resultado_s_projetos)){
            $id_user =$linha_projetos['id'];

        }
        //$linha_projetos = mysqli_fetch_assoc($resultado_s_projetos);
        //$id_user ="14344814762";
      
    

        //$select_de_projetos = "SELECT * FROM projeto WHERE nome=$select_projAlu"; //Aqui fazemos NOSSA LIGAÇÃO PHP como o MYSQL, trazendo os dados da tabela projeto.
       // $resultado_s_projetos = mysqli_query($conn, $select_de_projetos); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
       // $linha_projetos = mysqli_fetch_assoc($resultado_s_projetos);
       // $id_proj = $linha_projetos['id'];
        $id_proj = "1";
    

        $result_usuario = "INSERT INTO relatorio ( id_usuario, id_projeto, envio, horas_realizadas, descricao_atividades, relatorio_arquivo) VALUES ('$id_user', '$id_proj', NOW(), '$horas_relatorio', '$descri_relatorio', '$relatorio_arquivo')";

        $result_usuario = mysqli_query($conn, $result_usuario);
    }



    if(isset($_GET['erro'])){
    $erro = "É necessário escolher um projeto para acessar o sistema";
    }


?>