$(document).ready(function() {
    $.validator.setDefaults({});
    $('#afiliadosCreate').validate({
        rules: {

            dpi: {
                required: true,
                minlength: 13
            },

            nombre1: {
                required: true,
                minlength: 2
            },

            apellido1: {
                required: true,
                minlength: 2
            },

            apellido2: {
                required: true,
                minlength: 2
            },

             direccion: {
                required: true
            },
        },
        messages: {

            dpi: {
                required: "Por favor ingrese un dpi para el afiliado",
                minlength: "Ingrese un dpi no menor a 13 caracteres"
            },

            nombre1: {
                required: "Por favor ingrese un nombre para el afiliado",
                minlength: "Ingrese un nombre no menor a 2 caracteres"
            },

            apellido1: {
                required: "Por favor ingrese un apellido para el afiliado",
                minlength: "Ingrese un apellido no menor a 2 caracteres"
            },

            apellido1: {
                required: "Por favor ingrese un apellido para el afiliado",
                minlength: "Ingrese un apellido no menor a 2 caracteres"
            },

            direccion: {
                required: "Por favor ingrese direccion del afiliado"
            },

        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
