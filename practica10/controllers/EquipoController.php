<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;

		function __construct(){
			 parent::Equipo();
		}
		public function insertaEquipo($datos){
		
			//$equipo = new Equipo();
			$this->set_nombre($datos['nombre']); 
		    $this->set_idpais($datos['idpais']); 
		    $this->set_escudo($_FILES['escudo']['name']);
		     move_uploaded_file($_FILES['escudo']['tmp_name'],"../img/".$_FILES['escudo']['name']); 
		   if(count($this->errores)>0){
		   	    $this->muestra_errores=true;
			   }else{
			   	 $this->inserta($this->get_atributos());
			   }

		}
	}


?>