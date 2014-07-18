<?php 
  session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Status.php');
    include ('../../controllers/StatusController.php');
    include ('../../libs/Er.php');
  
      if(isset($_POST['status'])){
        $equipoC= new StatusController();
        $equipoC->insertaStatus($_POST);
    	}
?>
			<div class="row">
			 <body background="status.jpg">
				<div class="col-md-6">
					<form role="form" id="status" action="" method="POST">
					  <div class="form-group">
             <h2 for="nombre">Formulario Status</h2>
						<label for="status">Status: </label>
						<input type="text" class="form-control" id="status" name="status" placeholder="">
					  </div>
                     <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	
<?php include ('../layouts/footer.php'); ?>
