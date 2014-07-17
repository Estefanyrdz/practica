<?php
	class ContinenteController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaContinente($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$conti = new Continente();
			$conti->set_nombre($datos['nombre']); 
		   if(count($conti->errores)>0){
		   	 print_r($conti->errores);
		   }
		   $conti->inserta($conti->get_atributos()); 
		     die();

		}
	}


?>