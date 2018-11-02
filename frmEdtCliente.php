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
  $rs = mysql_query("SELECT * FROM cliente where id=$id;");
  $edita = mysql_fetch_array($rs);


  ?>


<html>
<head>
  <meta charset="UTF-8">
  <title>Editar Cliente</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
      <body>
        <div class="container col-md-8">
          <h1>Editar Cliente</h1>
          <br>
          <form id="frmEdtCli" name="frmEdtCli" method="POST" action="edtCliente.php">
          
          <div class="form-group">
              <label for="lbltxtId"> ID:  <?php echo $edita['id'] ?> </label>
              <input type="hidden" id="txtId" name="id"  value="<?php echo $edita['id'] ?>">
          
          </div>
          <div class="form-group">
            <label for="lblNome"> Nome: </label>
              <input type="text" id="txtNome" name="txtNome" class="form-control col-md-6"
                     value = "<?php echo $edita['nome'] ?>">
            </div>
            <div class="form-group">
            <label for="lblEmail"> Email:  </label>
            <input type= "text" id= "txtEmail" name= "txtEmail" class= "form-control col-md-6"
                   value = "<?php echo $edita['email'] ?>">
            </div>
            <div class="form-group">
            <label for="lblCpf"> CPF: </label>
            <input type="text" id="txtCpf" name="txtCpf" 
                   class="form-control col-md-6" value= "<?php echo $edita['cpf']?>">
                  </div>
                  <input type="submit" id="btGravar" name="bt_Gravar"
                        class="btn btn-outline-success btn-lg" value="Atualizar">
                  <input type="reset" id="btLimpar" name="btLimpar"
                        class="btn btn-outline-secondary btn-lg" value="Limpar">
                  <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Cancelar"
                        onclick="javascript:location.href='ListarClientes.php'">
          </form>
          </div>

      </body>
</html>