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
  $rs = mysql_query("SELECT * FROM cliente;");
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
  	<h1 class="prymary">Lista de Clientes</h1>
  	<br>
  	<input type="button" id="bt_Adc" name="bt_Adc"
												class="btn btn-outline-secondary btn-lg" value="Inserir"
												onclick="javascript:location.href='frminsCliente.html'">	
                        <input type="button" id="bt_logout" name="bt_logout"
                        class="btn btn-outline-info btn-lg" value="LogOut"
                        onclick="javascript:location.href='logout.php'">
                        <input type="button" id="bt_Cancel" name="bt_Cancel"
                        class="btn btn-outline-danger btn-lg" value="Voltar"
                        onclick="javascript:location.href='Inicio.html'">
	<br>
	<br>
  	<table class="table table-striped table-dark">
  		<tr>
  			<th>ID</th>
  			<th>Nome</th>
  		    <th>Emal</th>
  		    <th>CPF</th>
  		    <th colspan="2" class="text-center">Operações</th>
  		   
  		</tr>
  		<?php While ($linha = mysql_fetch_array($rs)) {?>
         <tr>
         	<td><?php echo $linha['id']  ?></td>
         	<td><?php echo $linha['nome'] ?></td>
         	<td><?php echo $linha['email']  ?></td>
          <td><?php echo $linha['cpf']  ?></td>
         	
         	<td>
         		<button class="btn btn-outline-warning bt-sm" 
         			   onclick="javascript:location.href='frmEdtCliente.php?id=' +
         			    <?php echo $linha['id'] ?>"><i class="fas fa-edit"></i></button>
         			    <td> 
         	   	<button class="btn btn-outline-danger bt-sm" 
         			   onclick="javascript:location.href='frmRemCliente.php?id=' +
         			    <?php echo $linha['id'] ?>"><i class="fas fa-trash-alt"></i></button>

         			   
         			    </td>
         	</td>
         	   

         </tr>	</div>
         
        <?php } ?>
  	</table>
  
  </body>
  </html>