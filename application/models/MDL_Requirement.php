<?php

class MDL_Requirement extends CI_Model{
    public function __construct(){
        parent::__construct(); 
    }


    public function getRequirementList(){
        $query = $this->db->get('requirements');
        return $query->result_array();
    }

    public function getProcessingRequirementList(){
        $this->db->where('ReqState','PROCESSING');
        $query = $this->db->get('requirements');
        return $query->result_array();
    }

    public function addRequirement($requirement){
        $this->db->insert('requirements',$requirement);
        return $this->db->affected_rows();
    } 
    
    public function updateRequirement($requirement){
        try{
            $this->db->where('ReqID',$requirement['ReqID']);
            $this->db->update('requirements',$requirement);
            return $this->db->affected_rows();
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteRequirement($requirementID){
        $this->db->where('ReqID',$requirementID);
        $this->db->delete('requirements');
        return $this->db->affected_rows();
    }

    public function getLastMonthCount(){
        //get last month requirements count
        $this->db->select('*');
        $this->db->where('ReqDate BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
        $query = $this->db->get('requirements');
        $count = $query->num_rows();
        return  $count;

    }

}

?>