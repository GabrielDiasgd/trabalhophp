<?php
  //$conexao variVEL PHP
  session_start();
  if (!isset($_SESSION['user'])) {
    header("location:./login.html");
  }



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

  $compra = trim($_REQUEST['id']);
  $rs = mysql_query("SELECT * FROM item_compra where compra=$compra;");
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>Listagem de Produtos </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-md-5">
    <h1 class="prymary">Lista de Produtos</h1>
    <br>
                        <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Voltar"
                        onclick="javascript:location.href='Inicio.html'">
                        <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Adicionar"
                        onclick="javascript:location.href='LstnewProd.php'">
  <br>
  <br>
  <br>
    <table class="table table-striped table-dark">
      <tr>
        <th>Nr da compra</th>
        <th>ID</th>
        <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor</th>
          <th colspan="2" class="text-left">Adicionar</th>
         
      </tr>
      <?php While ($linha = mysql_fetch_array($rs)) {?>
         <tr>
          <td><?php echo $linha['compra'] ?></td>
          <td><?php echo $linha['id']  ?></td>
          <td><?php echo $linha['produto'] ?></td>
          <td><?php echo $linha['quantidade']  ?></td>
          <td><?php echo number_format($linha['valor'],2,',','.') ?></td>
          <td>
            <button class="btn btn-outline-warning bt-sm" 
                 onclick="javascript:location.href='frmAdcProd.php?id=' +
                  <?php echo $linha['produto'] ?>"><i class="fas fa-edit"></i></button>
                  <td>
                                </td>
          </td>
</tr>  </div>
         <?php } ?></table>
  
  </body>
  </html>