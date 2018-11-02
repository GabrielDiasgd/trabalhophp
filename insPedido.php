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
    $cliente = trim($_POST['slcCliente']);
    $data = trim($_POST['txtdata']);

    if(!empty($cliente) && !empty($data)){
      $sql = "Insert Into compra (cliente, data) VALUES ('$cliente', '$data');";
      $ins = mysql_query($sql);
      if(!$ins)
        echo ("Erro ao inserir pedidos");

         }
    else echo "Descrição está vazia ou valor é igual a zero";

    header("location:listarPed.php");

  ?>