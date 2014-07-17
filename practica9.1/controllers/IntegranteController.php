<?php
	class IntegranteController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaIntegrante($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$int = new Integrante();
			$int->set_nombre($datos['nombre']); 
		    $int->set_idequipo($datos['idequipo']); 
		    $int->set_apellido($datos['apellido']); 
		    $int->set_peso($datos['peso']); 
		    $int->set_edad($datos['edad']); 
		    $int->set_estatura($datos['estatura']); 
		    $int->set_foto($datos['foto']);
		   if(count($int->errores)>0){
		   	 print_r($int->errores);
		   }
		   $int->inserta($int->get_atributos()); 
		     die();

		}
	}


?>