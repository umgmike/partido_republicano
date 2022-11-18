$(document).ready(function() {
    $.validator.setDefaults({});
    $('#NewUserCreate').validate({
        rules: {

            nombre: {
                required: true,
                minlength: 2
            },

            apellido: {
                required: true,
                minlength: 2
            },

            usuario: {
                required: true,
                minlength: 5
            },

            password: {
                required: true,
                minlength: 8
            },

            re_password: {
                required: true,
                minlength: 8
            },
        },
        messages: {

            nombre: {
                required: "Por favor ingrese un nombre para el usuario",
                minlength: "Ingrese un nombre no menor a 2 caracteres"
            },

            apellido: {
                required: "Por favor ingrese un apellido para el usuario",
                minlength: "Ingrese un apellido no menor a 2 caracteres"
            },

            usuario: {
                required: "Por favor ingrese usuario",
                minlength: "Su usuario debe contener al menos 5 caracteres"
            },

            password: {
                required: "Por favor ingrese una contraseña",
                minlength: "Su contraseña debe contener al menos 8 caracteres"
            },

            re_password: {
                required: "Por favor repita la contraseña",
                minlength: "Su contraseña debe contener al menos 8 caracteres"
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
