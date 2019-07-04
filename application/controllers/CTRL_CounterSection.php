<?php 
    class CTRL_CounterSection extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('MDL_Requirement');
            $this->load->model('MDL_Donation'); 
        }


        
        public function getLastMonthCounts(){

            // Get counts 1)completed donations(last month), Requirements to accept, 
            // Payment requests to accept, Un accepted member requests
            // Add them in associative array as jsons and echo as a json
            $requirementCount = $this->MDL_Requirement->getLastMonthCount();
            $donationCount = $this->MDL_Donation->getLastMonthDonationCount();
            $donationAcceptedCount = $this->MDL_Donation->getAcceptedRequestCount();


            $counts = [
                'requirement_count' => $requirementCount,
                'donation_count' => $donationCount ,
                'donation_accepted_count' => $donationAcceptedCount,
                // 'membership_count'
            ];

            echo json_encode($counts,JSON_PRETTY_PRINT);
        }

        public function getLastYearDonationCounts(){

            $result = $this->db->query('SELECT * FROM donation WHERE MONTH("Date") = '.date('m').' AND YEAR("Date") ='.date('Y'));
            echo json_encode('SELECT * FROM donation WHERE MONTH("Date") = '.date('m').' AND YEAR("Date") ='.date('Y'));

            // $counts = $this->MDL_Donation->getLastYearDonationCounts();
            // echo json_encode($counts);
        }

    } 



















?>