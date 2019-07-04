<?php

class CTRL_AdminDashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('MDL_Requirement');
        $this->load->model('MDL_Donee');
        $this->load->model('MDL_Donor');
        $this->load->model('MDL_Donation');

        $this->load->view('admin/AdminDashboard',array(
            'requirementList' => $this->MDL_Requirement->getProcessingRequirementList(),
            'doneeNameList' => $this->MDL_Donee->getDoneeNames(),
            'donationList' => $this->MDL_Donation->getProcessingDonationList(),
            'donorNameList'=>$this->MDL_Donor->getDonorNames()
        ));
    }

}

?>