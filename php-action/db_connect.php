<?php
// variaveis para conexao com banco de dados
  $serveName = "localhost";
  $userName = "root";
  $password = "";
  $db_name = "crud";

  $connect = mysqli_connect($serveName, $userName, $password, $db_name);
  mysqli_set_charset($connect, "utf8");
 // verificacao se tem erros na conexao 
  if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
  endif;