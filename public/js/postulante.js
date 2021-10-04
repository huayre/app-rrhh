$(document).ready(function () {
    $('#tabla_empleados').DataTable(
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

function abrirModalEmpleado() {
    document.getElementById('formulario_empleado').reset();
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.onclick = function () {
        validarDatosCliente();
    };
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearCliente.innerText = 'VALIDAR';
    botonCrearCliente.style.background = '#03a9f3';
    botonCrearClienteMensaje.style.display = 'none';
    document.getElementById('modalempleadotitulo').innerText = 'NUEVO POSTULANTE'
    $('#modalempleado').modal('show')
}

function validarDatosCliente() {
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearClienteMensaje.style.display = 'block'
    botonCrearClienteMensaje.disabled = 'true'
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let num_dni = document.getElementById('num_dni').value;
    let direccion = document.getElementById('direccion').value;
    let num_celular = document.getElementById('num_celular').value;
    let correo = document.getElementById('correo').value;
    let vacante_id = document.getElementById('vacante_id').value;
    let cv = document.getElementById('cv').value;

    if (nombre == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (apellido == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL APELLIDO';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (num_dni == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL DNI';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (direccion == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LA DIRECCIÓN';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (num_celular == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NÚMERO DE CELULAR';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (correo == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL CORREO';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (vacante_id == 0) {
        botonCrearClienteMensaje.innerText = 'SELECCIONE VACANTE';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (cv == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE CV';
        botonCrearClienteMensaje.style.background = 'red';
    } else {
        botonCrearClienteMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearClienteMensaje.style.background = '#00c292';
        botonCrearCliente.innerText = 'GUARDAR'
        botonCrearCliente.onclick = function () {
            guardarEmpleado();
        };
    }

}

function guardarEmpleado() {
    let formularioEmpelados = document.getElementById('formulario_empleado');
    let datos = new FormData(formularioEmpelados);
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.disabled = 'false'
    $.ajax({
        method: 'POST',
        data: datos,
        url: 'postulante',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modalempleado').modal('hide')
            if (datosServidor.mensaje == 'success') {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'El empleado ' + datosServidor.recurso.nombre + ' ' + datosServidor.recurso.apellido + ' fue registrado correctamente',
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

function eliminarEmpleado(idCliente) {
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
                url: 'empleado/' + idCliente,
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


