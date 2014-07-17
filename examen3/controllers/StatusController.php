<?php
	class StatusController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaStatus($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$conti = new Status();
			$conti->set_status($datos['status']); 

		   if(count($conti->errores)>0){
		   	 print_r($conti->errores);
		   }
		   $conti->inserta($conti->get_atributos()); 
		     die();

		}
	}


?>