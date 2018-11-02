<?php
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
 $rs = mysql_query("SELECT * FROM produto;");
  $linha = mysql_fetch_array($rs);
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Buscar Produtos </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
        <div class="container col-md-5">
    <h1 class="prymary">Buscar Produtos</h1>
    <br>
    <form id="frmNovoProd" name="frmNovoProd" method="Post" action="BuscarProd.php">
        <div class="form-group">
            <label for="lblBusca"> Buscar </label> <input type="submit" id="btEnviar" name="btEnviar"
                        class="btn btn-outline-success btn-lg" value="Buscar">
            <input type="text" id="txtBusca" name="txtBusca" class="form-control col-md-6" 
                   placeholder="Informe o id do produto"> </div></form>

                   <table class="table table-striped table-dark">
      <tr>
        <th>ID</th>
        <th>Compra</th>
          <th>Quantidade</th>
          <th>Valor</th>
          <th colspan="2" class="text-center">Operações</th>
         
      </tr>
      <?php While ($linha = mysql_fetch_array($rs) == $id) {?>
         <tr>
          <td><?php echo $linha['id']  ?></td>
          <td><?php echo $linha['compra'] ?></td>
          <td><?php echo $linha['quantidade']  ?></td>
          <td><?php echo number_format($linha['valor'],2,',','.') ?></td>
          <td>
                 
                  </td>
          </td>
             

         </tr>  </div>
         
        <?php } ?>




</body>
</html>