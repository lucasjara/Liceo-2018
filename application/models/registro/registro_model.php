<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-01-2018
 * Time: 11:08
 */

class registro_model extends CI_Model
{

    function transaccion_registrar_alumno($alumno,$matricula_alumno,$antecentes_alumno,$familiares_padre,$familiares_madre,$antecentes_familiares,$jefe_hogar,$apoderado){
        $mensaje = new stdClass();
        $this->db->trans_begin();
        $id_alumno = $this->ingresar_alumno($alumno);
        $matricula_alumno["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_matricula_alumno($matricula_alumno);
        $antecentes_alumno["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_antecedentes_alumno($antecentes_alumno);
        $familiares_padre["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_datos_familiar_alumno($familiares_padre);
        $familiares_madre["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_datos_familiar_alumno($familiares_madre);
        $antecentes_familiares["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_antecedentes_familiares_alumno($antecentes_familiares);
        $jefe_hogar["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_jefe_hogar($jefe_hogar);
        $apoderado["TB_ALUMNO_ID"]  = $id_alumno;
        $this->ingresar_apoderado($jefe_hogar);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $mensaje->respuesta = "N";
            $mensaje->data = " No se pudo procesar la transacci�n";
        } else {
            $this->db->trans_commit();
        }
        return $mensaje;
    }
    function ingresar_alumno($alumno){
        //todo |Formato Base de datos --> Rut|
        $alumno["rut"] = str_replace('.','',$alumno["rut"]);
        $alumno["rut"] = str_replace('-','',$alumno["rut"]);
        $alumno["dv"] = substr($alumno["rut"],-1);
        $alumno["rut"] = substr($alumno["rut"], 0, -1);
        $this->db->set('RUT',$alumno["rut"]);
        $this->db->set('DV', $alumno["dv"]);
        $this->db->set('NOMBRES', strtoupper($alumno["nombres"]));
        $this->db->set('APELLIDO_PAT', strtoupper($alumno["apellido_pat"]));
        $this->db->set('APELLIDO_MAT', strtoupper($alumno["apellido_mat"]));
        $this->db->set('FECHA_NACIMIENTO', $alumno["fecha_nacimiento"]);
        $this->db->set('DOMICILIO', strtoupper($alumno["domicilio"]));
        $this->db->set('NUMERO', strtoupper($alumno["numero"]));
        $this->db->insert("tb_alumnos");
        return $this->db->insert_id();
    }
    function ingresar_matricula_alumno($matricula_alumno){
        $this->db->insert("tb_matricula",$matricula_alumno);
        return $this->db->insert_id();
    }
    function ingresar_antecedentes_alumno($antecentes_alumno){
        $this->db->insert("tb_antecedentes",$antecentes_alumno);
        return $this->db->insert_id();
    }
    function ingresar_datos_familiar_alumno($datos){
        $this->db->insert("tb_familiares",$datos);
        return $this->db->insert_id();
    }
    function ingresar_antecedentes_familiares_alumno($antecedentes_familiares){
        $this->db->insert("tb_antecedentes_familiares",$antecedentes_familiares);
        return $this->db->insert_id();
    }
    function ingresar_jefe_hogar($datos_jefe_hogar){
        $this->db->insert("tb_jefe_hogar",$datos_jefe_hogar);
        return $this->db->insert_id();
    }
    function ingresar_apoderado($datos_apoderado){
        $this->db->insert("tb_apoderados",$datos_apoderado);
        return $this->db->insert_id();
    }
    function obtener_comunas(){
        $this->db->select("*")->from('tb_comuna')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_curso(){
        $this->db->select("*")->from('tb_curso')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_establecimiento(){
        $this->db->select("*")->from('tb_establecimiento')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_tipo_establecimiento(){
        $this->db->select("*")->from('tb_tipo_establecimiento')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_especialidad(){
        $this->db->select("*")->from('tb_especialidad')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_ascendencia(){
        $this->db->select("*")->from('tb_ascendencia')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_viaja(){
        $this->db->select("*")->from('tb_viaja')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_sector_vive(){
        $this->db->select("*")->from('tb_sector_vive')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_nivel_educacional(){
        $this->db->select("*")->from('tb_nivel_educacional')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_religion(){
        $this->db->select("*")->from('tb_religion')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_prevision(){
        $this->db->select("*")->from('tb_prevision')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_salud(){
        $this->db->select("*")->from('tb_salud')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_vinculo_alumno(){
        $this->db->select("*")->from('tb_vinculo_alumno')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_tipo_apoderado(){
        $this->db->select("*")->from('tb_tipo_apoderado')->order_by("descripcion");
        $query = $this->db->get();
        return $query->result();
    }
}