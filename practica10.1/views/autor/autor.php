<?php 
   session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Autor.php');
    include ('../../controllers/AutorController.php');
    include ('../../libs/Er.php');
     include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
      $equipoC= new AutorController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaAutor($_POST);
      }
       if(isset($_POST['apellidos'])){
        $equipoC= new AutorController();
        $equipoC->insertaAutor($_POST);
      }
       if(isset($_POST['email'])){
        $equipoC= new AutorController();
        $equipoC->insertaAutor($_POST);
      }
?>	
	 <div class="row">
            <div class="col-md-6">
                 <body background="autor.jpg">
                    <form role="form" id="autor" action="" method="POST">
                        <div class="form-group">
                           <h2 for="nombre">Formulario Autor</h2>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>"/>
                        </div>
                        <div>
                            <label for="apellidos">Apellidos: </label>
                            <input type="text" id="apellidos" name="apellidos"value="<?php echo $equipoC->get_apellidos();?>">
                        </div>
                        <div>
                            <label for="email">Email: </label>
                            <input type="text" id="email" name="email">
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                  </form>
            </div>
    </div>
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>