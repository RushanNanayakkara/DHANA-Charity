<?php


class CTRL_DonationForm extends CI_Controller{
    
    public function __construct(){
        parent::__construct(); 
        $this->load->model('MDL_Donation');
    }

    public function index(){
        echo "index function";
    }

    public function updateDonation(){
        $donation = array(
            'DonationID'=>$this->input->post('DonationID'),
            'DNRID'=>$this->input->post('DNRID'),
            'ReqID'=>$this->input->post('ReqID'),
            'DonatedAmount'=>$this->input->post('DonatedAmount'),
            'Title'=>$this->input->post('Title'),
            'Date'=>$this->input->post('Date'),
            'Note'=>$this->input->post('Note'),
            'DonationState'=>$this->input->post('DonationState'),
        );
        echo $this->MDL_Donation->updateDonation($donation);
    }

    public function deleteDonation(){
        $donationID = $this->input->post('DonationID');
        echo $this->MDL_Donation->deleteDonation($donationID);
    }

    // public function getDonerName(){
    //     $this->load->model('MDL_Donor');
    //     $name = $this->input->get('DNRID');
    //     echo $this->MDL_Donor->getName($name);
    // }


}



?>