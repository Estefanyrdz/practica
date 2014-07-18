<?php
	class EquipoController{
		
		public $muestra_errores = false;
		function __construct(){
			 //parent::Usuario();
		}
		public function insertaEquipo($datos){
		
			$equipo = new Equipo();
			$equipo->set_nombre($datos['nombre']); 
		    $equipo->set_idpais($datos['idpais']); 
		    $equipo->set_escudo($_FILES['escudo']['name']);
		     move_uploaded_file($_FILES['escudo']['tmp_name'],"../img/".$_FILES['escudo']['name']); 
		   if(count($equipo->errores)>0){
		   	 print_r($equipo->errores);
		   }
		   $equipo->inserta($equipo->get_atributos()); 
		     die();

		}
	}


?>