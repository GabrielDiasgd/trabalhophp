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
    $compra = trim($_POST['compra']);
    $desc = trim($_POST['txtDesc']);//recupera valores
    $qtde = trim($_POST['txtQtde']);
    $valor = trim($_POST['txtValor']);

$sql3 = "Select * from item_compra where compra='$compra';";
$rs1 = mysql_query($sql3);
$linha1 = mysql_fetch_array($rs1);


$sql0 = "Select  * from produto    where id='$id';";
   $rs = mysql_query($sql0);
   $linha = mysql_fetch_array($rs); 
    
     if($qtde  <= $linha['quantidade'] ){
      $sql = "UPDATE produto SET  quantidade=(quantidade - $qtde) where id='$id';";
      $ins = mysql_query($sql);

      }
      $sql2 = "UPDATE item_compra SET  quantidade='$qtde', valor='$valor' where id='$id';";
     $updt = mysql_query($sql2);


    header("location:ListarPed.php");

  ?>