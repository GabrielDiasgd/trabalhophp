<?php  ?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Editar Produtos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="container">
	<h1>Fazer Pedido</h1>
	<form id="frmPed" name="frmPed" method="POST" action="insPedido.php" role="form">
		<div class="form-group"> 
         <label for="lblCliente">Produto</label>
          <?php 
         $conexao = mysql_connect("localhost", "root", "");
         $banco = mysql_select_db("trab");
         $rscli = mysql_query("SELECT * FROM produto;");
         
      
          ?>
         <select name="slcCliente" id="slcCliente" class="form-control">
         <?php   $row = mysql_fetch_array($rscli);?>
         <option value="<?php echo $row['id'] ?>" selected>
         	<?php echo $row['descricao'];?>
         	</option>
         	<?php while($row = mysql_fetch_array($rscli)) {?>
         		<option value="<?php echo $row['id'] ?>"><?php echo $row['descricao'];?></option>
         	<?php } ?>
          </select>
  
   
<br>
<div class="form-group">
	<label for="lblData">Data: </label>
	<input type="date" class="form-control" name="txtdata" id="txtdata"
	 		value="<?php(new DATETIME())->format('y-m-d')?>">
</div>
<input type="submit" id="btGravar" name="bt_Gravar"
                        class="btn btn-outline-success btn-lg" value="Gravar">
                  <input type="reset" id="btLimpar" name="btLimpar"
                        class="btn btn-outline-secondary btn-lg" value="Limpar">
                  <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Cancelar"
                        onclick="javascript:location.href='listarPed.php'">
</body>
</form>
</html>