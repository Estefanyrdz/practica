
<?php 
  session_start();
  include ('../layouts/header.php');
?>
<div class="container"> 
<body background="fondo.jpg">
      <div class="row">
        <div class="col-md-12">
          <p>
                <ul>
                  <li><a class="fancybox fancybox.iframe" href="articulo.php">Articulo</a></li>
                  <li><a class="fancybox fancybox.iframe" href="revista.php">Revista</a></li>
                  <li><a class="fancybox fancybox.iframe" href="status.php">Status</a></li>
                  <li><a class="fancybox fancybox.iframe" href="autor.php">Autor</a></li>
                </ul>
            </p>
          </div>
        </div>
      </div>
<?php include ('../layouts/footer.php'); ?>
