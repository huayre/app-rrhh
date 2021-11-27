$(document).ready(function () {
    $('#tabla_clientes').DataTable(
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

function abrirModalCliente() {
    document.getElementById('formulario_cliente').reset();
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.onclick = function () {
        validarDatosCliente();
    };
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearCliente.innerText = 'VALIDAR';
    botonCrearCliente.style.background = '#03a9f3';
    botonCrearClienteMensaje.style.display = 'none';
    document.getElementById('modalempleadotitulo').innerText = 'NUEVO CLIENTE'
    $('#modalcliente').modal('show')
}

function validarDatosCliente() {
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearClienteMensaje.style.display = 'block'
    botonCrearClienteMensaje.disabled = 'true'
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    
    let direccion = document.getElementById('direccion').value;
    let num_celular = document.getElementById('num_celular').value;
    let referencia = document.getElementById('referencia').value;
    
    

    if (nombre == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (apellido == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL APELLIDO';
        botonCrearClienteMensaje.style.background = 'red';
    
    } else if (direccion == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LA DIRECCIÓN';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (num_celular == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NÚMERO DE CELULAR';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (referencia == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LA REFERENCIA';
        botonCrearClienteMensaje.style.background = 'red';
   
    } else {
        botonCrearClienteMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearClienteMensaje.style.background = '#00c292';
        botonCrearCliente.innerText = 'GUARDAR'
        botonCrearCliente.onclick = function () {
            guardarCliente();
        };
    }

}

function guardarCliente() {
    let formularioEmpelados = document.getElementById('formulario_cliente');
    let datos = new FormData(formularioEmpelados);
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.disabled = 'false'
    $.ajax({
        method: 'POST',
        data: datos,
        url: 'cliente',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modalcliente').modal('hide')
            if (datosServidor.mensaje == 'success') {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'El cliente ' + datosServidor.recurso.nombre + ' ' + datosServidor.recurso.apellido + ' fue registrado correctamente',
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

function eliminarCliente(idCliente) {
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
                url: 'cliente/' + idCliente,
                success: function (datosServidor) {
                    if (datosServidor.mensaje == 'success') {
                        Swal.fire({
                            title: 'Borrado!',
                            text: 'el cliente fue eliminado..',
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


