<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo projeto</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="valida.js"></script>
</head>
<body>
    <div class="container">   <!--Caixa inteira...-->
        <!--TELA ESQUERDA--------------------------------------------->
        <header class="header1">            
            <h1 class="tituloheader">PERFIL <br> DO <br> PROFESSOR</h1>
        </header>

        <div class="icone"><img style="height: 80px; width: 80px; padding-top: 20px;" src="iconprof.png"></div> <!--AVATAR-->

        <!--MENU-->
        <div class="MENU">
            <div class="item1_menu"><a href="listarelatorios.php">Verificar relatórios</a></div>
            <div class="item2_menu"><a href="listaalunos.html">Listar alunos</a></div>  
            <div class="item3_menu"><a href="novoaluno.html">Incluir novo aluno</a></div>
            <div class="item4_menu"><a href="novasatividades.html">Incluir novas atividades</a></div>
            <div class="item5_menu"></div>
            <div class="item6_menu"><a href="novoproj.php">Criar novo projeto</a></div>
            </div>


        <!--Tela direita - Formularios...-->
        <div class="Formulario">

            <h1 class="title new project">Criar novo projeto</h1>
            <form class="form3" name="novoproj" action="enviaproj.php" method="post">
                    <div>  
                    <label>Nome do projeto</label>                    
                    <input class="box1" type="text" id="nome projeto" name="nomeproj">
                    </div>                  
                   
                    <div>
                        <label>Resumo do projeto</label>                                        
                        <input class="box2" type="text" id="resumo projeto" name="resumoproj">
                    </div>

                    <div>
                    <label>Incluir atividades</label>
                    <input class="box2" type="text" id="incluir atividades" name="incluir_atividades">
                    </div>
                    
                    <div> 
                    <label>Incluir aluno: cpf do aluno</label>
                    <input class="so_numero" type="number" id="cpf" name="cpf" oninput="maxLencpf(this)" onblur="ValidarCPF(this)">
                    </div> 
                    
                    <div>
                        <input class="butao" type="submit" value="Enviar" name="enviarproj" onclick="valida.js">
                    </div>

                <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);

                }

                ?>
            </form>     

        </div>   

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
