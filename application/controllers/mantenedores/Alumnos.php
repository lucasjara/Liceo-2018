<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 14-01-2018
 * Time: 14:55
 */

class Alumnos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("plantilla");
    }

    function index(){
        $this->load->model('mantenedores/alumnos_model','alumnos_model');
        $data['usuarios'] =  $this->alumnos_model->obtener_datos();
        $this->layout->view('vista');
        //$this->load->view('alumnos/vista',$data);
    }
    function obtener_datos(){
        $this->load->helper('array_utf8');
        $this->load->model('mantenedores/alumnos_model','alumnos_model');
        $datos["data"] =  $this->alumnos_model->obtener_datos();
        $this->output->set_content_type('application/json')->set_output(json_encode(array_utf8_encode($datos)));
    }
}