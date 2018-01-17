<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-01-2018
 * Time: 11:08
 */

class registro_model extends CI_Model
{
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