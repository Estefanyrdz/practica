<?php 
  session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Equipo.php');
    include ('../../controllers/EquipoController.php');
    include ('../../libs/Er.php');
      include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
  
       $equipoC= new EquipoController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaEquipo($_POST);
    	}

?>
<br/>
       <div class="row">
        <body background="fifa.jpg">
        <div class="col-md-6">
                <form role="form" id="equipo" action="" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>">
                </div>
                <label for="exampleInputEmail1">Pais: </label>
                  <select name="idpais">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select>
              <div class="form-group">
                  <label for="escudo">Escudo:</label>
                  <input type="file" id="escudo" name="escudo">
                </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
      </div>
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>