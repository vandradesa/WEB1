<?php

 if(!isset($_SESSION)){
    session_start();
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal Professor</title>
    <link rel="stylesheet" href="styleMP.css">
    
</head>
<body>
    <div class="container">
  
        <div class="header1">            
            <h1 class="tituloheader">PERFIL <br> DO <br> PROFESSOR</h1>
            <div class="icone"><img style="height: 80px; width: 80px; padding-top: 30px;" src="iconprof.png"></div> <!--AVATAR-->
        </div>

        <div class="telaesq">
            <h2 class="Projetos">Projeto 1</h2>
            <h2 class="Projetos"><a href ="../Menu/EscolherProjeto.html" style= color:black;>Selecionar outro projeto</a></h2>
        </div>                   
          
         <!--MENU-->
         <div class="item1_menu"><a href="Paginas\pagprof\listarelatorios.php">Verificar relatórios</a></div>
         <div class="item2_menu"><a href="Paginas\pagprof\listaalunos.html">Listar alunos</a></div>  
         <div class="item3_menu"><a href="Paginas\pagprof\novoaluno.html">Incluir novo aluno</a></div>
         <div class="item4_menu"><a href="Paginas\pagprof\novasatividades.html">Incluir novas atividades</a></div>
         <div class="item5_menu"></a></div>
         <div class="item6_menu"><a href="Paginas\pagprof\novoproj.php">Criar novo projeto</a></div>  

                      <!--Logo-->
    <!--INFERIOR DA TELA ESQUERDA--> 

        <!--Logo-->
        <div class="logoprincipal">  
            <div class = "dentro_logo">
                <img style="height: 100px; width: 100px;"  src="logo.png">  
                <p id="titulo">Portal <br> Projeto de <br>Extensão</p>
            </div>
        </div> 
       
      </div>
</body>
</html>