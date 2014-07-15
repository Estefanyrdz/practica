<?php
	class PaisController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaPais($datos){
			echo "<pre>datos:";
	      	print_r($datos);
	      	echo "</pre>";
			$pais = new Pais();
			$pais->set_nombre($datos['nombre']); 
		    //$pais->set_idcontinente($datos['idcontinente']); 
		    //$equipo->set_bandera($datos['bandera']);
		   if(count($pais->errores)>0){
		   	 print_r($pais->errores);
		   }
		     die();

		}
	}


?>