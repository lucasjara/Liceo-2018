<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-01-2018
 * Time: 10:15
 */
?>

<br>
<style>
    input{
        text-transform: uppercase;
    }
</style>
<div class="panel panel-primary">
    <div class="panel-heading">Sistema de Registro Liceo Politecnico de Curacautin</div>
    <div class="panel-body">
        <div id="div_alerta"></div>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#menu1">Alumnos</a></li>
            <li><a href="#menu2">Familiares</a></li>
            <li><a href="#menu3">Apoderados</a></li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Alumno</div>
                    <div class="panel-body">
                        <!-- INICIO FORMULARIO DATOS ALUMNO -->
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" name="nombres">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut" maxlength="9">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" name="numero">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-sm-3 control-label">Curso:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="curso" name="curso">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($curso as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="fecha_matricula">Fecha Matriculas:</label>
                                <input type="date" class="form-control" name="fecha_matricula">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="poblacion_villa">Poblacion/Villa:</label>
                                <input type="text" class="form-control" name="poblacion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="col-sm-3 control-label">Comuna:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="comuna" name="comuna">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($comuna as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-3 control-label">Establecimiento:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="establecimiento" name="establecimiento">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($establecimiento as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Tipo Establecimiento:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="tipo_establecimiento" disabled
                                            name="tipo_establecimiento">
                                        <option value="">Seleccione...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check col-md-2" style="padding-top: 30px;">
                                <input class="form-check-input" type="checkbox" value="" id="repite_curso">
                                <label class="form-check-label" for="repite_curso">
                                    Repite Curso
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="curso">Cual:</label>
                                <input type="text" class="form-control" name="cual">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-3 control-label">Especialidad:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="especialidad" name="especialidad">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($especialidad as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Sector vive:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="sector_vive" name="sector_vive">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($sector_vive as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="curso">Donde Vive:</label>
                                <input type="text" class="form-control" name="donde_vive">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-3 control-label">Ascendencia:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="ascendencia" name="ascendencia">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($ascendencia as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="col-sm-3 control-label">Viaja:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="viaja" name="viaja">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($viaja as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="curso">Otros:</label>
                                <input type="text" class="form-control" name="otros">
                            </div>
                            <div class="form-check col-md-3" style="padding-top: 30px;">
                                <input class="form-check-input" type="checkbox" value="" id="certificado_uno">
                                <label class="form-check-label" for="repite_curso">
                                    CERTIFICADO DE NACIMIENTO
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-check col-md-4">
                                <input class="form-check-input" type="checkbox" value="" id="certificado_dos">
                                <label class="form-check-label" for="repite_curso">
                                    CERTIFICADO PROGRAMA PUENTE
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="certificado_tres">
                                <label class="form-check-label" for="repite_curso">
                                    CERTIFICADO DE ESTUDIO
                                </label>
                            </div>
                            <div class="form-check col-md-2">
                                <input class="form-check-input" type="checkbox" value="" id="certificado_cuatro">
                                <label class="form-check-label" for="repite_curso">
                                    NECESITA PAE
                                </label>
                            </div>
                            <div class="form-check col-md-3">
                                <input class="form-check-input" type="checkbox" value="" id="certificado_cinco">
                                <label class="form-check-label" for="repite_curso">
                                    PERTENECE AL PROG. PUENTE
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TERMINO FORMULARIO DATOS ALUMNO -->
            </div>
            <div id="menu2" class="tab-pane fade in">
                <br>
                <div class="panel panel-primary">
                    <!-- INICIO FORMULARIO DATOS PADRE -->
                    <div class="panel-heading">Datos Padre</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" name="nombres_padre">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_padre">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_padre">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-sm-8 control-label">Nivel Educacional:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="nivel_educacional" name="nivel_educacional_padre">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($nivel_educacional as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_padre">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento_padre">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio_padre">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Ingreso:</label>
                                <input type="number" class="form-control" name="ingreso_padre">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN FORMULARIO DATOS PADRE -->
                <!-- INICIO FORMULARIO DATOS MADRE -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Madre</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="nombres">Nombres:</label>
                                <input type="text" class="form-control" name="nombres_madre">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_madre">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_madre">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-sm-8 control-label">Nivel Educacional:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="nivel_educacional" name="nivel_educacional_madre">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($nivel_educacional as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_madre">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento_madre">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio_madre">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Ingreso:</label>
                                <input type="number" class="form-control" name="ingreso_madre">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN FORMULARIO DATOS MADRE -->
                <!-- INICIO FORMULARIO DATOS FAMILIA -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Familia</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="integrantes">Integrantes:</label>
                                <input type="number" class="form-control" name="integrantes" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="integrantes">N* Hermanos:</label>
                                <input type="number" class="form-control" name="n_hermanos" value="0">
                            </div>
                            <div class="form-check col-md-3" style="padding-top: 30px;">
                                <input class="form-check-input" type="checkbox" value="" id="hermanos_estudiando">
                                <label class="form-check-label" for="repite_curso">
                                    HERMANOS ESTUDIANDO
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="integrantes">Educacion Basica:</label>
                                <input type="number" class="form-control" name="educ_basica" value="0">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Educacion Media:</label>
                                <input type="number" class="form-control" name="educ_media" value="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="integrantes">Educacion Universitaria:</label>
                                <input type="number" class="form-control" name="educ_uni" value="0">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Abuelos:</label>
                                <input type="number" class="form-control" name="abuelos" value="0">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Tios:</label>
                                <input type="number" class="form-control" name="tios" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN FORMULARIO DATOS FAMILIA -->
                <!-- INICIO FORMULARIO DATOS JEFE DE HOGAR -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Jefe de Hogar</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="col-sm-8 control-label">Jefe de Hogar:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="jefe_hogar" name="jefe_hogar">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($vinculo_alumno as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_jefe_hogar">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Religion:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="religion" name="religion">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($religion as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Prevision:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="prevision" name="prevision">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($prevision as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Salud:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="salud" name="salud">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($salud as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN FORMULARIO DATOS JEFE DE HOGAR -->
            </div>
            <div id="menu3" class="tab-pane fade in">
                <br>
                <!-- INICIO FORMULARIO DATOS APODERADO -->
                <div class="panel panel-primary">
                    <div class="panel-heading">Datos Apoderado</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_apoderado">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Nombres:</label>
                                <input type="text" class="form-control" name="nombre_apoderado">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_apoderado">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_apoderado">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Telefono:</label>
                                <input type="text" class="form-control" name="numero_apoderado">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Vinculo con Alumno:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="vinculo_alumno" name="vinculo_alumno">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($vinculo_alumno as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-sm-8 control-label">Tipo Apoderado:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="tipo_apoderado" name="tipo_apoderado">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        foreach ($tipo_apoderado as $row) {
                                            echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 col-md-offset-1">
                            <button type="button" class="btn btn-primary" id="boton_registro"><span class="glyphicon glyphicon-plus"></span> Registrar Datos Alumno</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- FIN FORMULARIO DATOS JEFE DE HOGAR -->
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('/public/js/registro/registro_alumnos/script.js') ?>"></script>
</div>
