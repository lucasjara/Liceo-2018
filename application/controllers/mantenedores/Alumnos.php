<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 14-01-2018
 * Time: 14:55
 */

class Alumnos extends CI_Controller
{
    function index(){
        $this->load->model('mantenedores/alumnos_model','alumnos_model');
        $data['usuarios'] =  $this->alumnos_model->obtener_datos();
        $this->load->view('alumnos/vista',$data);
    }
}