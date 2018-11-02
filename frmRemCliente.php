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
  $id = trim($_REQUEST['id']);//codigo do produto que vai editar
  $rs = mysql_query("SELECT * FROM Cliente where id=$id;");
  $linha = mysql_fetch_array($rs);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <title>Excluir Cliente </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
  <div class="container col-md-10">
    <h1>Excluir Produtos</h1>
    <form id="frmRemCli" name="frmRemCli" method="POST" action="remCli.php">
       <div class="form-group">
         <label for="lblId">
           <span class="font-weight-bold"> ID: </span>
           <span clas="font-weight-bold"><?php echo $linha['id'] ?></span>
         </label>
         <input type="hidden" id="txtId" name="id"  value="<?php echo $linha['id'] ?>">
       </div>
         <div class="form-group">
         <label for="lblNome">
           <span class="font-weight-bold"> Nome: </span>
           <span clas="font-weight-bold"><?php echo $linha['nome'] ?></span>
         </label>
       </div>
        <div class="form-group">
         <label for="lblEmail">
           <span class="font-weight-bold"> Email: </span>
           <span clas="font-weight-bold"><?php echo $linha['email'] ?></span>
         </label>
       </div>
        <div class="form-group">
         <label for="lblCpf">
           <span class="font-weight-bold"> CPF: </span>
           <span clas="font-weight-bold"><?php echo $linha['cpf'] ?></span>
         </label>
       </div>
       <button name="btnRem" id="btnRem" class="btn btn-outline-danger btn-lg" type="submit"> Remover </button>
      <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-secondary btn-lg" value="Cancelar"
                        onclick="javascript:location.href='ListarCliente.php'">




    </form>
  </div>

</body>
</html>