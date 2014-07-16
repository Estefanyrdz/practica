<?php 
  session_start();
  include ('../layouts/header.php');
?>  
<br/>
    <div class="row">
            <div class="col-md-6">
                 <body background="revista.jpg">
                    <form id="formulario1">
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
                             <div class="input-group date" id="dobPicker" data-date-format="YYYY/DD/MM">
                            <input type="text" class="form-control" name="dob" />
                            <span class="input-group-addon">
                                <span class="glyphicon-calendar glyphicon"></span>
                            </span>
                        </div>
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
                    </form>
            </div>
    </div>
<?php include ('../layouts/footer.php'); ?>