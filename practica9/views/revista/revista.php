<?php 
  session_start();
    include ('../layouts/header.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../models/Conexion.php');
    include ('../../models/Modelo.php');
    include ('../../models/Revista.php');
    include ('../../controllers/RevistaController.php');
    include ('../../libs/Er.php');
  
      if(isset($_POST['nombre'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
    	}
      
      if(isset($_POST['portada'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
    if(isset($_POST['fecha'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
      if(isset($_POST['volumen'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
      if(isset($_POST['titulo'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
    if(isset($_POST['subtitulo'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
      if(isset($_POST['numero'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
      if(isset($_POST['clave'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
    if(isset($_POST['directorio'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
      if(isset($_POST['editorial'])){
        $equipoC= new RevistaController();
        $equipoC->insertaRevista($_POST);
      }
?>
<br/>
        <div class="row">
            <div class="col-md-6">
                 <body background="revista.jpg">
                   <form role="form" id="revista" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                           <h2 for="nombre">Formulario Revista</h2>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" />
                        </div>
                        <div>
                            <label for="portada">Portada: </label>
                            <input type="file" id="portada" name="portada">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="text" class="form-control" id="fecha" name="fecha" />
                        </div>
                        <div class="form-group">
                            <label for="volumen">Volumen</label>
                            <input type="text" class="form-control" id="volumen" name="volumen" />
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" />
                        </div>
                        <div class="form-group">
                            <label for="subtitulo">Subtitulo</label>
                            <input type="text" class="form-control" id="subtitulo" name="subtitulo" />
                        </div>
                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="text" class="form-control" id="numero" name="numero" />
                        </div>
                        <div class="form-group">
                            <label for="clave">Clave</label>
                            <input type="text" class="form-control" id="clave" name="clave" />
                        </div>
                        <div class="form-group">
                            <label for="directorio">Directorio</label>
                            <textarea type="text" class="form-control" id="directorio" name="directorio"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editorial">Editorial</label>
                            <textarea type="text" class="form-control" id="editorial" name="editorial"></textarea>
                        </div>
                          <div class="form-group">
                            <label for="id_status">Status</label>
                              <select name="id_status">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
            </div>
    </div>
<?php include ('../layouts/footer.php'); ?>