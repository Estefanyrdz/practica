<?php
	class StatusController extends Status{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Status();
		}
		public function insertaStatus($datos){
			
			//$conti = new Status();
			$this->set_status($datos['status']); 

		   if(count($this->errores)>0){
		   	 	$this->muestra_errores=true;
		   }else{
		   	  $this->inserta($this->get_atributos()); 
		   }

		}
	}


?>