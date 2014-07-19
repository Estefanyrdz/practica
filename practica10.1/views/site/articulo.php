<?php 
  session_start();
  include ('../layouts/header.php');
?> 
<div class="row">
            <div class="col-md-6">
                 <body background="articulo.jpg">
                    <form id="formulario2">
                        <div class="form-group">
                           <h2 for="nombre">Formulario Articulo</h2>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" />
                        </div>
                        <div>
                             <div class="form-group">
                            <label for="resumen">Resumen: </label>
                            <input type="text" class="form-control"id="resumen" name="resumen">
                        </div>
                        <div>
                             <div class="form-group">
                            <label for="abstract">Abstract: </label>
                            <input type="text" class="form-control"id="abstract" name="abstract">
                        </div>
                         <div>
                             <div class="form-group">
                            <label for="introduccion">Introduccion: </label>
                            <input type="text" class="form-control"id="introduccion" name="introduccion">
                        </div>
                        <div>
                             <div class="form-group">
                            <label for="metodologia">Metodologia: </label>
                            <input type="text" class="form-control"id="metodologia" name="metodologia">
                        </div>
                         <div>
                             <div class="form-group">
                            <label for="contenido">Contenido: </label>
                            <input type="text" class="form-control"id="contenido" name="contenido">
                        </div>
                        <div class="form-group">
                             <label for="fecha_creacion">Fecha: </label>
                             <div class="input-group date" id="fecha_creacion" data-date-format="YYYY/DD/MM">
                            <input type="text" class="form-control" name="dob" />
                            <span class="input-group-addon">
                                <span class="glyphicon-calendar glyphicon"></span>
                            </span>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="archivo_pdf">Archivo</label>
                            <input type="text" class="form-control" id="archivo_pdf" name="archivo_pdf" />
                        </div>
                        <div class="form-group">
                            <label for="id_status">Status</label>
                            <input type="text" class="form-control" id="id_status" name="id_status" />
                        </div>
                        <div class="form-group">
                            <label for="conclusiones">Conclusiones</label>
                            <input type="text" class="form-control" id="conclusiones" name="conclusiones" />
                        </div>
                        <div class="form-group">
                            <label for="agradecimientos">Agradecimientos</label>
                            <input type="text" class="form-control" id="agradecimientos" name="agradecimientos" />
                        </div>
                        <div class="form-group">
                            <label for="referencias">Referencias</label>
                            <input type="text" class="form-control" id="referencias" name="referencias" />
                        </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
            </div>
    </div>
<?php include ('../layouts/footer.php'); ?>