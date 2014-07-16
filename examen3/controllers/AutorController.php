<?php
	class AutorController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaAutor($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$conti = new Autor();
			$conti->set_nombre($datos['nombre']); 
			$conti->set_apellidos($datos['apellidos']); 
			$conti->set_email($datos['email']); 
		   if(count($conti->errores)>0){
		   	 print_r($conti->errores);
		   }
		     die();

		}
	}


?>