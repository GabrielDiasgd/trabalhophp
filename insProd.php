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
    $desc = trim($_POST['txtDesc']);
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

    if(!empty($desc) && $valor>0){
      $sql = "Insert Into produto (descricao, quantidade, valor) VALUES ('$desc', '$qtde', '$valor');";
      $ins = mysql_query($sql);
      if(!$ins)
        echo ("Erro na consulta de inserir produto");

         }
    else echo "Descrição está vazia ou valor é igual a zero";

    header("location:lstProd.php");

  ?>