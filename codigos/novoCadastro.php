<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cadastro.css">
        <script language="javascript" type="text/javascript" src="Tratamentoform.js"></script>
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

            <div class="fora_login">
                <form class="form" action="valida_cadastro.php" method="post">
                    <div class="loginform">   
                        <h2 id="cads">Novo Cadastro</h2>
                        <div class="campos">
                            <label>Nome Completo:</label>       <input type="text" name="nome" onblur="verificanome(this)" id="nome" required>
                            <label>Data Nascimento:</label>     <input type="date" name ="data" id="data">
                            <label>CPF:</label>                 <input type="number" maxlength="11" name="cpf" oninput="maxLencpf(this)" onblur="ValidarCPF(this)" id="cpf" required>
                            <label>RG:</label>                  <input type="number" maxlength="9" name="rg" oninput="maxLencpf(this)" id="rg" required>
                            <label>Telefone(Com DDD):</label>   <input type="tel" maxlength="11" name="telefone" id="telefone" required>
                            <label>Matrícula:</label>           <input type="number" name="matricula" id="matricula" required>
                            <label>Curso:</label>               <input type="text" name="curso" id="curso" required>
                            <label>E-mail:</label>              <input type="email" name ="email" id="email" required>
                            <label>Criar Senha:</label>         <input type="text" id="senha" required>
                            <label>Repita Senha:</label>        <input type="text" name="senha" id="repsenha" onblur="validarsenha()" required>

                            <div id="botton_center"> 
                                <a ><button style=" width: 60px; height: 25px;" href = "../index.php" name="novoCadastro" type="submit" onclick="verificanull()">Enviar</button></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </body>
</html>