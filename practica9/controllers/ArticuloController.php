<?php
	class ArticuloController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaArticulo($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$conti = new Articulo();
			$conti->set_nombre($datos['nombre']); 
			$conti->set_resumen($datos['resumen']); 
			$conti->set_abstract($datos['abstract']); 
			$conti->set_introduccion($datos['introduccion']); 
			$conti->set_metodologia($datos['metodologia']); 
			$conti->set_contenido($datos['contenido']); 
			//$conti->set_fecha_creacion($datos['fecha_creacion']); 
			$conti->set_archivo_pdf($datos['archivo_pdf']); 
			$conti->set_id_status($datos['id_status']); 
			$conti->set_conclusiones($datos['conclusiones']); 
			$conti->set_agradecimientos($datos['agradecimientos']); 
			$conti->set_referencias($datos['referencias']); 
		   if(count($conti->errores)>0){
		   	 print_r($conti->errores);
		   }
		   	$conti->inserta($conti->get_atributos()); 
		   	die();

		}
	
	}


?>