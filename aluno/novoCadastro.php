<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cadastro.css">
        <title> Portal Projeto de Extensão </title>
    </head>

    <body>
        <div class="container">
      
            <form action="valida_cadastro.php" method="post">
            <div class="fora_login">
                <div class="loginform">   
                    <h2 id="cads">Novo Cadastro</h2>
                    <div class="campos">
                        <label>Nome Completo:</label>       <input type="text" name="name"><br>
                        <label>Data Nascimento:</label>     <input type="date" ><br>
                        <label>CPF:</label>                 <input class="so_numero" type="number" maxlength="11" name="cpf"><br>
                        <label>RG:</label>                  <input class="so_numero" type="number" maxlength="9"><br>
                        <label>Telefone(Com DDD):</label>   <input class="so_numero" type="tel" maxlength="11"><br>
                        <label>Matrícula:</label>           <input class="so_numero" type="number"><br>
                        <label>Curso:</label>               <input type="text"><br>
                        <label>E-mail:</label>              <input type="email"><br>
                        <label>Criar Senha:</label>         <input type="password"><br>
                        <label>Repita Senha:</label>        <input type="password"><br>
                    </div>
                    <br></br>
                    <div id="botton_center"> 
                        <a href = "../index.html"><button name="novocadastro" type="submit">Enviar</button></a>
                    </div>
                </div>  
            </div>
        </form>
            <div class = "logo">
                <div class="dentro_logo">
                    <img style="height:150px; width:150px;" src="logo.png">
                    <p id="titulo"> Portal <br> Projeto de <br> Extensão</p>
                    
                </div>
            </div>
        </div>
    </body>
</html>