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
            'Deadline'=>$this->input->post('Deadline'),
            'Donated_Amount'=>$this->input->post('Donated_Amount'),
            'Title'=>$this->input->post('Title'),
            'Description'=>$this->input->post('Description'),
        );

        echo $this->MDL_Requirement->updateRequirement($requirement);
    }

    
    public function addRequirement(){
        $requirement = array(
            'DNEID'=>'',
            'ReqID'=>$this->input->post('ReqID'),
            'Category'=>$this->input->post('Category'),
            'Deadline'=>$this->input->post('Deadline'),
            'Donated_Amount'=>$this->input->post('Donated_Amount'),
            'Title'=>$this->input->post('Title'),
            'Description'=>$this->input->post('Description'),
        );
        echo $this->MDL_Requirement->addRequirement($requirement);
    }

    public function deleteRequirement(){
        $reqID = $this->input->post('ReqID');
        echo $this->MDL_Requirement->deleteRequirement($reqID);
    }

}



?>