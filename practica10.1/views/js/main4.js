$(document).ready(function() {
			$(function () {
			$('.fancybox').fancybox();
			});
		 $(function () {
		  $('#fecha_creacion')
		        .datetimepicker({
		            pickTime: false
		        })
		        .on('dp.change dp.show', function(e) {
		            $('#formulario2')
		                .data('bootstrapValidator')
		                .updateStatus('', 'NOT_VALIDATED', null)
		                .validateField('dob');
		        });
		      
		      });
	
			$('#formulario2').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre del articulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del articulo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre del articulo debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El nombre del articulo sólo puede consistir en alfabético'
							}
						}
					},
						resumen: {
						message: 'El resumen no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el resumen y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El resumen debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El resumen sólo puede consistir en alfabético'
							}
						}
					},
					abstract: {
						message: 'El abstract no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el abstract y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El abstract debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El abstract sólo puede consistir en alfabético'
							}
						}
					},
					introduccion: {
						message: 'La introduccion no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesaria la introduccion y no puede estar vacía'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'La introduccion debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'La introduccion sólo puede consistir en alfabético'
							}
						}
					},
					metodologia: {
						message: 'La metodologia no es válida',
						validators: {
							notEmpty: {
								message: 'Es necesaria la metodologia y no puede estar vacía'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'La metodologia debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'LA metodologia sólo puede consistir en alfabético'
							}
						}
					},
					 contenido: {
						message: 'El contenido no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el contenido y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El contenido debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético y numerico'
							}
						}
					},
					dob: {
               			 validators: {
		                    notEmpty: {
		                        message: 'The date is required and cannot be empty'
		                    },
		                    date: {
		                        format: 'YYYY/DD/MM',
		                        message: 'The value is not a valid date'
		                    }
		                }
		            },
						archivo_pdf: {
						message: 'El archivo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el archivo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El archivo debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El archivo sólo puede consistir en alfabético'
							}
						}
					},
					id_status: {
						message: 'El id no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el idy no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 5,
								message: 'El id debe ser mayor de 1 y menos de 5 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'El id sólo puede consistir en numerico'
							}
						}
					},
					conclusiones: {
						message: 'Las conclusiones no son válidas',
						validators: {
							notEmpty: {
								message: 'Son necesarias las conclusiones y no pueden estar vacías'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'Las conclusiones deben ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'Las conclusiones sólo pueden consistir en alfabético'
							}
						}
					},
					agradecimientos: {
						message: 'Los agradecimientos no son válidos',
						validators: {
							notEmpty: {
								message: 'Son necesarios los agradecimientos y no pueden estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'Los agradecimientos deben ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'Los agradecimientoso sólo pueden consistir en alfabético'
							}
						}
					},
					referencias: {
						message: 'Las referencias no son válidas',
						validators: {
							notEmpty: {
								message: 'Son necesarias las referencias y no pueden estar vacías'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'Las referencias deben ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'LAs referencias sólo puede consistir en alfabético'
							}
						}
					},

				}
			});<!---Fin del formulario1->
			});<!---FIN DEL READY->
		
			