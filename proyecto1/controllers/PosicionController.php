<?php
	class PosicionController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaPosicion($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$pos = new Posicion();
			$pos->set_nombre($datos['nombre']); 
		    $pos->set_abreviatura($datos['abreviatura']); 
		    //$equipo->set_bandera($datos['bandera']);
		   if(count($pos->errores)>0){
		   	 print_r($pos->errores);
		   }
		     die();

		}
	}


?>