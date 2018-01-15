$(document).ready(function () {
    $('#tabla_alumnos').DataTable({
        "language": {
            "url": "/codeigniter/public/Spanish.json"
        },
        "ajax": {
            "url": "/codeigniter/mantenedores/alumnos/obtener_datos",
            "datatype": "json",
            "dataSrc": "data",
            "type": "post"
        },
        "columns": [
            {"data": "ID"},
            {
                "data": "RUT", render: function (data) {
                return formateaRut(data);
            }
            },
            {"data": "NOMBRES"},
            {"data": "APELLIDOS"},
            {
                "data": "FECHA_NACIMIENTO", render: function (data) {
                return formato_fecha(data);
            }
            },
            {"data": "DOMICILIO"},
            {"data": "NUMERO"}
        ],

    });
    function formateaRut(rut) {
        var actual = rut.replace(/^0+/, "");
        if (actual != '' && actual.length > 1) {
            var sinPuntos = actual.replace(/\./g, "");
            var actualLimpio = sinPuntos.replace(/-/g, "");
            var inicio = actualLimpio.substring(0, actualLimpio.length - 1);
            var rutPuntos = "";
            var i = 0;
            var j = 1;
            for (i = inicio.length - 1; i >= 0; i--) {
                var letra = inicio.charAt(i);
                rutPuntos = letra + rutPuntos;
                if (j % 3 == 0 && j <= inicio.length - 1) {
                    rutPuntos = "." + rutPuntos;
                }
                j++;
            }
            var dv = actualLimpio.substring(actualLimpio.length - 1);
            rutPuntos = rutPuntos + "-" + dv;
        }
        return rutPuntos;
    }
    function formato_fecha(dato) {

        var dia = dato.substring(10, 8);
        var mes = dato.substring(7, 5);
        var anio = dato.substring(0, 4);
        switch (mes) {
            case '01':
                mes = "Enero";
                break;
            case '02':
                mes = "Febrero";
                break;
            case '03':
                mes = "Marzo";
                break;
            case '04':
                mes = "Abril";
                break;
            case '05':
                mes = "Mayo";
                break;
            case '06':
                mes = "Junio";
                break;
            case '07':
                mes = "Julio";
                break;
            case '08':
                mes = "Agosto";
                break;
            case '09':
                mes = "Septiembre";
                break;
            case '10':
                mes = "Octubre";
                break;
            case '11':
                mes = "Noviembre";
                break;
            case '12':
                mes = "Diciembre";
                break;
        }
        var fecha = dia + " de " + mes + " de " + anio;
        return fecha;
    }
});