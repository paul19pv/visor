<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitio extends CI_Controller {
    public function index() {
        $data['mapa']=$this->load->view('sitio/mapa','',TRUE);
        //$data['mapa']='algo';
        $data['content']=$this->load->view('sitio/content','',TRUE);
        $this->load->view('shared/template',$data);
    }
    public function content() {
        $data['content']='';
        $data['mapa']=$this->load->view('sitio/content','',TRUE);
        $this->load->view('shared/template',$data);
    }
}