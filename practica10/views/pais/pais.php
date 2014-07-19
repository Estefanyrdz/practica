<?php 
 session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Pais.php');
    include ('../../controllers/PaisController.php');
    include ('../../libs/Er.php');
      include ('../../libs/Fun.php');

       $funErrores = new FunErrores();
     $equipoC= new PaisController();
      if(isset($_POST['nombre'])){
        $equipoC->insertaPais($_POST);
        }

?>

<br/>
            <div class="row">
               <body background="fifa.jpg">
                <div class="col-md-6">
                    <form role="form" id="pais" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nombre">Nombre: </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre();?>"/>
                      </div>
                       <label for="exampleInputEmail1">Continente: </label>
                          <select name="idcontinente">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          </select>
                      <div class="form-group">
                        <label for="bandera">Bandera: </label>
                        <input type="file" id="bandera" name="bandera"/>
                      </div>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                     
                </div>  
            </div>
<?php $funErrores->alertErrores($equipoC); ?> 
<?php include ('../layouts/footer.php'); ?>     