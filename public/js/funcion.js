$(document).ready(function () {

    $('#tabla_funciones').DataTable(
        {
            dom: 'Bfrtip',
            buttons: [
                {
                    extend:    'copyHtml5',
                    text:      '<i class="fa fa-files-o"></i>',
                    titleAttr: 'Copy'
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="fa fa-file-excel-o text-success"></i>',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'csvHtml5',
                    text:      '<i class="fa fa-file-text-o text-primary"></i>',
                    titleAttr: 'CSV'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="fa fa-file-pdf-o text-danger"></i>',
                    titleAttr: 'PDF'
                }
            ]
        });
});

function abrirModalFuncion() {
    document.getElementById('formulario_funcion').reset();
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.onclick = function () {
        validarDatosCliente();
    };
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearCliente.innerText = 'VALIDAR';
    botonCrearCliente.style.background = '#03a9f3';
    botonCrearClienteMensaje.style.display = 'none';
    document.getElementById('modalempleadotitulo').innerText = 'NUEVA FUNCION'
    $('#modalfuncion').modal('show')
}

function validarDatosCliente() {
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearClienteMensaje.style.display = 'block'
    botonCrearClienteMensaje.disabled = 'true'

    let nombre = document.getElementById('nombre').value;
   
    if (nombre == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearClienteMensaje.style.background = 'red';
    } else {
        botonCrearClienteMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearClienteMensaje.style.background = '#00c292';
        botonCrearCliente.innerText = 'GUARDAR'
        botonCrearCliente.onclick = function () {

            guardarFuncion();
        };
    }

}

function guardarFuncion() {

    let formularioVacanetes = document.getElementById('formulario_funcion');
    let datos = new FormData(formularioVacanetes);
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.disabled = 'false'

    $.ajax({
        method: 'POST',
        data: datos,
        url: 'funciones',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modalfuncion').modal('hide')
            if (datosServidor.mensaje == 'success') {
                Swal.fire({
                    title: 'Correcto!',

                    text: 'La funcion '   + datosServidor.recurso.nombre +' fue registrada correctamente',

                    icon: 'success',
                    customClass: 'swal-height'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                })
            } else if (datosServidor.mensaje == 'errors') {
                Swal.fire({
                    title: 'Error!',
                    text: datosServidor.recurso,
                    icon: 'error',
                    customClass: 'swal-height'
                })
            }


        }
    })
}


function eliminarFuncion(idCliente) {

    Swal.fire({
        title: '¿Está seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'si, borralo!',
        cancelButtonText: 'No, cancelar!',
        customClass: 'swal-height'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                method: 'DELETE',
                url: 'funciones/' + idCliente,
                success: function (datosServidor) {
                    if (datosServidor.mensaje == 'success') {
                        Swal.fire({
                            title: 'Borrado!',
                            text: 'el empleado fue eliminado..',
                            icon: 'success',
                            customClass: 'swal-height'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    } else if (datosServidor.mensaje == 'errors') {
                        Swal.fire({
                            title: 'Error!',
                            text: datosServidor.recurso,
                            icon: 'error',
                            customClass: 'swal-height'
                        })
                    }
                }
            })
        }
    })
}


