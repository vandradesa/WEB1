<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Certificado</title>
    <link rel="stylesheet" href="style.css">
    <script language="javascript" type="text/javascript" src="validaaluno.js"></script>
</head>

<body>
    <div class="container">   <!--Caixa inteira...-->
  
        <header class="header1">            
            <h1 class="tituloheader">PERFIL <br> DO <br> ALUNO</h1>
        </header>

        <div class="icone"><img style="height: 80px; width: 80px; padding-top: 20px;" src="iconaluno.png"></div> <!--AVATAR-->

        <!--MENU-->
        <div class="MENU">
            <div class="item1_menu"><a href="relatorios.php">Enviar Relatório</a></div>
            <div class="item2_menu"><a href="verificarhoras.php">Verificar Horas</a></div>  
            <div class="item3_menu"><a href="enviarcertificado.php">Enviar Certificado</a></div>
            <div class="item4_menu"></div>
            <div class="item5_menu"></div>
            <div class="item6_menu"></div> 
        </div>

        <!--Tela direita - Formularios...-->
        <div class="Formulario">

            <h1 class="title1">Enviar Certificado</h1>
            

            <form action="Processa_relatorio.php" method="post" class="form2">
                    <div>
                    <label for="buscaproj">Selecione o projeto: </label> 
                    
                    <select id="mes" name ="buscaproj">
                        <!-- <option> Selecione  </option> -- Ruim que aí já pega a opção valor de select = 1 -->

                        <?php
                 
                        
                 $cpf_aluno = $_SESSION['cpf'];

                 $select_usuario = "SELECT * FROM participa WHERE cpf_cliente = '$cpf_aluno'";                                            

                 $resultado = mysqli_query($conn, $select_usuario); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

                 while($reg = mysqli_fetch_row($resultado)){
                     $id_projeto = $reg[1];
                   
                     $select_de_projetos = "SELECT * FROM projeto where id = '$id_projeto'"; //Aqui fazemos NOSSA LIGAÇÃO PHP como o MYSQL, trazendo os dados da tabela projeto

                     $resultado_s_projetos = mysqli_query($conn, $select_de_projetos); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
                     //..."$conn" vem do nosso include_o ("conexao.php");
                            while ($linha_projetos = mysqli_fetch_assoc($resultado_s_projetos)) { 
                            ?> 
                    
                                <option value = "<?= $linha_projetos['id']; ?>"> <?= $linha_projetos['nome'];?> </option> <!-- Entre 'aspas' estão as colunas do BD -->
                                <!-- "value" é o valor que será enviado para o BD. -->
                            <?php
                            }
                        }
                            ?>

                        -->
                    </select>
          
                    </div>                              
                    
                  
                    <div>      
                    <label for class="anexardoc">Anexar documento </label>
                    
                    <div class="anexardoc">  <!--Nessa linha nós escolhemos o label da div, da divisão, qual o espaço dela etc. Sua descrilçao está no arquivo css (.anexardoc {}) -->
                        <input type="file"   name="arquivo" class= "anexar" id="arquivo"> <!--Nessa linha está acontecendo esse link da label, mas pela classe descrita ( .anexar{} )-->
                    </div>
                   
                    </div>
                    
                    
                           
                    <div><input class="butao" type="submit" value="Enviar" name="certificado" onclick="validarrela()"></div>
                </form>         

        
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




























