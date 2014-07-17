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
		    //$pos->set_bandera($pos['bandera']);
		   if(count($pos->errores)>0){
		   	 print_r($pos->errores);
		   }
		   $pos->inserta($pos->get_atributos()); 
		     die();

		}
	}


?>