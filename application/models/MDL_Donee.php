<?php
    class MDL_Donee extends CI_Model{
        public function __construct(){
            parent::__construct();
        }


        public function getDoneeNames(){
            $this->db->select('DNEID,Name');
            $query = $this->db->get('donee');
            $result = $query->result_array();
            $doneeList = array();
            foreach($result as $row){
                $doneeList[$row['DNEID']]=$row['Name'];
            }
            return $doneeList;
        }














    }


