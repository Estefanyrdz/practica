$(document).ready(function() {
			$(function () {
			$('.fancybox').fancybox();
			});
	
			$('#formulario4').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					status: {
						message: 'El status no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el status y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El status debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]+$/,
								message: 'El status sólo puede consistir en alfabético'
							}
						}
					},
					
				}
			});<!---Fin del formulario4->
			});<!---FIN DEL READY->
		