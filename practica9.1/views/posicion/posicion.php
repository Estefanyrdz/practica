<?php 
 session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Posicion.php');
    include ('../../controllers/PosicionController.php');
    include ('../../libs/Er.php');
  
      if(isset($_POST['nombre'])){
        $equipoC= new PosicionController();
        $equipoC->insertaPosicion($_POST);
    	}
      if(isset($_POST['abreviatura'])){
        $equipoC= new PosicionController();
        $equipoC->insertaPosicion($_POST);
      }
?>
<br/>
			<div class="row">
				<body background="fifa.jpg">
				<div class="col-md-6">
					<form role="form" id="posicion" action="" method="POST">
					  <div class="form-group">
						<label for="nombre">Nombre: </label>
						<input type="text" class="form-control" id="nombre" name="nombre"/>
					  </div>
					  <div class="form-group">
						<label for="abreviatura">Abreviatura: </label>
						<input type="text" class="form-control" id="abreviatura" name="abreviatura" />
					  </div>
					  <button type="submit" class="btn btn-primary">Guardar</button>
					</form>
				</div>
			</div>	