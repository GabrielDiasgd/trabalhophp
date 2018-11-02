<?php
  //$conexao variVEL PHP
  $conexao = mysql_connect("localhost", "root", "");
  if(!$conexao){
  	echo "Erro ao se conectar no sql <br>" ;
  	exit;

  }

  $banco = mysql_select_db("trab");
  if(!$banco){
  	echo "Erro ao se conectar no BD! ";
  	exit;

  }
  $user = trim($_POST['username']);//codigo do produto que vai editar
  $pwd = trim($_POST['password']);//passagem pelo post pagina html
  $pwd = md5($pwd);


  $rs = mysql_query("SELECT * FROM usuario where user like '$user'");
  $linha = mysql_fetch_array($rs);


    if($pwd==$linha['pwd']){
        session_start();
        $_SESSION['user'] = $user;
        header("location:Inicio.html");

    }
    else { echo "Usuario ou senha incorretos!";
    header("location:login.html");}

  ?>