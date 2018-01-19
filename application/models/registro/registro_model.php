<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-01-2018
 * Time: 11:08
 */

class registro_model extends CI_Model
{
    function transaccion_registrar_alumno($alumno){
        $mensaje = new stdClass();
        $this->db->trans_begin();
        $id_alumno =$this->ingresar_alumno($alumno);

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
    function obtener_comunas(){
        $this->db->select("*")->from('tb_comuna');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_curso(){
        $this->db->select("*")->from('tb_curso');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_establecimiento(){
        $this->db->select("*")->from('tb_establecimiento');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_tipo_establecimiento(){
        $this->db->select("*")->from('tb_tipo_establecimiento');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_especialidad(){
        $this->db->select("*")->from('tb_especialidad');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_ascendencia(){
        $this->db->select("*")->from('tb_ascendencia');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_viaja(){
        $this->db->select("*")->from('tb_periodo_viaje');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_sector_vive(){
        $this->db->select("*")->from('tb_sector_vive');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_nivel_educacional(){
        $this->db->select("*")->from('tb_nivel_educacional');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_religion(){
        $this->db->select("*")->from('tb_religion');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_prevision(){
        $this->db->select("*")->from('tb_prevision');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_salud(){
        $this->db->select("*")->from('tb_salud');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_vinculo_alumno(){
        $this->db->select("*")->from('tb_vinculo_alumno');
        $query = $this->db->get();
        return $query->result();
    }
    function obtener_tipo_apoderado(){
        $this->db->select("*")->from('tb_tipo_apoderado');
        $query = $this->db->get();
        return $query->result();
    }
}