<?php
    class MDL_Donation extends CI_Model{
        public function __construct(){
            parent::__construct();
        }


        public function getLastMonthDonationCount(){
            //get last month requirements count
            $this->db->select('*');
            $this->db->where('Date BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
            $this->db->where('DonationState',3);
            $query = $this->db->get('donation');
            $count = $query->num_rows();
            return  $count;
        }

        public function getAcceptedRequestCount(){
            //get last month requirements count
            $this->db->select('*');
            $this->db->where('DonationState',1);
            $query = $this->db->get('donation');
            $count = $query->num_rows();
            return  $count;
        }


    }





