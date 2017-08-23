<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CobVeg_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
<<<<<<< HEAD
    public function get_unidades() {
        $this->db->order_by('uni_id', 'ASC');
        $this->db->where('uni_cuenca !=','Sin cuenca');
        $query = $this->db->get('unidad');
        //var_dump($this->db->last_query());
        return $query->result();
    }
=======
    
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
    public function get_unidad($uni_id) {
        $this->db->where('uni_id',$uni_id);
        $query = $this->db->get('unidad');
        //var_dump($this->db->last_query());
        return $query->row_array();
    }
    public function get_sectores($sec_unidad) {
<<<<<<< HEAD
        $this->db->order_by('sec_id', 'ASC');
=======
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
        $this->db->where('sec_unidad',$sec_unidad);
        $query = $this->db->get('sector');
        //var_dump($this->db->last_query());
        return $query->result();
    }
    public function get_sector($sec_id) {
        $this->db->where('sec_id',$sec_id);
        $query = $this->db->get('sector');
        //var_dump($this->db->last_query());
<<<<<<< HEAD
        return $query->row();     
    }
    public function get_plantacion($sec_id,$ecosistema) {
        $array = array('pla_sector' => $sec_id, 'pla_ecosistema' => $ecosistema);
        $this->db->where($array);
        $query = $this->db->get('plantacion');
        return $query->row();
    }
    public function get_pla_man($sec_id,$ecosistema) {
        $array = array('pla_sector' => $sec_id, 'pla_ecosistema' => $ecosistema);
        $this->db->where($array);
        $query = $this->db->get('pla_man');
        return $query->row();
    }
    public function get_cercado($sec_id,$ecosistema) {
        $array = array('cer_sector' => $sec_id, 'cer_ecosistema' => $ecosistema);
        $this->db->where($array);
        $query = $this->db->get('cercado');
        return $query->row();
    }
    public function get_cer_man($sec_id,$ecosistema) {
        $array = array('cer_sector' => $sec_id, 'cer_ecosistema' => $ecosistema);
        $this->db->where($array);
        $query = $this->db->get('cer_man');
        return $query->row();
    }
    //capas por sector y fase
    public function get_coberturas_sector($sector,$fase,$ecositema){
        //$this->db->select('sim_archivo, sim_periodo');
        $array = array('seg_sector' => $sector, 'seg_fase' => $fase,'seg_actividad'=>'plantacion', 'seg_ecosistema'=>$ecositema);
        $this->db->where($array);
        $this->db->order_by('seg_id', 'ASC');
        $query= $this->db->get('seguimiento');
        return $query->result_array();
    }
    //capas por unidad
    public function get_recuperacion_unidad(){
        //$this->db->select('sim_archivo, sim_periodo');
        //$array = array('sec_unidad' => $unidad);
        //$this->db->where($array);
        $this->db->order_by('seg_id', 'ASC');
        $query= $this->db->get('view_seguimiento');
        return $query->result_array();
    }
    //capas por unidad y demanda
    public function get_coberturas_unidad($unidad,$demanda) {
        $where= array('cap_unidad'=>$unidad,'cap_demanda'=>$demanda);
        $this->db->where($where);
        $this->db->order_by('cap_id', 'ASC');
        $query= $this->db->get('capa');
        return $query->result_array();
    }
    //valores y coberturas para el componente escenario
    public function get_modelo($cuenca,$demanda,$precipitacion) {
        $where= array('uni_cuenca'=>$cuenca,'cap_demanda'=>$demanda,'cap_precipitacion'=>$precipitacion);
        $this->db->where($where);
        $this->db->order_by('uni_id', 'ASC');
        $query= $this->db->get('view_modelo');
        return $query->result_array();
    }
    //capas por escenario y precipitacion
    public function get_coberturas_precipitacion($demanda,$precipitacion,$cuenca) {
        $this->db->select('uni_id, cap_nombre,cap_layer,cap_valor,cap_precipitacion,cap_demanda');
        $where= array('uni_cuenca'=>$cuenca,'cap_demanda'=>$demanda,'cap_precipitacion'=>$precipitacion);
        $this->db->where($where);
        $this->db->order_by('uni_id', 'ASC');
        $query= $this->db->get('view_modelo');
        return $query->result_array();
    }
=======
        return $query->row();
        
    }
    public function get_plantacion($sec_id) {
        $this->db->where('rec_sector',$sec_id);
        $query = $this->db->get('view_plantacion');
        //var_dump($this->db->last_query());
        return $query->row();
    }
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20

}
