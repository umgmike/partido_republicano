$(document).ready(function () {
    $("#TableStyle").on('submit', '.form-eliminar', function () {
        event.preventDefault();
        const form = $(this);
        swal({
            title: '¿ Está seguro de realizar la opción ?',
            text: "Si no lo esta precione cancelar!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                ajaxRequest(form);
            }
        });
    });

    function ajaxRequest(form) {
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function (respuesta) {
                if (respuesta.mensaje == "ok") {
                    location.reload();
                } else {
                    Biblioteca.notificaciones('El registro no pudo ser Desactivado, hay recursos usandolo', 'HOTEL_IQUITIU', 'error');
                }
            },
            error: function () {

            }
        });
    }
});