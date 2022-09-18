<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele


session_start();

    $nome = $_SESSION['nome'] ;
    //$nome ='vanessa';

    $sql_user = "SELECT * FROM cliente WHERE nome = '$nome'";
    $resultado = mysqli_query($conn, $sql_user); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

    $reg = mysqli_fetch_row($resultado);
        $id_user = $reg[4];


 

    if(isset($_POST['botao_relatorio'])){
        $projAlu = $_POST['projetoAlu']; //Entre 'aspas' o "name" da tag select do HTML da outra página. SIM! Vc pega o valor de select, da opção selecionada, pelo nome dele.
        //TINHA FALTADO O UNDERLINE_OU_UNDERSCORE NA GLOBAL!
        $relatorio_arquivo = $_POST['relatorio_arquivo'];
        $descri = $_POST['descrirelatorio'];
        $horas_relatorio = filter_input(INPUT_POST, 'horas_relatorio', FILTER_SANITIZE_NUMBER_INT);
   
      

            $id_proj=$projAlu;
        
         
            $result_usuario = "INSERT INTO relatorio (id_usuario, id_projeto, envio, horas_realizadas, descricao_atividades, relatorio_arquivo) VALUES ('$id_user', '$id_proj', NOW(), '$horas_relatorio', '$descri', 'relatorio_arquivo')";

       

            $result_usuario = mysqli_query($conn, $result_usuario);

            $_SESSION['msg'] = "<div><p style='color:red;'> - Relatorio cadastrado com sucesso. Usuario: $nome</p></div>";

         

            header("Location: relatorios.php");
        
    }

    if(isset($_POST['buscar_relatorio'])){
        $id_proj = $_POST['buscaproj'];
        $sql_proj = "SELECT * FROM projeto WHERE id = '$id_proj'";
        $resultado = mysqli_query($conn, $sql_proj); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

        $reg = mysqli_fetch_row($resultado);
            $id_horas = $reg[5];

            $_SESSION['msg'] = "<div><h1 style='color:black;'> </br></br>- Horas realizadas: $id_horas </p></div>";
            header("Location:verificarhoras.php");

    }

    
    if(isset($_POST['certificado'])){
        $id_proj = $_POST['buscaproj'];
        $arquivo = $_POST['arquivo'];

        $sql_proj =  "UPDATE projeto SET certificado='$arquivo' WHERE id='$id_proj'";
        $resultado = mysqli_query($conn, $sql_proj); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

        //$reg = mysqli_fetch_row($resultado);
            //$id_horas = $reg[5];

            $_SESSION['msg'] = "<div><h1 style='color:black;'> </br></br>- certificado enviado </p></div>";
            header("Location:verificarhoras.php");

    }

    if(isset($_GET['erro'])){
    $erro = "É necessário escolher um projeto para acessar o sistema";
    }


?>