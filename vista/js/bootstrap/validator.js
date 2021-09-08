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
