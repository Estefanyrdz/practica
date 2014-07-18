<?php 
  session_start();
  include ('../layouts/header.php');
?> 
 <div class="row">
            <div class="col-md-6">
                 <body background="autor.jpg">
                    <form id="formulario3">
                        <div class="form-group">
                           <h2 for="nombre">Formulario Autor</h2>
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" />
                        </div>
                        <div>
                            <label for="apellidos">Apellidos: </label>
                            <input type="text" id="apellidos" name="apellidos">
                        </div>
                        <div>
                            <label for="email">Email: </label>
                            <input type="text" id="email" name="email">
                        </div>
                         <button type="submit" class="btn btn-primary">Guardar</button>
                  </form>
            </div>
    </div>
<?php include ('../layouts/footer.php'); ?>