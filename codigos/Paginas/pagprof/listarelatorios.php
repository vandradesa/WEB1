<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar relatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">   <!--Caixa inteira...-->
  
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

            <form class="form3 action="" method="post">    

            <div>
            <?php
                    include_once("conexao.php");
                    //Para conectar essa página ao banco de dados. Entrar nele


                session_start();    
                            $idproj=$_SESSION['select_proj'];
                            global $x;
                            $x=0;  
                
                            $sql_user = "SELECT * FROM relatorio where id_projeto ='$idproj' ";
                            $resultado = mysqli_query($conn, $sql_user); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
                      
                            while( $row_relatorios = mysqli_fetch_row($resultado)){
                              
                                    echo("ID: ". $row_relatorios[0]."<br>");
                                    echo("ENVIO: ". $row_relatorios[1]."<br>");
                                    echo("HORAS REALIZADAS: ". $row_relatorios[2]."<br>");

                                    $id_usuario= $row_relatorios[6];


                                        $sql_proj = "SELECT * FROM cliente WHERE cpf = '$id_usuario'";
                                        $resultado2 = mysqli_query($conn, $sql_proj); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
                                        $reg = mysqli_fetch_row($resultado2);
                                        $id_nome = $reg[2];
                                    

                                    echo("aluno: ". $id_nome."<br><hr>");                            
                                
                                $x ++;
                                
                            }  
                            if($x==0){
                                echo("Não há relatorios para esse projeto!");
                            }                          
                 
            ?>   
                        </div>     
                    
                    <div>  <label class="format2">Digite o ID do relatorio</label>
                    <input type="number" name="idproj" id="idproj">
                    </div>
                  
                    <div>      
                    <label for class="validarproj">Validar projeto?</label>
                    <div class="botoesvalidar"> <input class="validarsim" type="radio" name="validar"><label for="validarsim" class="sim">sim</label>
                    <input class="validarnao" type="radio" name="validar"><label for="validarnao" class="nao">não</label></div>
                   
                    </div>
                           
                    <div><input class="butao" type="submit" value="Enviar"></div>
                </form>
             
           
            <!--Logo-->
           

        </div>
        
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