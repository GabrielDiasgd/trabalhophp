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
  $rs = mysql_query("SELECT * FROM produto where id=$id;");
  $edita = mysql_fetch_array($rs);


  ?>


<html>
<head>
  <meta charset="UTF-8">
  <title>Adcionar Produto no Pedido</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
      <body>                                                      
        <div class="container col-md-8">
          <h1>Adcionar Produto no Pedido</h1>
          <br>
          <form id="frmEdtProd" name="frmEdtProd" method="POST" action="insProdPed.php">
          
          <div class="form-group">
              <label for="lbltxtId"> ID:  <?php echo $edita['id'] ?> </label>
              <input type="hidden" id="txtId" name="id"  value="<?php echo $edita['id'] ?>">
          
          </div>
          <div class="form-group">
            <label for="lblDesc"> Descrição: </label>
            <input type="text" id="txtDesc" name="txtDesc" class="form-control col-md-6"
                   value = "<?php echo $edita['descricao'] ?>">
            </div>
            <div class="form-group">
            <label for="lblQtde"> Quantidade:  </label>
            <input type= "text" id= "txtQtde" name= "txtQtde" class= "form-control col-md-6"
                   value = "<?php echo $edita['quantidade'] ?>">
            </div>
            <div class="form-group">
            <label for="lblValor"> Valor: </label>
            <input type="text" id="txtValor" name="txtValor" 
                   class="form-control col-md-6" value= "<?php echo $edita['valor']?>">
                  </div>
                  <input type="submit" id="btGravar" name="bt_Gravar"
                        class="btn btn-outline-success btn-lg" value="Adicionar">
                  <input type="reset" id="btLimpar" name="btLimpar"
                        class="btn btn-outline-secondary btn-lg" value="Limpar">
                  <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Cancelar"
                        onclick="javascript:location.href='lstnewProd.php'">
          </form>
          </div>

      </body>
</html>