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
    public function valida_status($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_apellidos($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50})*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_resumen($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_abstract($valor){
		$exp_reg = '/^([a-zA-Z])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_introduccion($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_metodologia($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_contenido($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_archivo_pdf($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_conclusiones($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_agradecimientos($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_referencias($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_id_status($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_volumen($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_numero($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_clave($valor){
		$exp_reg = '/^[0-9]$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
		public function valida_titulo($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_subtitulo($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_directorio($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_editorial($valor){
		$exp_reg = '/^([a-zA-Z üÜáéíóúÁÉÍÓÚñÑ])*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	public function valida_email($valor){
		$exp_reg = '/^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$/'; 
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
    public function valida_Fecha($valor){
    $sep = '[/-.]';
    $reg = '/^(((0?[1-9]|1d|2[0-8]){$sep}(0?[1-9]|1[012])|(29|30){$sep}(0?[13456789]|1[012])|31{$sep}(0?[13578]|1[02])){$sep}(19|[2-9]d)d{2}|29{$sep}0?2{$sep}((19|[2-9]d)(0[48]|[2468][048]|[13579][26])|(([2468][048]|[3579][26])00)))$/';
    return preg_match($reg, $valor);
}

}



?>    
