$(document).ready(function () {

    $('#tabla_vacantes').DataTable(
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

function abrirModalVacante() {
    document.getElementById('formulario_vacante').reset();
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.onclick = function () {
        validarDatosCliente();
    };
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearCliente.innerText = 'VALIDAR';
    botonCrearCliente.style.background = '#03a9f3';
    botonCrearClienteMensaje.style.display = 'none';
    document.getElementById('modalempleadotitulo').innerText = 'NUEVA VACANTE'
    $('#modalvacante').modal('show')
}

function validarDatosCliente() {
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    let botonCrearClienteMensaje = document.getElementById('btn_crear_cliente_mensaje');
    botonCrearClienteMensaje.style.display = 'block'
    botonCrearClienteMensaje.disabled = 'true'

    let nombre = document.getElementById('nombre').value;
    let cantidad = document.getElementById('cantidad').value;
    let fecha_limite = document.getElementById('fecha_limite').value;
    let requisitos = document.getElementById('requisitos').value;
    let responsabilidades = document.getElementById('responsabilidades').value;
    let beneficios = document.getElementById('beneficios').value;

    let tipo_puesto = document.getElementById('tipo_puesto').value;
    
    let area_id = document.getElementById('area_id').value;

    if (nombre == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (cantidad == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LA CANTIDAD';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (fecha_limite == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LA FECHA';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (requisitos == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE LOS REQUISITOS';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (responsabilidades == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE RESPONSABILIDADES';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (beneficios == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE BENEFICIOS';
        botonCrearClienteMensaje.style.background = 'red';
    } else if (tipo_puesto == '') {
        botonCrearClienteMensaje.innerText = 'INGRESE EL TIPO DE PUESTO';
        botonCrearClienteMensaje.style.background = 'red';
    
    } else if (area_id == 0) {
        botonCrearClienteMensaje.innerText = 'SELECCIONE EL ÁREA DE TRABAJO';
        botonCrearClienteMensaje.style.background = 'red';
    } else {
        botonCrearClienteMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearClienteMensaje.style.background = '#00c292';
        botonCrearCliente.innerText = 'GUARDAR'
        botonCrearCliente.onclick = function () {

            guardarVacante();
        };
    }

}

function guardarVacante() {

    let formularioEmpelados = document.getElementById('formulario_vacante');
    let datos = new FormData(formularioVacantes);
    let botonCrearCliente = document.getElementById('btn_crear_cliente');
    botonCrearCliente.disabled = 'false'

    $.ajax({
        method: 'POST',
        data: datos,
        url: 'vacante',
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (datosServidor) {
            $('#modalvacante').modal('hide')
            if (datosServidor.mensaje == 'success') {
                Swal.fire({
                    title: 'Correcto!',

                    text: 'El empleado ' + datosServidor.recurso.nombre  + ' fue registrado correctamente',

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

                url: 'vacante/' + idCliente,



                success: function (datosServidor) {
                    if (datosServidor.mensaje == 'success') {
                        Swal.fire({
                            title: 'Borrado!',

                           

                            text: 'la vacante fue eliminada..',

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


