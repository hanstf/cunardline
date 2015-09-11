<?php
class Cruises extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->model('cruises_model');
        $this->load->helper('url');
        
    }
    public function index(){
        $data['cruises']  = $this->cruises_model->get_cabin();
        $this->load->view('common/header');
        $this->load->view('search/refine');
        $this->load->view('content/search');
        $this->load->view('common/footer');
    }
}


?>