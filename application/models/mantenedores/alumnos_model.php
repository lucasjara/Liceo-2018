<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 14-01-2018
 * Time: 15:11
 */

class alumnos_model extends CI_Model
{
        function obtener_datos(){
            $this->db->select("ID,CONCAT(RUT,DV) RUT, NOMBRES, CONCAT(APELLIDO_PAT,' ',APELLIDO_MAT) APELLIDOS, FECHA_NACIMIENTO, DOMICILIO, NUMERO")
                ->from('tb_alumnos');
            $query = $this->db->get();
            return $query->result();
        }
}