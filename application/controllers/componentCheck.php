<?php

class componentCheck extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }


    public function index(){
        $this->load->model('MDL_Requirement');
        $this->load->view('contentboxDemo',array(
			'requirementList' => $this->MDL_Requirement->getRequirementList()
        ));
    }
    
    public function testFunction(){
        $reqID = $this->input->get('reqID');
        $query = $this->db->get_where('requirement',array('reqID'=>$reqID));
        return $query->result_array();
    }
 
}