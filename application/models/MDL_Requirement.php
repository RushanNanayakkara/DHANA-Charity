<?php

class MDL_Requirement extends CI_Model{
    public function __construct(){
        parent::__construct();
    }


    public function getRequirementList(){
        $query = $this->db->get('requirements');
        return $query->result_array();
    }

    public function addRequirement($requirement){
        $this->db->insert('requirements',$requirement);
        return $this->db->affected_rows();
    }
    
    public function updateRequirement($requirement){
        $this->db->where('ReqID',$requirement['ReqID']);
        $this->db->update('requirements',$requirement);
        return $this->db->affected_rows();
    }

    public function deleteRequirement($requirementID){
        $this->db->where('ReqID',$requirementID);
        $this->db->delete('requirements');
        return $this->db->affected_rows();
    }

}

?>