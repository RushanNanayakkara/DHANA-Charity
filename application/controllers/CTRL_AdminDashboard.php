<?php

class CTRL_AdminDashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('MDL_Requirement');
        $this->load->model('MDL_Donee');

        $this->load->view('admin/AdminDashboard',array(
            'requirementList' => $this->MDL_Requirement->getProcessingRequirementList(),
            'doneeNameList' => $this->MDL_Donee->getDoneeNames()
        ));
    }

}

?>