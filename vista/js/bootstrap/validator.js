//INICIO VALIDADORES TP 1
$('#num').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        numero: {
            message : 'Ingrese un número',
            validators: {
                notEmpty: {}
            }
        }
    }
});

$('#horas').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        lunes: {
            message : 'Ingrese un número',
            validators: {
                notEmpty: {}
            }
        }
    }
});

$('#datapers').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        nombre: {
            message : 'Debe ingresar un nombre',
            validators: {
                notEmpty: {}
            }
        },
        apellido: {
            message : 'Debe ingresar un apellido',
            validators: {
                notEmpty: {}
            }
        },
        edad: {
            message: 'Debe ingresar una edad válida',
            validators: {
                notEmpty: {},
                digits: {},
                greaterThan: {
                    value: 7,
                    message: "No puede ser menor a 7"
                },
                lessThan: {
                    value: 100,
                    message: "No puede superar 99"
                }
            }
        },
        direccion: {
            message : 'Debe ingresar una dirección',
            validators: {
                notEmpty: {}
            }
        },
        genero: {
            message: 'Debe seleccionar un género',
            validators: {
                notEmpty: {}
            }
        },
        estudios: {
            message: 'Debe seleccionar un nivel',
            validators: {
                notEmpty: {}
            }
        }
    }
});

$('#operacion').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        fi: {
            message : 'Debe ingresar un numero',
            validators: {
                notEmpty: {}
            }
        },
        se: {
            message : 'Debe ingresar un numero',
            validators: {
                notEmpty: {}
            }
        },
        op: {
            message: 'Debe seleccionar una operación',
            validators: {
                notEmpty: {}
            }
        }
    }
});

$('#datos').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        nombre: {
            message : 'Debe ingresar un nombre',
            validators: {
                notEmpty: {}
            }
        },
        apellido: {
            message : 'Debe ingresar un apellido',
            validators: {
                notEmpty: {}
            }
        },
        edad: {
            message: 'Debe ingresar una edad válida',
            validators: {
                notEmpty: {}
            }
        },
        direccion: {
            message: 'Debe ingresar una dirección',
            validators: {
                notEmpty: {}
            }
        },
        estudiante: {
            message: 'Debe seleccionar una opción',
            validators: {
                notEmpty: {}
            }
        }
    }
});
//FIN VALIDADORES TP 1

//INICIO VALIDADORES TP2
$('#login').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        user: {
            message : 'Debe ingresar un usuario',
            validators: {
                notEmpty: {}
            }
        },
        pass: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar una contraseña'
                },
                stringLength: {
                    min: 8,
                    message: 'La contraseña debe tener al menos 8 caracteres'
                },
                different: {
                    field: 'user',
                    message: 'El usuario y la contraseña no pueden ser iguales'
                },
                regexp: {
                    regexp: /^[a-zA-Z0-9]+$/,
                    message: 'La contraseña solo puede tener letras y numeros'
                },
            }
        }
    }
})
.on('error.validator.bv', function(e, data) {
    // $(e.target)    --> The field element
    // data.bv        --> The BootstrapValidator instance
    // data.field     --> The field name
    // data.element   --> The field element
    // data.validator --> The current validator name

    data.element
        .data('bv.messages')
        // Hide all the messages
        .find('.help-block[data-bv-for="' + data.field + '"]').hide()
        // Show only message associated with current validator
        .filter('[data-bv-validator="' + data.validator + '"]').show();
});

$('#cinemas').bootstrapValidator({
    message: 'Este valor no es valido',
    feedbackIcons: {
        valid: 'fa fa-check',
        invalid: 'fa fa-exclamation',
        validating: 'fa fa-circle'
    },
    fields: {
        titulo: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar un titulo'
                }
            }
        },
        actores: {
            validators: {
                notEmpty: {
                    message: 'Debe ingresar al menos un nombre'
                },
                regexp: {
                    regexp: /^[0-9A-Za-zñáéíóúÑÁÉÍÓÚüÜ'\-,]+$/,
                    message: 'Debe ingresar nombres y apellidos separados por coma'
                }
            }
        },
        director: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar al menos un nombre'
                },
                regexp: {
                    regexp: /^[0-9A-Za-zñáéíóúÑÁÉÍÓÚüÜ'\-,]+$/,
                    message: 'Se detectan caracteres inválidos'
                }
            }
        },
        guion: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar al menos un nombre'
                },
                regexp: {
                    regexp: /^[0-9A-Za-zñáéíóúÑÁÉÍÓÚüÜ'\-,]+$/,
                    message: 'Se detectan caracteres inválidos'
                }
            }
        },
        produccion: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar al menos un productor',
                },
                regexp: {
                    regexp: /^[0-9A-Za-zñáéíóúÑÁÉÍÓÚüÜ;\.:'\s\-,]+$/,
                    message: 'Se detectan caracteres inválidos'
                }
            }
        },
        anio: {
            message: 'Ingrese un número válido',
            validators:{
                notEmpty:{
                    message: 'Debe ingresar un año',
                },
                digits:{
                    message: 'Solo números'
                },
                greaterThan: {
                    value: 1895,
                    message: "No puede ser menor a 1895"
                },
                lessThan: {
                    value: 2021,
                    message: "No puede superar 2021"
                }
            }
        },
        nacionalidad: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar una nacionalidad',
                },
                regexp: {
                    regexp: /^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ]+$/,
                    message: 'Se detectan caracteres inválidos'
                }
            }
        },
        genero: {
            validators:{
                notEmpty:{
                    message: 'Debe seleccionar un género',
                }
            }
        },
        duracion: {
            validators:{
                notEmpty:{
                    message: 'Debe ingresar la duración en minutos',
                },
                digits:{
                    message: 'Solo números'
                },
                greaterThan: {
                    value: 1,
                    message: "No puede ser menor a 1"
                },
                lessThan: {
                    value: 999,
                    message: "No puede superar 999"
                }
            }
        },
        restriccion: {
            validators:{
                notEmpty:{
                    message: 'Debe seleccionar una restricción de edad',
                }
            }
        }
    }
})
.on('error.validator.bv', function(e, data) {
    // $(e.target)    --> The field element
    // data.bv        --> The BootstrapValidator instance
    // data.field     --> The field name
    // data.element   --> The field element
    // data.validator --> The current validator name

    data.element
        .data('bv.messages')
        // Hide all the messages
        .find('.help-block[data-bv-for="' + data.field + '"]').hide()
        // Show only message associated with current validator
        .filter('[data-bv-validator="' + data.validator + '"]').show();
});