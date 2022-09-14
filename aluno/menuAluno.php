<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal Aluno</title>
    <link rel="stylesheet" href="styleMA.css">
    
</head>
<body>
    <div class="container">
  
        <div class="header1">            
            <h1 class="tituloheader">PERFIL <br> DO <br> ALUNO</h1>

            <?php
            session_start() ;echo 'Bem vindo(a) ' .$_SESSION['usuario'] ; ?>
        </div>

        <div class="icone">
            <div><img style="height: 100px; width: 100px;" src="iconaluno.png"></div>
        </div>                   
          
         <!--MENU-->
         <div class="item1_menu"><a href="Paginas/pagaluno/relatorios.html">Enviar Relatório</a></div>
         <div class="item2_menu"><a href="Paginas/pagaluno/verificarhoras.html">Verificar Horas</a></div>  
         <div class="item3_menu"><a href="Paginas/pagaluno/enviarcertificado.html">Enviar Certificado</a></div>
         <div class="item4_menu"><a href="Paginas/pagaluno/verificarpendencias.html">Verificar Pendências</a></div>
         <div class="item5_menu"><a href="Paginas/pagaluno/solicitar_contato.html">Solicitar Contato</a></div>
         <div class="item6_menu"><a href="Paginas/pagaluno/notificacoes.html">Notificações</a></div>  

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