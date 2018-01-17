$(document).ready(function () {
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
        //$("#div_alerta").html('');
        //$("#div_alerta").removeClass('alert alert-danger');
    });
    $("#boton_registro").on('click', function () {
        var array= {
            // todo Datos Alumno
            nombres: $("input[name=nombres]").val(),
            apellido_pat:$("input[name=apellido_pat]").val(),
            apellido_mat:$("input[name=apellido_mat]").val(),
            rut:$("input[name=rut]").val(),
            fecha_nacimiento:$("input[name=fecha_nacimiento]").val(),
            domicilio:$("input[name=domicilio]").val(),
            numero:$("input[name=numero]").val(),
            curso:$("select[name=curso]").val(),
            fecha_matricula:$("input[name=fecha_matricula]").val(),
            poblacion:$("input[name=poblacion]").val(),
            comuna:$("select[name=comuna]").val(),
            establecimiento:$("select[name=establecimiento]").val(),
            cual:$("input[name=cual]").val(),
            especialidad:$("select[name=especialidad]").val(),
            sector_vive:$("select[name=sector_vive]").val(),
            donde_vive:$("input[name=donde_vive]").val(),
            ascendencia:$("select[name=ascendencia]").val(),
            viaja:$("select[name=viaja]").val(),
            otros:$("input[name=otros]").val(),
            // todo Datos Padre
            nombres_padre: $("input[name=nombres_padre]").val(),
            apellido_pat_padre:$("input[name=apellido_pat_padre]").val(),
            apellido_mat_padre:$("input[name=apellido_mat_padre]").val(),
            nivel_educacional_padre:$("select[name=nivel_educacional_padre]").val(),
            rut_padre:$("input[name=rut_padre]").val(),
            fecha_nacimiento_padre:$("input[name=fecha_nacimiento_padre]").val(),
            domicilio_padre:$("input[name=domicilio_padre]").val(),
            ingreso_padre:$("input[name=ingreso_padre]").val(),
            // todo Datos Madre
            nombres_madre: $("input[name=nombres_madre]").val(),
            apellido_pat_madre:$("input[name=apellido_pat_madre]").val(),
            apellido_mat_madre:$("input[name=apellido_mat_madre]").val(),
            nivel_educacional_madre:$("select[name=nivel_educacional_madre]").val(),
            rut_madre:$("input[name=rut_madre]").val(),
            fecha_nacimiento_madre:$("input[name=fecha_nacimiento_madre]").val(),
            domicilio_madre:$("input[name=domicilio_madre]").val(),
            ingreso_madre:$("input[name=ingreso_madre]").val(),
            // todo Datos Familia
            integrantes: $("input[name=integrantes]").val(),
            n_hermanos:$("input[name=n_hermanos]").val(),
            educ_basica:$("input[name=educ_basica]").val(),
            educ_media:$("input[name=educ_media]").val(),
            educ_uni:$("input[name=educ_uni]").val(),
            abuelos:$("input[name=abuelos]").val(),
            tios:$("input[name=tios]").val(),
            // todo Datos Jefe Hogar
            jefe_hogar:$("select[name=jefe_hogar]").val(),
            rut_jefe_hogar: $("input[name=rut_jefe_hogar]").val(),
            religion:$("select[name=religion]").val(),
            prevision:$("select[name=prevision]").val(),
            salud:$("select[name=salud]").val(),
            // todo Datos Apoderados
            rut_apoderado: $("input[name=rut_apoderado]").val(),
            nombre_apoderado: $("input[name=nombre_apoderado]").val(),
            apellido_pat_apoderado: $("input[name=apellido_pat_apoderado]").val(),
            apellido_mat_apoderado: $("input[name=apellido_mat_apoderado]").val(),
            numero_apoderado: $("input[name=numero_apoderado]").val(),
            vinculo_alumno:$("select[name=vinculo_alumno]").val(),
            tipo_apoderado:$("select[name=tipo_apoderado]").val()

        };
        var request = envia_ajax('/codeigniter/registro/Registro_alumnos/guardar_datos_alumno',array);
        request.fail(function () {
            $("#modal_generico_body").html('Error al enviar peticion porfavor recargue la pagina');
            $("#modal_generico").modal('show');
        });
        request.done(function (data) {
            if (data.respuesta == "S") {
                $("#div_alerta").html('');
                $("#div_alerta").removeClass('alert alert-danger');

                $("#modal_generico_body").html(data.data);
                $("#modal_generico").modal('show');
            }
            else {
                $("#div_alerta").html(data.data);
                $("#div_alerta").addClass('alert alert-danger');
            }
        })
    });
    function envia_ajax(url,data) {
        var variable = $.ajax({
            url: url,
            method: "POST",
            data: data,
            "dataSrc": "data",
            dataType: "json"
        });
        return variable;
    }
});
