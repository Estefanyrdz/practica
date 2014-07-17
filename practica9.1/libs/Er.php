<?php

class Er {
    
	public function valida_nombre($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50})*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_apellido($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50})*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_abreviatura($valor){
		$exp_reg = '/^([a-zA-Z])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_idpais($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_idcontinente($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_peso($valor){
		$exp_reg = '/^[0-9.]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_estatura($valor){
		$exp_reg = '/^[0-9.]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_edad($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_idequipo($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_idciudad($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_imagen($valor) {    
        if(preg_match("%\.(jpg)$%i",$valor)){
        	return true;
           } else{
                return false;
            }
    }	
   
	

}


?>    
