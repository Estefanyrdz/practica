<?php 
  session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Estadio.php');
    include ('../../controllers/EstadioController.php');
    include ('../../libs/Er.php');
  
      if(isset($_POST['Nombre'])){
        $equipoC= new EstadioController();
        $equipoC->insertaEstadio($_POST);
    	}
?>
<br/><br/>
			<div class="row">
			 <body background="fifa.jpg">
				<div class="col-md-6">
					<form role="form" id="estadio" action="" method="POST">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="">
					  </div>
                         <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php include ('../layouts/footer.php'); ?>
