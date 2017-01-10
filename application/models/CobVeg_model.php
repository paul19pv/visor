<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CobVeg_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function get_unidades() {
        $this->db->order_by('uni_id', 'ASC');
        $query = $this->db->get('unidad');
        //var_dump($this->db->last_query());
        return $query->result();
    }
    public function get_unidad($uni_id) {
        $this->db->where('uni_id',$uni_id);
        $query = $this->db->get('unidad');
        //var_dump($this->db->last_query());
        return $query->row_array();
    }
    public function get_sectores($sec_unidad) {
        $this->db->where('sec_unidad',$sec_unidad);
        $query = $this->db->get('sector');
        //var_dump($this->db->last_query());
        return $query->result();
    }
    public function get_sector($sec_id) {
        $this->db->where('sec_id',$sec_id);
        $query = $this->db->get('sector');
        //var_dump($this->db->last_query());
        return $query->row();
        
    }
    public function get_plantacion($sec_id) {
        $this->db->where('pla_sector',$sec_id);
        $query = $this->db->get('plantacion');
        //var_dump($this->db->last_query());
        return $query->row();
    }
    public function get_capas_sim($fase,$actividad,$sector){
        $this->db->select('sim_archivo, sim_periodo');
        $array = array('sim_sector' => $sector, 'sim_fase' => $fase, 'sim_actividad' => $actividad);
        $this->db->where($array);
        $query= $this->db->get('simulacion');
        return $query->result_array();
    }

}
