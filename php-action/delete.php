<?php
/*
    açao de deletar 
*/
//iniciando sessao
  session_start();
  // importando arquivo de conexao com banco de dados
  require_once "db_connect.php";
  
  if(isset($_POST['btn-deletar'])):   
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

if(mysqli_query($connect, $sql)):
  $_SESSION['mensagem'] = "Deletado com sucesso";
  header('location: ../index.php');
else:
  $_SESSION['mensagem'] = "Erro ao deletar";
  header('location: ../index.php');
endif;
endif;