$(document).ready(function () {
   $('#tabla_vacantes').DataTable();
});
function abrirModalVacante() {
    document.getElementById('formulario_vacante').reset();
    let botonCrearVacante = document.getElementById('btn_crear_vacante');
    botonCrearVacante.onclick = function () {
        validarDatosVacante();
    };
    let botonCrearVacanteMensaje = document.getElementById('btn_crear_vacante_mensaje');
    botonCrearVacante.innerText = 'VALIDAR';
    botonCrearVacante.style.background = '#03a9f3';
    botonCrearVacanteMensaje.style.display = 'none';
    document.getElementById('modalvacantetitulo').innerText = 'NUEVA VACANTE'
    $('#modalvacante').modal('show')
}

function validarDatosVacante() {
    let botonCrearVacante = document.getElementById('btn_crear_vacante');
    let botonCrearVacanteMensaje = document.getElementById('btn_crear_vacante_mensaje');
    botonCrearVacanteMensaje.style.display = 'block'
    botonCrearVacanteMensaje.disabled = 'true'
    let nombre = document.getElementById('nombre').value;
    let cantidad = document.getElementById('cantidad').value;
    let fecha_limite = document.getElementById('fecha_limite').value;
    let requisitos = document.getElementById('requisitos').value;
    let responsabilidades = document.getElementById('responsabilidades').value;
    let beneficios = document.getElementById('beneficios').value;
    let ftipo_puesto = document.getElementById('ftipo_puesto').value;
    let area_id = document.getElementById('area_id').value;

    if (nombre == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE EL NOMBRE';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (cantidad == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE la cantidad';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (fecha_limite == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE EL DNI';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (requisitos == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE LA DIRECCIÓN';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (responsabilidades == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE EL NÚMERO DE CELULAR';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (beneficios == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE EL CORREO';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (fecha_nacimiento == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE LA FECHA DE NACIMIENTO';
        botonCrearVacanteMensaje.style.background = 'red';
    } else if (tipo_puesto == '') {
        botonCrearVacanteMensaje.innerText = 'INGRESE LA COPIA DE DNI';
        botonCrearVacanteMensaje.style.background = 'red';
   
    } else if (area_id == 0) {
        botonCrearVacanteMensaje.innerText = 'SELECCIONE EL ÁREA DE TRABAJO';
        botonCrearVacanteMensaje.style.background = 'red';
    } else {
        botonCrearVacanteMensaje.innerText = 'VALIDACIÓN CORRECTA';
        botonCrearVacanteMensaje.style.background = '#00c292';
        botonCrearVacante.innerText = 'GUARDAR'
        botonCrearVacante.onclick = function () {
            guardarVacante();
        };
    }

}

function guardarVacante() {
    let formularioVacantes = document.getElementById('formulario_vacante');
    let datos = new FormData(formularioVacantes);
    let botonCrearVacante = document.getElementById('btn_crear_vacante');
    botonCrearVacante.disabled = 'false'
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
                    text: 'la vacante ' + datosServidor.recurso.nombre + ' ' + datosServidor.recurso.cantidad + ' fue registrado correctamente',
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

function eliminarVacante(idVacante) {
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
                url: 'vacante/' + idCVacante,
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


