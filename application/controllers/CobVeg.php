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
    public function view_unidades() {
        $data['unidades']= $this->cobveg->get_unidades();
        $vista=$this->load->view('cobveg/unidades.php',$data,TRUE);   
        return $vista;
    }
    public function view_sectores() {
        $uni_id= $this->input->post('id');
        $data['encabezado']=$this->cobveg->get_unidad($uni_id);
        $data['sectores']= $this->cobveg->get_sectores($uni_id);
        $this->load->view('cobveg/sectores.php',$data);
    }
    public function view_paramo() {
        $sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $data_activa['plantacion']= $this->cobveg->get_plantacion($sec_id);
        $data_activa['sec_id']=$sec_id;
        $data['activa']= $this->load->view('cobveg/paramo/activa.php',$data_activa,TRUE);
        $data['pasiva']= $this->load->view('cobveg/paramo/pasiva.php','',TRUE);
        $this->load->view('cobveg/paramo.php',$data);
    }
    public function view_bosque() {
        $sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $data['activa']= $this->load->view('cobveg/bosque/activa.php','',TRUE);
        $data['pasiva']= $this->load->view('cobveg/bosque/pasiva.php','',TRUE);
        $this->load->view('cobveg/bosque.php',$data);
    }
    public function view_ripario() {
        $sec_id=$this->input->post('sec_id');
        $data['sector']=$this->cobveg->get_sector($sec_id);
        $data['activa']= $this->load->view('cobveg/ripario/activa.php','',TRUE);
        $data['pasiva']= $this->load->view('cobveg/ripario/pasiva.php','',TRUE);
        $this->load->view('cobveg/ripario.php',$data);
    }
    public function view_informacion() {
        $this->load->view('cobveg/view_informacion');
    }
    public function view_seguimiento($fase,$sector) {
        //$data['lista']= json_encode($this->cobveg->get_coberturas_sector($fase,$sector));
        $data['datos']=$this->cobveg->get_coberturas_sector($fase,$sector);
        $this->load->view('cobveg/componentes/seguimiento',$data);
    }
    public function view_simulacion($unidad){
        $data_necesidad['unidad']=$unidad;
        $data['necesidad']=$this->load->view('cobveg/simulacion/necesidad.php',$data_necesidad,TRUE);
        $this->load->view('cobveg/simulacion',$data);
    }
    public function view_coberturas_unidad($unidad,$demanda){
        $data['datos']= $this->cobveg->get_coberturas_unidad($unidad,$demanda);
        $data['unidad']=$unidad;
        $data['demanda']=$demanda;
        $this->load->view('cobveg/simulacion/simulacion',$data);
    }
    public function get_coberturas_unidad($unidad,$demanda) {
        $data=$this->cobveg->get_coberturas_unidad($unidad,$demanda);
        echo json_encode($data);
    }
    public function get_coberturas_sector($sector,$demanda) {
        $data=$this->cobveg->get_coberturas_unidad($sector,$demanda);
        echo json_encode($data);
    }
}