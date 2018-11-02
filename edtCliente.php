<?php
  $conexao = mysql_connect("localhost", "root", "");
  if(!$conexao){
    echo "Erro ao se conectar no mysql <br>" ;
    exit;

  }

  $banco = mysql_select_db("trab");
  if(!$banco){
    echo "Erro ao se conectar no BD! ";
    exit;

  }
    $id = trim($_POST['id']);
    $nome = trim($_POST['txtNome']);//recupera valores
    $email = trim($_POST['txtEmail']);
    $cpf = trim($_POST['txtCpf']);

    if(!empty($nome) && !empty($cpf)){
      $sql = "UPDATE cliente SET nome='$nome', email='$email', cpf='$cpf' where id='$id';";
      $ins = mysql_query($sql);
      if (!$ins){
        echo "Erro ao atualizar Cliente";

         }
      }
    else{ echo "Campos em branco";
}

    header("location:ListarClientes.php");

  ?>
  