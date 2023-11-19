
$(document).ready(function () {
    $(document).on('click', 'a[data-role=update-usuario]', function () {
        var id = $(this).data('id_usuario');
        var run = $('#' + id).children('td[data-target=run]').text();
        var nombre = $('#' + id).children('td[data-target=nombre]').text();
        var apellido = $('#' + id).children('td[data-target=apellido]').text();
        var correo = $('#' + id).children('td[data-target=correo]').text();
        var tipo_usuario = $('#' + id).children('td[data-target=tipo_usuario]').text();
        var telefono = $('#' + id).children('td[data-target=telefono]').text();
        var salud = $('#' + id).children('td[data-target=salud]').text();
        var foto = $('#' + id).children('td[data-target=foto]').text();
        var contraseña = $('#' + id).children('td[data-target=contraseña]').text();

        $('#run').val(run);
        $('#nombre').val(nombre);
        $('#apellido').val(apellido);
        $('#correo').val(correo);
        $('#tipo_usuario').val(tipo_usuario);
        $('#telefono').val(telefono);
        $('#salud').val(salud);
        $('#foto').val(foto);
        $('#contraseña').val(contraseña);
        $('#id_usuario').val(id);
        $('#editarmodalAdmin').modal('toggle');

    })
})


$('#save-usuario').click(function () {
    var id = $('#id_usuario').val();
    var run = $('#run').val();
    var nombre = $('#nombre').val();
    var apellido = $('#apellido').val();
    var correo = $('#correo').val();
    var tipo_usuario = $('#tipo_usuario').val();
    var telefono = $('#telefono').val();
    var salud = $('#salud').val();
    var foto = $('#foto').val();
    var contraseña = $('#contraseña').val();

    $.ajax({
        url: 'pages/admin/actions/actions_Usuarios/admin_updateUsuarios.php',
        method: 'post',
        data: { run: run, nombre: nombre, apellido: apellido, correo : correo, tipo_usuario: tipo_usuario, telefono : telefono, salud : salud, foto : foto, contraseña : contraseña, id: id },
        success: function (response) {
            $('#' + id).children('td[data-target=run]').text(run);
            $('#' + id).children('td[data-target=nombre]').text(nombre);
            $('#' + id).children('td[data-target=apellido]').text(apellido);
            $('#' + id).children('td[data-target=correo]').text(correo);
            $('#' + id).children('td[data-target=tipo_usuario]').text(tipo_usuario);
            $('#' + id).children('td[data-target=telefono]').text(telefono);
            $('#' + id).children('td[data-target=salud]').text(salud);
            $('#' + id).children('td[data-target=foto]').text(foto);
            $('#' + id).children('td[data-target=contraseña]').text(contraseña);
            $('#editarmodalAdmin').modal('toggle');

            
        }
    });
});