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
    $id = trim($_POST['id']);//recupera valores
  
    if(!empty($id)){
      $sql = "DELETE FROM cliente where id='$id';";
      $ins = mysql_query($sql);
      if (!$ins){
        echo "Erro ao remover cliente";

         }
      }
    else{ echo "Campos em branco";
}

    header("location:ListarClientes.php");

  ?>