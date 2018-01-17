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
    function guardar_datos_alumno(){
        $mensaje = new stdClass();
        $this->load->helper('array_utf8');
        if ($this->input->post()) {
            if ($this->validar_datos_alumno() && $this->validar_datos_padre() && $this->validar_datos_madre() && $this->validar_datos_familia() && $this->validar_datos_jefe_hogar()  && $this->validar_datos_apoderado()) {
                $id = $this->input->post('id');
                $nombres = $this->input->post('nombres');
                $fecha_nacimiento = $this->input->post('fecha_nacimiento');
                $domicilio = $this->input->post('domicilio');
                $numero = $this->input->post('numero');

                //$this->load->model('mantenedores/alumnos_model','alumnos_model');
                //$this->alumnos_model->editar_alumno($id,$nombres,$fecha_nacimiento,$domicilio,$numero);
                $mensaje->respuesta = "S";
                $mensaje->data = "Usuario Modificado Correctamente";
            }else{
                $mensaje->respuesta = "N";
                $mensaje->data = validation_errors();
            }
        }else{
            $mensaje->respuesta = "N";
            $mensaje->data = 'No se pudo procesar la solicitud. Intente recargar la pagina.';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode(array_utf8_encode($mensaje)));
    }
    function validar_datos_alumno()
    {
        $this->form_validation->set_rules("nombres", "Nombres Alumno", "required|min_length[3]");
        $this->form_validation->set_rules("apellido_pat", "Apellido Paterno Alumno", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_mat", "Apellido Materno Alumno", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("rut", "Rut Alumno", "required|min_length[8]");
        $this->form_validation->set_rules("fecha_nacimiento", "Fecha Nacimiento Alumno", "required|exact_length[10]");
        $this->form_validation->set_rules("domicilio", "Direccion Alumno", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("numero", "Telefono Alumno", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("curso", "Curso Alumno", "required|is_numeric");
        $this->form_validation->set_rules("fecha_matricula", "Fecha Matricula Alumno", "required|exact_length[10]");
        $this->form_validation->set_rules("poblacion", "Poblacion Alumno", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("comuna", "Comuna Alumno", "required|is_numeric");
        $this->form_validation->set_rules("establecimiento", "Establecimiento Alumno", "required|is_numeric");
        if($this->input->post('cual') != "" || $this->input->post('cual') != null){
            $this->form_validation->set_rules("cual", "Cual", "required|min_length[2]|max_length[200]");
        }
        if($this->input->post('donde_vive') != "" || $this->input->post('donde_vive') != null){
            $this->form_validation->set_rules("donde_vive", "Donde Vive", "required|min_length[2]|max_length[200]");
        }
        if($this->input->post('otros') != "" || $this->input->post('otros') != null){
            $this->form_validation->set_rules("otros", "Otros", "required|min_length[2]|max_length[200]");
        }
        $this->form_validation->set_rules("especialidad", "Especialidad Alumno", "required|is_numeric");
        $this->form_validation->set_rules("sector_vive", "Sector Vive Alumno", "required|is_numeric");
        $this->form_validation->set_rules("ascendencia", "Ascendencia Alumno", "required|is_numeric");
        $this->form_validation->set_rules("viaja", "Viaja Alumno", "required|is_numeric");
        return $this->form_validation->run();
    }
    function validar_datos_padre(){
        $this->form_validation->set_rules("nombres_padre", "Nombres Padre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_pat_padre", "Apellido Paterno Padre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_mat_padre", "Apellido Materno Padre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("nivel_educacional_padre", "Nivel Educacional Padre", "required|is_numeric");
        $this->form_validation->set_rules("rut_padre", "Rut Padre", "required|min_length[3]|max_length[20]");
        $this->form_validation->set_rules("fecha_nacimiento_padre", "Fecha Nacimiento Padre", "required|exact_length[10]");
        $this->form_validation->set_rules("domicilio_padre", "Direccion Padre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("ingreso_padre", "Ingreso Padre", "required|is_numeric|max_length[20]");
        return $this->form_validation->run();
    }
    function validar_datos_madre(){
        $this->form_validation->set_rules("nombres_madre", "Nombres Madre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_pat_madre", "Apellido Paterno Madre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_mat_madre", "Apellido Materno Madre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("nivel_educacional_madre", "Nivel Educacional Madre", "required|is_numeric");
        $this->form_validation->set_rules("rut_madre", "Rut Madre", "required|min_length[3]|max_length[20]");
        $this->form_validation->set_rules("fecha_nacimiento_madre", "Fecha Nacimiento Madre", "required|exact_length[10]");
        $this->form_validation->set_rules("domicilio_madre", "Direccion Madre", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("ingreso_madre", "Ingreso Madre", "required|is_numeric|max_length[20]");
        return $this->form_validation->run();
    }
    function validar_datos_familia(){
        $this->form_validation->set_rules("integrantes", "Cantidad en Integrantes", "required|is_numeric");
        $this->form_validation->set_rules("n_hermanos", "Cantidad en Numero de Hermanos", "required|is_numeric");
        $this->form_validation->set_rules("educ_basica", "Cantidad en Educacion Basica", "required|is_numeric");
        $this->form_validation->set_rules("educ_media", "Cantidad en Educacion Media", "required|is_numeric");
        $this->form_validation->set_rules("educ_uni", "Cantidad en Educacion Universitaria", "required|is_numeric");
        $this->form_validation->set_rules("abuelos", "Cantidad de Abuelos", "required|is_numeric");
        $this->form_validation->set_rules("tios", "Cantidad de Tios", "required|is_numeric");
        return $this->form_validation->run();
    }
    function validar_datos_jefe_hogar(){
        $this->form_validation->set_rules("jefe_hogar", "Jefe Hogar", "required|is_numeric");
        //$this->form_validation->set_rules("rut_jefe_hogar", "Rut Jefe Hogar", "required|min_length[3]|max_length[20]");
        $this->form_validation->set_rules("religion", "Religion", "required|is_numeric");
        $this->form_validation->set_rules("prevision", "Prevision", "required|is_numeric");
        $this->form_validation->set_rules("salud", "Salud", "required|is_numeric");
        return $this->form_validation->run();
    }
    function validar_datos_apoderado(){
        $this->form_validation->set_rules("rut_apoderado", "Rut Apoderado", "required|min_length[3]|max_length[20]");
        //$this->form_validation->set_rules("nombre_apoderado", "Nombres Apoderado", "required|is_numeric|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_pat_apoderado", "Apellido Paterno Apoderado", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("apellido_mat_apoderado", "Apellido Materno Apoderado", "required|min_length[3]|max_length[200]");
        $this->form_validation->set_rules("numero_apoderado", "Telefono Apoderado", "required|min_length[3]|max_length[50]");
        $this->form_validation->set_rules("vinculo_alumno", "Religion", "required|is_numeric");
        $this->form_validation->set_rules("tipo_apoderado", "Prevision", "required|is_numeric");
        return $this->form_validation->run();
    }

}