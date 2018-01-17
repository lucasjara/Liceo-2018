<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 17-01-2018
 * Time: 10:13
 */

class Registro_alumnos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("plantilla");
        $this->load->library('form_validation');
    }
    function index(){
        $this->load->model('registro/registro_model','registro_model');
        // Carga de Select
        $datos["comuna"] =$this->registro_model->obtener_comunas();
        $datos["curso"] =$this->registro_model->obtener_curso();
        $datos["establecimiento"] =$this->registro_model->obtener_establecimiento();
        $datos["tipo_establecimiento"] =$this->registro_model->obtener_tipo_establecimiento();
        $datos["especialidad"] =$this->registro_model->obtener_especialidad();
        $datos["ascendencia"] =$this->registro_model->obtener_ascendencia();
        $datos["viaja"] =$this->registro_model->obtener_viaja();
        $datos["sector_vive"] =$this->registro_model->obtener_sector_vive();
        $datos["nivel_educacional"] =$this->registro_model->obtener_nivel_educacional();
        $datos["religion"] =$this->registro_model->obtener_religion();
        $datos["prevision"] =$this->registro_model->obtener_prevision();
        $datos["salud"] =$this->registro_model->obtener_salud();
        $datos["vinculo_alumno"] =$this->registro_model->obtener_vinculo_alumno();
        $datos["tipo_apoderado"] =$this->registro_model->obtener_tipo_apoderado();
        $this->layout->view('vista',$datos);
    }

}