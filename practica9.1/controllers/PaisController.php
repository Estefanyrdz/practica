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
		     $pais->set_idcontinente($datos['idcontinente']); 
		     $pais->set_bandera($_FILES['bandera']['name']);
		     move_uploaded_file($_FILES['bandera']['tmp_name'],"../img/".$_FILES['bandera']['name']);
		   if(count($pais->errores)>0){
		   	 print_r($pais->errores);
		   }
		    $pais->inserta($pais->get_atributos()); 
		     die();

		}
	}


?>