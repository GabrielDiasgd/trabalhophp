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
    $desc = trim($_POST['txtDesc']);//recupera valores
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc) && !empty($valor)){
      $sql = "UPDATE produto SET descricao='$desc', quantidade='$qtde', valor='$valor' where id='$id';";
      $ins = mysql_query($sql);
      if (!$ins){
        echo "Erro ao atualizar produto";

         }
      }
    else{ echo "Campos em branco";
}

    header("location:lstProd.php");

  ?>
  