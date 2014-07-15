<?php
	class EstadioController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaEstadio($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$esta = new Estadio();
			$esta->set_Nombre($datos['Nombre']); 

		   if(count($esta->errores)>0){
		   	 print_r($esta->errores);
		   }
		     die();

		}
	}


?>