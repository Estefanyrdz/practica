$(document).ready(function() {
			$(function () {
			$('.fancybox').fancybox();
			});
	
			$('#formulario3').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del autor no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del autor y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre del autor debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]+$/,
								message: 'El nombre del autor sólo puede consistir en alfabético'
							}
						}
					},
		
					apellidos: {
						message: 'Los apellidos no son válidos',
						validators: {
							notEmpty: {
								message: 'Son necesarios los apellidos y no pueden estar vacíos'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'Los apellidos deben ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'Los apellidos sólo pueden consistir en alfabético'
							}
						}
					},
					email: {
						message: 'El email no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el email y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El email debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z@]+$/,
								message: 'El email sólo puede consistir en alfabético'
							}
						}
					},
					
				}
			});<!---Fin del formulario1->
			});<!---FIN DEL READY->
		