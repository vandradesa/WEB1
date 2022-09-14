<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formulario.css">
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
           <form action="valida.php" method="post">
            <div class="fora_login">
                <div class="loginform">   
                    <h2>Faça seu Login - Aluno<h2>
                    <p>Usuário:</p>
                    <input type="text" id="login" name="usuario">
                    <p>Senha:</p>
                    <input type="password" id="pass" name="senha">
                    <br></br>
                    <button type="submit" name="login">Entrar</button>
                    <br></br>
                    <button type="submit" name="novaconta">Criar nova conta</button> 
                </div>  
            </div>
            </form>
        </div>
    </body>
</html>