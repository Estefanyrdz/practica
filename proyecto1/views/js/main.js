$(document).ready(function() {
			$(function () {
			$('.fancybox').fancybox();
			});
		 $(function () {
		  $('#dobPicker')
		        .datetimepicker({
		            pickTime: false
		        })
		        .on('dp.change dp.show', function(e) {
		            $('#formulario1')
		                .data('bootstrapValidator')
		                .updateStatus('', 'NOT_VALIDATED', null)
		                .validateField('dob');
		        });
		      
		      });
		$(document).ready(function() {
			$(".elemento1").hide("slow");
			$(".elemento2").hide("slow");
			$(".elemento3").hide("slow");
			
		$("#boton").click(function(){	
			$(".elemento1").show("fats");	
					});
		$("#boton2").click(function(){
			$(".elemento3").hide("fats");
			$(".elemento2").show("fats");		
					});
		$("#boton3").click(function(){
			$(".elemento2").hide("fats");
			$(".elemento3").show("fats");		
					});
			});
			$('#formulario1').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de usuario y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético'
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
					volumen: {
						message: 'El nombre del volumen no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del volumen y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 2,
								message: 'El nombre del volumen debe ser mayor de 1 y menos de 2 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'El nombre del volumen sólo puede consistir en numero'
							}
						}
					},
					titulo: {
						message: 'El nombre del titulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del titulo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre del titulo debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El nombre del titulo sólo puede consistir en alfabético'
							}
						}
					},
					subtitulo: {
						message: 'El nombre del subtitulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del subtitulo y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre del subtitulo debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El nombre del subtitulo sólo puede consistir en alfabético'
							}
						}
					},
					numero: {
						message: 'El nombre del numero no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del numero y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 7,
								message: 'El nombre del numero debe ser mayor de 1 y menos de 7 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'El nombre del numero sólo puede consistir en número'
							}
						}
					},
					clave: {
						message: 'El nombre del subtitulo no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de la clave y no puede estar vacío'
							},
							stringLength: {
								min: 1,
								max: 12,
								message: 'El nombre de la clave debe ser mayor de 1 y menos de 12 caracteres de largo'
							},
							regexp: {
								regexp: /^[0-9]+$/,
								message: 'El nombre de la clave sólo puede consistir en numero'
							}
						}
					},
					directorio: {
						message: 'El nombre del directorio no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre del directorio y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 100,
								message: 'El nombre del directorio debe ser mayor de 6 y menos de 100 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre del directorio sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					editorial: {
						message: 'El nombre de la editorial no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de la editorial y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 50,
								message: 'El nombre de la editorial debe ser mayor de 6 y menos de 50 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z]+$/,
								message: 'El nombre de la editorial sólo puede consistir en'
							}
						}
					},		
				}
			});<!---Fin del formulario1->
			<!--Estadio2, Ciudad2 (Nombre)-->
			$('#formulario2').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					Nombre: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de usuario y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					}
				}
				});<!--Fin del formulario2-->
				<!--Pais (nombre)-->
			$('#formulario3').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de usuario y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					}
				}
				});<!--Fin del formulario3-->
				$('#formulario4').bootstrapValidator({
				message: 'Este valor no es válido',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					nombre: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de usuario y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					},
					abreviatura: {
						message: 'El nombre de la revista no es válido',
						validators: {
							notEmpty: {
								message: 'Es necesario el nombre de usuario y no puede estar vacío'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'El nombre de usuario debe ser mayor de 6 y menos de 30 caracteres de largo'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_]+$/,
								message: 'El nombre de usuario sólo puede consistir en alfabético, número y subrayado'
							}
						}
					}
				}
				});<!--Fin del formulario4-->
			});<!---FIN DEL READY->