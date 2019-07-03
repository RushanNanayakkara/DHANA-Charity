<?php


class CTRL_RequirementForm extends CI_Controller{
    
    public function __construct(){
        parent::__construct(); 
        $this->load->model('MDL_Requirement');
    }

    public function index(){
        echo "index function";
    }

    public function updateRequirement(){
        $requirement = array(
            'DNEID'=>$this->input->post('DNEID'),
            'ReqID'=>$this->input->post('ReqID'),
            'Category'=>$this->input->post('Category'),
            'ReqDate'=>$this->input->post('ReqDate'),
            'Required_Amount'=>$this->input->post('Required_Amount'),
            'DonatedAmount'=>$this->input->post('DonatedAmount'),
            'Title'=>$this->input->post('Title'),
            'Description'=>$this->input->post('Description'),
            'ReqState' => $this->input->post('ReqState')
        );
        echo $this->MDL_Requirement->updateRequirement($requirement);
    }

    
    // public function addRequirement(){
    //     $requirement = array(
    //         'DNEID'=>'',
    //         'ReqID'=>$this->input->post('ReqID'),
    //         'Category'=>$this->input->post('Category'),
    //         'ReqDate'=>$this->input->post('Reqdate'),
    //         'Required_Amount'=>$this->input->post('Required_Amount'),
    //         'Donated_Amount'=>$this->input->post('DonatedAmount'),
    //         'Title'=>$this->input->post('Title'),
    //         'Description'=>$this->input->post('Description'),
    //         'ReqState' => $this->input->post('ReqState')
    //     );
    //     echo $this->MDL_Requirement->addRequirement($requirement);
    // }

    public function deleteRequirement(){
        $reqID = $this->input->post('ReqID');
        echo $this->MDL_Requirement->deleteRequirement($reqID);
    }

    public function getDoneeName(){
        $this->load->model('MDL_Donee');
        $name = $this->input->get('DNEID');
        echo $this->MDL_Donee->getName($name);
    }


}



?>