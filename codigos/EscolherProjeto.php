<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styleProj.css">
        <title> Portal Projeto de Extensão </title>
    </head>

    <body>
        <div class="container">
                      
            <div class = "logo">
                <div class="dentro_logo">
                    <img style="height:150px; width:150px;" src="logo.png">
                    <p id="titulo"> Portal <br> Projeto de <br> Extensão</p>
                    
                </div>
            </div>
      
            
            <div class = "selecaologin">
                <div class = "dentro_selecao">
                  
                    <div class = "fora">
                        <div class="subselecao" id="aluno">
                            <p class="icone"> <img class="imagem" src = "iconprof.png" ><br> Perfil do Professor  </p>
                        </div>

                        <div class="subselecao">
                            <div class="Projetos">
                                <form action="Processa_valid_esclh_proj.php" method="post">
                                    <label for="projetoselec">Selecione o projeto: </label> 
                                    
                                    <select id="projetoselec" name ="select_projeto">
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
                                
                                    <br></br> <!-- <a href="MenuProfessor.html"> Antes button ficava aqui dentro </a> -->

                                    <button type="submit" value="projetoescolhido">Entrar</button></a>
                                    <!-- SIM, BUTTON PODE FAZER SUBMIT de formulário -->
                                
                                </form>



                            </div>

                           
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>