<?php 
  session_start();
  include ('../layouts/header.php');
?> 
<div class="row">
			 <body background="status.jpg">
				<div class="col-md-6">
					<form id="formulario4">
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