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
                                <input type="text" class="form-control" name="nombres" value="<?php if(isset($alumno)){ if($alumno[0]->NOMBRES != null){echo $alumno[0]->NOMBRES;} } ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat" value="<?php if(isset($alumno)){ if($alumno[0]->APELLIDO_PAT != null){echo $alumno[0]->APELLIDO_PAT;} } ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat" value="<?php if(isset($alumno)){ if($alumno[0]->APELLIDO_MAT != null){echo $alumno[0]->APELLIDO_MAT;} } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut" maxlength="9" value="<?php if(isset($alumno)){ if($alumno[0]->RUT != null){echo $alumno[0]->RUT.'-'.$alumno[0]->DV;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" value="<?php if(isset($alumno[0]->FECHA_NACIMIENTO)){ if($alumno[0]->FECHA_NACIMIENTO != null){echo $alumno[0]->FECHA_NACIMIENTO;} } ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio" value="<?php if(isset($alumno[0]->DOMICILIO)){ if($alumno[0]->DOMICILIO != null){echo $alumno[0]->DOMICILIO;} } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" name="numero" value="<?php if(isset($alumno[0]->NUMERO)){ if($alumno[0]->NUMERO != null){echo $alumno[0]->NUMERO;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="col-sm-3 control-label">Curso:</label>
                                <div class="col-sm-12" id="sandbox-container">
                                    <select class="form-control" id="curso" name="curso">
                                        <option value="">Seleccione...</option>
                                        <?php
                                        if(isset($matricula[0]->TB_CURSO_ID)){
                                            $numero = $matricula[0]->TB_CURSO_ID;
                                        }
                                        foreach ($curso as $row) {
                                            if ($row->ID === $numero){
                                                echo '<option value="' . $row->ID . '" selected>' . $row->DESCRIPCION . '</option>';
                                            }else{
                                                echo '<option value="' . $row->ID . '">' . $row->DESCRIPCION . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="fecha_matricula">Fecha Matriculas:</label>
                                <input type="date" class="form-control" name="fecha_matricula" value="value="<?php if(isset($matricula[0]->F_MATRICULA)){ if($matricula[0]->F_MATRICULA != null){echo $matricula[0]->F_MATRICULA;} } ?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="poblacion_villa">Poblacion/Villa:</label>
                                <input type="text" class="form-control" name="poblacion" value="value="<?php if(isset($antecedente[0]->VILLA)){ if($antecedente[0]->VILLA != null){echo $antecedente[0]->VILLA;} } ?>">
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
                                <input type="text" class="form-control" name="cual" value="<?php if(isset($antecedente[0]->CUAL)){ if($antecedente[0]->CUAL != null){echo $antecedente[0]->CUAL;} } ?>">
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
                                <input type="text" class="form-control" name="donde_vive" value="<?php if(isset($antecedente[0]->DONDE_VIVE)){ if($antecedente[0]->DONDE_VIVE != null){echo $antecedente[0]->DONDE_VIVE;} } ?>">
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
                                <input type="text" class="form-control" name="otros" value="<?php if(isset($antecedente[0]->OTROS)){ if($antecedente[0]->OTROS != null){echo $antecedente[0]->OTROS;} } ?>">
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
                                <input type="text" class="form-control" name="nombres_padre" value="<?php if(isset($padre[0]->NOMBRES)){ if($padre[0]->NOMBRES != null){echo $padre[0]->NOMBRES;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_padre" value="<?php if(isset($padre[0]->APELLIDO_PAT)){ if($padre[0]->APELLIDO_PAT != null){echo $padre[0]->APELLIDO_PAT;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_padre" value="<?php if(isset($padre[0]->APELLIDO_MAT)){ if($padre[0]->APELLIDO_MAT != null){echo $padre[0]->APELLIDO_MAT;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Telefono:</label>
                                <input type="text" class="form-control" name="numero_padre" value="<?php if(isset($padre[0]->TELEFONO)){ if($padre[0]->TELEFONO != null){echo $padre[0]->TELEFONO;} } ?>">
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
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_padre" value="<?php if(isset($padre[0]->RUT)){ if($padre[0]->RUT != null){echo $padre[0]->RUT.'-'.$padre[0]->DV;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nombres">Ocupacion:</label>
                                <input type="text" class="form-control" name="ocupacion_padre" value="<?php if(isset($padre[0]->OCUPACION)){ if($padre[0]->OCUPACION != null){echo $padre[0]->OCUPACION;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento_padre" value="<?php if(isset($padre[0]->FECHA_NACIMIENTO)){ if($padre[0]->FECHA_NACIMIENTO != null){echo $padre[0]->FECHA_NACIMIENTO;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio_padre" value="<?php if(isset($padre[0]->DOMICILIO)){ if($padre[0]->DOMICILIO != null){echo $padre[0]->DOMICILIO;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Ingreso:</label>
                                <input type="number" class="form-control" name="ingreso_padre" value="<?php if(isset($padre[0]->INGRESO)){ if($padre[0]->INGRESO != null){echo $padre[0]->INGRESO;} } ?>">
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
                                <input type="text" class="form-control" name="nombres_madre" value="<?php if(isset($madre[0]->NOMBRES)){ if($madre[0]->NOMBRES != null){echo $madre[0]->NOMBRES;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_pat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_madre" value="<?php if(isset($madre[0]->APELLIDO_PAT)){ if($madre[0]->APELLIDO_PAT != null){echo $madre[0]->APELLIDO_PAT;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_madre" value="<?php if(isset($madre[0]->APELLIDO_MAT)){ if($madre[0]->APELLIDO_MAT != null){echo $madre[0]->APELLIDO_MAT;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Telefono:</label>
                                <input type="text" class="form-control" name="numero_madre" value="<?php if(isset($madre[0]->TELEFONO)){ if($madre[0]->TELEFONO != null){echo $madre[0]->TELEFONO;} } ?>">
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
                            <div class="form-group col-md-2">
                                <label for="apellido_mat">Rut:</label>
                                <input type="text" class="form-control" name="rut_madre" value="<?php if(isset($madre[0]->RUT)){ if($madre[0]->RUT != null){echo $madre[0]->RUT.'-'.$madre[0]->DV;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Ocupacion:</label>
                                <input type="text" class="form-control" name="ocupacion_madre" value="<?php if(isset($madre[0]->OCUPACION)){ if($madre[0]->OCUPACION != null){echo $madre[0]->OCUPACION;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="fecha_nacimiento_madre" value="<?php if(isset($madre[0]->FECHA_NACIMIENTO)){ if($madre[0]->FECHA_NACIMIENTO != null){echo $madre[0]->FECHA_NACIMIENTO;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nombres">Direccion:</label>
                                <input type="text" class="form-control" name="domicilio_madre" value="<?php if(isset($madre[0]->DOMICILIO)){ if($madre[0]->DOMICILIO != null){echo $madre[0]->DOMICILIO;} } ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="nombres">Ingreso:</label>
                                <input type="number" class="form-control" name="ingreso_madre" value="<?php if(isset($madre[0]->INGRESO)){ if($madre[0]->INGRESO != null){echo $madre[0]->INGRESO;} } ?>">
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
                                <input type="number" class="form-control" name="integrantes" value="<?php if(isset($familia[0]->N_INTEGRANTES)){ if($familia[0]->N_INTEGRANTES != null){echo $familia[0]->N_INTEGRANTES;}else{echo 0; }}else{ echo 0;} ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="integrantes">N* Hermanos:</label>
                                <input type="number" class="form-control" name="n_hermanos" value="<?php if(isset($familia[0]->N_HERMANOS)){ if($familia[0]->N_HERMANOS != null){echo $familia[0]->N_HERMANOS;}else{echo 0; }}else{ echo 0;} ?>">
                            </div>
                            <div class="form-check col-md-3" style="padding-top: 30px;">
                                <input class="form-check-input" type="checkbox" value="" id="h_estudiando">
                                <label class="form-check-label" for="repite_curso">
                                    HERMANOS ESTUDIANDO
                                </label>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="integrantes">Educacion Basica:</label>
                                <input type="number" class="form-control" name="educ_basica" value="<?php if(isset($familia[0]->EDUC_BASICA)){ if($familia[0]->EDUC_BASICA != null){echo $familia[0]->EDUC_BASICA;}else{echo 0; }}else{ echo 0;} ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Educacion Media:</label>
                                <input type="number" class="form-control" name="educ_media" value="<?php if(isset($familia[0]->EDUC_MEDIA)){ if($familia[0]->EDUC_MEDIA != null){echo $familia[0]->EDUC_MEDIA;}else{echo 0; }}else{ echo 0;} ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="integrantes">Educacion Universitaria:</label>
                                <input type="number" class="form-control" name="educ_uni" value="<?php if(isset($familia[0]->EDUC_UNI)){ if($familia[0]->EDUC_UNI != null){echo $familia[0]->EDUC_UNI;}else{echo 0; }}else{ echo 0;} ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Abuelos:</label>
                                <input type="number" class="form-control" name="abuelos" value="<?php if(isset($familia[0]->N_ABUELOS)){ if($familia[0]->N_ABUELOS != null){echo $familia[0]->N_ABUELOS;}else{echo 0;}}else{ echo 0;} ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="integrantes">Tios:</label>
                                <input type="number" class="form-control" name="tios" value="<?php if(isset($familia[0]->N_TIOS)){ if($familia[0]->N_TIOS != null){echo $familia[0]->N_TIOS;}else{echo 0;}}else{ echo 0;} ?>">
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
                                <input type="text" class="form-control" name="rut_jefe_hogar" value="<?php if(isset($jefe_hogar[0]->RUT)){ if($jefe_hogar[0]->RUT != null){echo $jefe_hogar[0]->RUT.'-'.$jefe_hogar[0]->DV;} } ?>">
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
                                <input type="text" class="form-control" name="rut_apoderado" value="<?php if(isset($apoderado[0]->RUT)){ if($apoderado[0]->RUT != null){echo $apoderado[0]->RUT.'-'.$apoderado[0]->DV;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Nombres:</label>
                                <input type="text" class="form-control" name="nombre_apoderado" value="<?php if(isset($apoderado[0]->NOMBRES)){ if($apoderado[0]->NOMBRES != null){echo $apoderado[0]->NOMBRES;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Paterno:</label>
                                <input type="text" class="form-control" name="apellido_pat_apoderado" value="<?php if(isset($apoderado[0]->APELLIDO_PAT)){ if($apoderado[0]->APELLIDO_PAT != null){echo $apoderado[0]->APELLIDO_PAT;} } ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="apellido_mat">Apellido Materno:</label>
                                <input type="text" class="form-control" name="apellido_mat_apoderado" value="<?php if(isset($apoderado[0]->APELLIDO_MAT)){ if($apoderado[0]->APELLIDO_MAT != null){echo $apoderado[0]->APELLIDO_MAT;} } ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="apellido_mat">Telefono:</label>
                                <input type="text" class="form-control" name="numero_apoderado" value="<?php if(isset($apoderado[0]->NUMERO)){ if($apoderado[0]->NUMERO != null){echo $apoderado[0]->NUMERO;} } ?>">
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
