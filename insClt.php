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
    $nome = trim($_POST['txtNome']);
    $endereco = trim($_POST['txtEnd']);
    $email = trim($_POST['txtEmail']);
    $cpf = trim($_POST['txtCpf']);

    if(!empty($nome) && !empty($cpf)){
      $sql = "Insert Into cliente (nome, endereco, email, cpf) VALUES ('$nome', '$endereco', '$email', '$cpf');";
      $ins = mysql_query($sql);
      if(!$ins)
        echo ("Erro na consulta de inserir cliente");

         }
    else echo "Nome ou Cpf está vazio";

    header("location:ListarClientes.php");

  ?>