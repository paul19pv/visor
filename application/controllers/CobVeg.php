<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CobVeg extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('CobVeg_model', 'cobveg');
    }
    public function view_unidades() {
     $data['unidades']= $this->cobveg->get_unidades();
        $this->load->view('cobveg/unidades.php',$data);   
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
        $data['plantacion']= $this->cobveg->get_plantacion($sec_id);
        $this->load->view('cobveg/paramo.php',$data);
    }
}