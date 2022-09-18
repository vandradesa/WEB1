<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele


//session_start();



#if(isset($_POST['projetoescolhido'])){
    $select_proj = $_POST['select_projeto']; //Entre 'aspas' o "name" da tag select do HTML da outra página. SIM! Vc pega o valor de select, da opção selecionada, pelo nome dele.
    //TINHA FALTADO O UNDERLINE_OU_UNDERSCORE NA GLOBAL!



    #$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        #$erros = "USUÁRIO INVALIDO";

   

        if($select_proj != 0 ) {
            #$_SESSION['usuario'] = $_POST['usuario'];
            header('Location: MenuProfessor.html');//AQUI SETAMOS O URL/ENDEREÇO QUE O BUTÃO DA OUTRA PÁGINA MANDARÁ O USUÁRIO!
        }else{
            header('Location: EscolherProjeto.php'); //Método Básico Para Fazer Um Redirecionamento PHP
            exit;
        }

#}




if(isset($_GET['erro'])){
$erro = "É necessário escolher um projeto para acessar o sistema";
}


?>