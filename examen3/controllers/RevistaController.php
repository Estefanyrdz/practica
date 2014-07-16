<?php
	class RevistaController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaRevista($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$conti = new Revista();
			$conti->set_nombre($datos['nombre']); 
			//$conti->set_portada($datos['portada']); 
			//$conti->set_fecha($datos['fecha']); 
		    $conti->set_volumen($datos['volumen']);
		    $conti->set_titulo($datos['titulo']); 
		    $conti->set_subtitulo($datos['subtitulo']); 
		    $conti->set_numero($datos['numero']); 
		    $conti->set_clave($datos['clave']);
		    $conti->set_directorio($datos['directorio']); 
		    $conti->set_editorial($datos['editorial']); 
		    //$conti->set_id_status($datos['id_status']);  
		   if(count($conti->errores)>0){
		   	 print_r($conti->errores);
		   }
		     die();

		}
	}


?>