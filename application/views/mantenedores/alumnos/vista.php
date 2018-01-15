<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 14-01-2018
 * Time: 14:53
 */
?>
<br>
<div class="panel panel-primary">
    <div class="panel-heading">Listado de Alumnos</div>
    <div class="panel-body">
        <table id="tabla_alumnos" class="table table-responsive table-striped table-condesed table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>RUT</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>FECHA NACIMIENTO</th>
                <th>DOMICILIO</th>
                <th>NUMERO</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<script src="<?php echo base_url('/public/js/mantenedores/alumnos/script.js')?>"></script>
