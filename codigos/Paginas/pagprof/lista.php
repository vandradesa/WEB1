<?php
    include_once("conexao.php");
    //Para conectar essa página ao banco de dados. Entrar nele


 session_start();    
   
            $sql_user = "SELECT * FROM relatorio";
            $resultado = mysqli_query($conn, $sql_user); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.

           
            while( $row_relatorios = mysqli_fetch_row($resultado)){
                echo("ID: ". $row_relatorios[0]."<br>");
                echo("ENVIO: ". $row_relatorios[1]."<br>");
                echo("HORAS REALIZADAS: ". $row_relatorios[2]."<br>");

                $id_usuario= $row_relatorios[6];

                    $sql_proj = "SELECT * FROM cliente WHERE id = '$id_usuario'";
                    $resultado = mysqli_query($conn, $sql_proj); //mysqli_query (): Executa uma consulta em um banco de dados. Nos retorna uma matriz.
                    $reg = mysqli_fetch_row($resultado);
                    $id_nome = $reg[2];

                echo("aluno: ". $id_nome."<br><hr>");

                
                
            }
       
                 
?>