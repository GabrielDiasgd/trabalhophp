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
    $prod = trim($_POST['txtDesc']); 
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

    if($valor>0){
      $sql = "Insert Into item_compra (produto, quantidade, valor) VALUES ('$prod', '$qtde', '$valor');";
      $ins = mysql_query($sql);
      
      if(!$ins)
        echo ("Erro na consulta de inserir produto");

         }
    else echo "Descrição está vazia ou valor é igual a zero";

    header("location:ItemPedido.php?id=$id");

  ?>