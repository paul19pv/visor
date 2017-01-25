<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CobVeg extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('CobVeg_model', 'cobveg');
    }
    public function index(){
        //$data_sim['necesidad']=$this->load->view('cobveg/simulacion/necesidad.php','',TRUE);
        $data['unidad']= $this->view_unidades();
        //$data['simulacion']=$this->load->view('cobveg/simulacion.php',$data_sim,TRUE);
        $this->load->view('sitio/cobveg.php',$data);
    }
    //cargar unidades hidricas
    public function view_unidades() {
        $data['unidades']= $this->cobveg->get_unidades();
        $vista=$this->load->view('cobveg/unidades.php',$data,TRUE);   
        return $vista;
    }
    //cargar sectores por unidad hidrica
    public function view_sectores($unidad) {
        //$uni_id= $this->input->post('id');
        $data['encabezado']=$this->cobveg->get_unidad($unidad);
        $data['sectores']= $this->cobveg->get_sectores($unidad);
        $this->load->view('cobveg/sectores.php',$data);
    }
    //cargar la seccion paramo
    public function view_paramo($sec_id) {
        //$sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $activa['sec_id']=$sec_id;
        $activa['plantacion']= $this->cobveg->get_plantacion($sec_id);
        $activa['pla_man']= $this->cobveg->get_pla_man($sec_id);
        $data['activa']= $this->load->view('cobveg/paramo/activa.php',$activa,TRUE);
        $pasiva['sec_id']=$sec_id;
        $pasiva['cercado']=$this->cobveg->get_plantacion($sec_id);
        $data['pasiva']= $this->load->view('cobveg/paramo/pasiva.php',$pasiva,TRUE);
        $this->load->view('cobveg/paramo.php',$data);
    }
    //cargar la seccion bosque
    public function view_bosque($sec_id) {
        //$sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $data['activa']= $this->load->view('cobveg/bosque/activa.php','',TRUE);
        $data['pasiva']= $this->load->view('cobveg/bosque/pasiva.php','',TRUE);
        $this->load->view('cobveg/bosque.php',$data);
    }
    //cargar la seccion ripario
    public function view_ripario($sec_id) {
        //$sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $data['activa']= $this->load->view('cobveg/ripario/activa.php','',TRUE);
        $data['pasiva']= $this->load->view('cobveg/ripario/pasiva.php','',TRUE);
        $this->load->view('cobveg/ripario.php',$data);
    }
    //cargar la seccion simulacion
    public function view_simulacion($unidad){
        $data_necesidad['unidad']=$unidad;
        $data['necesidad']=$this->load->view('cobveg/simulacion/necesidad.php',$data_necesidad,TRUE);
        $this->load->view('cobveg/simulacion',$data);
    }
    //vista de prueba
    public function view_informacion() {
        $this->load->view('cobveg/view_informacion');
    }
    //componente seguimiento para las secciones paramo, bosque y ripario
    public function view_seguimiento($sector,$fase) {
        $data['sector']=$sector;
        $data['fase']=$fase;
        $data['datos']=$this->cobveg->get_coberturas_sector($sector,$fase);
        $this->load->view('cobveg/componentes/seguimiento',$data);
    }
    //componente simulacion con las capas por unidad hidrica
    public function view_coberturas_unidad($unidad,$demanda){
        $data['datos']= $this->cobveg->get_coberturas_unidad($unidad,$demanda);
        $data['unidad']=$unidad;
        $data['demanda']=$demanda;
        $this->load->view('cobveg/simulacion/simulacion',$data);
    }
    //componente escenario
    public function view_escenario($demanda,$precipitacion) {
        $data['guayllabamba']= $this->cobveg->get_modelo('Guayllabamba',$demanda,$precipitacion);
        $data['napo']= $this->cobveg->get_modelo('Napo',$demanda,$precipitacion);
        $data['demanda']=$demanda;
        $data['precipitacion']=$precipitacion;
        $data['introduccion']=$this->get_txt_esc($precipitacion);
        $this->load->view('cobveg/componentes/escenario',$data);
    }
    
    //devolver lista de capas en formato json
    public function get_coberturas_unidad($unidad,$demanda) {
        $data=$this->cobveg->get_coberturas_unidad($unidad,$demanda);
        echo json_encode($data);
    }
    //devolver lista de capas en formato json
    public function get_coberturas_sector($sector,$fase) {
        $data=$this->cobveg->get_coberturas_sector($sector,$fase);
        echo json_encode($data);
    }
    //textos escenarios de la secion simulacion
    public function get_txt_esc($precipitacion) {
        switch ($precipitacion) {
            case 'actual':
                $texto="Los resultados de la salida de información para este escenario están dados por la variable de estrés hídrico, considerando así que, para el escenario actual el estrés hídrico no tiene incremento de precipitación ni de demanda (P0D0).";
                break;
            case 'incremento':
                $texto="Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del incremento del 10% en precipitación y una mayor demanda (P+10D+).";
                break;
            case 'decremento':
                $texto="Los resultados de la salida de información para una proyección donde el estrés hídrico resulta del decremento del 10% en precipitación y mayor demanda (P-10D+).";
                break;
            default:
                $texto="No definido";
                break;
        }
        return $texto;
    }
}