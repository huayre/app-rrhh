$(document).ready(function () {
    $('#tabla_platos').DataTable(
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

function abrirModalPlato() {
    document.getElementById('formulario_plato').reset();
    let botonCrearPlato = document.getElementById('btn_crear_plato');
    botonCrearPlato.onclick = function () {
        validarDatosPlato();
    };
    let botonCrearPlatoMensaje = document.getElementById('btn_crear_plato_mensaje');
    botonCrearPlato.innerText = 'VALIDAR';
    botonCrearPlato.style.background = '#03a9f3';
    botonCrearPlatoMensaje.style.display = 'none';
    document.getElementById('modalplatotitulo').innerText = 'NUEVO PLATO'
    $('#modalplato').modal('show');
}

function validarDatosPlato() {
    let botonCrearPlato = document.getElementById('btn_crear_plato');
    let botonCrearPlatoMensaje = document.getElementById('btn_crear_plato_mensaje');
    botonCrearPlatoMensaje.style.display = 'block'
    botonCrearPlatoMensaje.disabled = 'true'
    let nombre = document.getElementById('nombre').value;
    let descripcion = document.getElementById('descripcion').value;
    let precio = document.getElementById('precio').value;
    let imagen = document.getElementById('imagen');

    if (nombre == '') {
        botonCrearPlatoMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearPlatoMensaje.style.background = 'red';
    } else if (descripcion == '') {
        botonCrearPlatoMensaje.innerText = 'INGRESE LA DESCRIPCIÓN';
        botonCrearPlatoMensaje.style.background = 'red';
    } else if (precio == '') {
        botonCrearPlatoMensaje.innerText = 'INGRESE EL PRECIO';
        botonCrearPlatoMensaje.style.background = 'red';
    } else if (imagen.files.length == 0) {
        botonCrearPlatoMensaje.innerText = 'SELECCIONE UNA IMAGEN';
        botonCrearPlatoMensaje.style.background = 'red';
    } else {
        botonCrearPlatoMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearPlatoMensaje.style.background = '#00c292';
        botonCrearPlato.innerText = 'GUARDAR'
        botonCrearPlato.onclick = function () {
            guardarPlato();
        };
    }

}

function guardarPlato() {
    let formularioPlato = document.getElementById('formulario_plato');
    let datos = new FormData(formularioPlato);
    let botonCrearPlato = document.getElementById('btn_crear_plato');
    botonCrearPlato.disabled = 'false'
    $.ajax({
        method: 'POST',
        data: datos,
        url: 'platos',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modalplato').modal('hide')
            if (datosServidor.mensaje == 'success') {
                Swal.fire({
                    title: 'Correcto!',
                    text: 'El plato ' + datosServidor.recurso.nombre + ' fue registrado correctamente',
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

function  BuscarEmpleado(){
    let fechaInicio = document.getElementById('fechaInicio');
    let fechaFin = document.getElementById('fechaFin');

}


