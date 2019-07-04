<?php
    class MDL_Donation extends CI_Model{
        public function __construct(){
            parent::__construct();
        }


        public function updateDonation($donation){
            try{
                $this->db->where('DonationID',$donation['DonationID']);
                $this->db->update('donation',$donation);
                return $this->db->affected_rows();
            }catch(Exception $e){
                return $e->getMessage();
            }
        }

        
        public function deleteDonation($donationID){
            $this->db->where('DonationID',$donationID);
            $this->db->delete('donation');
            return $this->db->affected_rows();
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


        
        public function getProcessingDonationList(){
            $this->db->where('DonationState','1');
            $query = $this->db->get('donation');
            return $query->result_array();
        }

        public function getLastYearDonationCounts(){
            $month = ['January' , 'February' , 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            $countArray = array();
            for($i=1; $i<=date('m'); $i++){
                $result = $this->db->query('SELECT * FROM donation WHERE MONTH("Date") = '.date('m').' AND YEAR("Date") ='.date('Y'));
                echo json_encode($result);
            }
        }

    }





