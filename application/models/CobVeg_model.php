<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CobVeg_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function get_unidades() {
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

}
