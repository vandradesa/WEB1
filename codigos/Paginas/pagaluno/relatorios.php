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
    <title>Verificar relatórios</title>
    <link rel="stylesheet" href="style_relatorios.css">
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
            <div class="item4_menu"><a href="verificarpendencias.html">Verificar Pendências</a></div>
            <div class="item5_menu"><a href="solicitar_contato.html">Solicitar Contato</a></div>
            <div class="item6_menu"><a href="notificacoes.html">Notificações</a></div> 
        </div>

        <!--Tela direita - Formularios...-->
        <div class="Formulario">

            <h1 class="title1">Projeto 1</h1>
            <h1 class="title2">Enviar relatório</h1>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);

                }

            ?>
 
                <form action="Processa_relatorio.php" method="post" class="form1">
                    <div>
                    <label for="projetoselec">Selecione o projeto: </label> 
                    
                    <select id="mes" name ="projetoAlu">
                        <!-- <option> Selecione  </option> -- Ruim que aí já pega a opção valor de select = 1 -->

                        <?php
                        //mysqli_query: executa uma consulta no banco de dados.
                        //mysqli_fetch_assoc: é usado com o resultado de mysqli_query. O que esta função faz é criar um array que representa a linha do dado retornado do banco de dados. Tem que ser chamada várias vezes. Na primeira chamada, retorna a primeira linha como array, na segunda chamada, retorna a segunda linha como array.
                        //array_push: adiciona um elemento dentro de um array.
                        
                            $select_de_projetos = "SELECT * FROM projeto"; //Aqui fazemos NOSSA LIGAÇÃO PHP como o MYSQL, trazendo os dados da tabela projeto.
                            $resultado_s_projetos = mysqli_query($conn, $select_de_projetos); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
                            //..."$conn" vem do nosso include_o ("conexao.php");
                            
                            //Explic. while com mysqli_fetch_assoc: "Seria um loop eterno" MAS cada vez que mysqli_fetch_assoc($resultado)é acessado, o ponteiro se move para o próximo registro. Por fim, quando nenhum registro é encontrado, ele retorna o "null" que quebra a condição while.
                            while ($linha_projetos = mysqli_fetch_assoc($resultado_s_projetos)) { //mysqli_fetch_assoc: Obtem uma linha do conjunto de resultados como uma matriz associativa. Chamado "sempre"/várias vezes, roda até "nul"
                            ?> 
                    
                                <option value = "<?= $linha_projetos['id']; ?>"> <?= $linha_projetos['nome'];?> </option> <!-- Entre 'aspas' estão as colunas do BD -->
                                <!-- "value" é o valor que será enviado para o BD. -->
                            <?php
                            }
                            ?>

                        <!-- "?= $f" faz o mesmo efeito  que "echo $f". Isso no php abaixo-->
                        <!-- Termina o php abrindo a chave da função/loop, ele continua no próximo php
                        e aí fechará a chave. Sim, é estranho, mais fica quebrado por "?>" mesmo. -->
                        
                        <!-- ^PHP. EM HTML PURO ESTAVA:
                        <option id="P1">Projeto 1</option>
                        <option id="P1">Projeto 2</option>
                        -->
                    </select>
            <!-- <a href="MenuProfessor.html"> Antes button ficava aqui dentro </a> -->
                        </div>
                      
                 
                
                                  
                    <div><label class="format2">Anexar relatório:</label>

                        <div class="anexardoc">  <!--Nessa linha nós escolhemos o label da div, da divisão, qual o espaço dela etc. Sua descrilçao está no arquivo css (.anexardoc {}) -->
                            <input type="file"   name="relatorio_arquivo" class= "anexar" > <!--Nessa linha está acontecendo esse link da label, mas pela classe descrita ( .anexar{} )-->
                        </div>
                    
                    
                    </div>
                  
                    <div>      
                    <label for="atividades" class="atividade">Descreva as atividades realizadas: </label>
                    <textarea id="atividades" name="descrirelatorio"></textarea>
                    </div>

                    <div>      
                    <label for="horas" class="atividade">Horas realizadas: </label>
                    <input type="number" id="horas_relatorio" name="horas_relatorio">
                    </div>
               
                    <div><input class="butao" type="submit" value="Enviar" name="botao_relatorio"></div>

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
