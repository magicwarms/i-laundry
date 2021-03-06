<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Frontend_Controller {

	public function __construct (){
        parent::__construct();
        $this->load->model('Customer_m');
        $this->load->model('Order_m');
    }

	public function index(){
		$idCUSTOMER = $this->session->userdata('idCUSTOMER');
		$data['profile'] = $this->Customer_m->selectprofilecustomer_inhome($idCUSTOMER)->row();

        if(!empty($data['profile'])){

	        $map = directory_map('assets/upload/profile/'.folderENCRYPT($data['profile']->idCUSTOMER), FALSE, TRUE);
	        
			if (empty($map)) {
				$data['profile']->imageCUSTOMER = base_url() . 'assets/frontend/img/photos/user.png';
			} else {
				$data['profile']->imageCUSTOMER = base_url() . 'assets/upload/profile/'.folderENCRYPT($data['profile']->idCUSTOMER).'/'.$map[0];
			}
        }
        $data['totalorder'] = $this->Order_m->counts('codewell_orders',NULL,NULL);
        
		if (!is_null($this->session->flashdata('message'))) {
        	$data['message'] = $this->session->flashdata('message');
        }
		$this->load->view($this->data['frontendDIR']. 'Home',$data);
	}
}
