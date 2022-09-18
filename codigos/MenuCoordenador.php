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
    <title>Menu Principal do Coordenador</title>
    <link rel="stylesheet" href="styleMC.css">
    
</head>
<body>
    <div class="container">
  
        <div class="header1">            
            <h1 class="tituloheader">PERFIL <br> DO <br> COORDENADOR</h1>
            
        </div>

        <div class="telaesq">
            <div><img style="height: 100px; width: 100px;" src="iconcoor.png"></div>
        </div>                     
          
         <!--MENU-->
         <div class="item1_menu"><a href="Paginas\pagcoord\verrelatoriosmensais.html">Ver relatórios mensais</a></div>
         <div class="item2_menu"><a href="Paginas\pagcoord\certificadosfinais.html">Certificados Finais</a></div>  
         <div class="item3_menu"><a href="Paginas\pagcoord\removerpendencias.html">Remover pendências</a></div>
         <div class="item4_menu"><a href="Paginas\pagcoord\verificarpendencias.html">Verificar pendências</a></div>
       

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
