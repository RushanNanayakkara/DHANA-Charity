<?php

class componentCheck extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }


    public function index(){
        $this->load->view('contentboxDemo',array(
			'userdata' =>array(
				'DNEID' => '01',
				'reqID' => '1',
				'category' => 'education',
				'requiredDate' => '2019-02-09',
				'deadline' => '2019-02-10',
				'donatedAmmount' => '10000',
				'title' => 'Requirement 01',
				'description' => 'this is a test description'
			),
		));
    }
    
    public function testFunction(){
        $reqID = $this->input->get('reqID');
        echo $reqID;
        $query = $this->db->get_where('requirement',array('reqID'=>$reqID));
        return $query->result_array();
        
    }

}