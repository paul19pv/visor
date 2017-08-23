<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sitio extends CI_Controller {
    public function index() {
        $data['mapa']=$this->load->view('sitio/mapa','',TRUE);
        //$data['mapa']='algo';
<<<<<<< HEAD
        //$data['content']=$this->load->view('sitio/content','',TRUE);
        $this->load->view('shared/template',$data);
        //$this->load->view('shared/prueba',$data);
=======
        $data['content']=$this->load->view('sitio/content','',TRUE);
        $this->load->view('shared/template',$data);
>>>>>>> d0a6859f1ef8b7109fa3ed399f31b760f3406e20
    }
    public function content() {
        $data['content']='';
        $data['mapa']=$this->load->view('sitio/content','',TRUE);
        $this->load->view('shared/template',$data);
    }
}