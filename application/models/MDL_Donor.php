<?php

class MDL_Donor extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function getDonorNames(){
        $this->db->select('DNRID,Name');
        $query = $this->db->get('donor');
        $result = $query->result_array();
        $donorList = array();
        foreach($result as $row){
            $donorList[$row['DNRID']]=$row['Name'];
        }
        return $donorList;
    }

}