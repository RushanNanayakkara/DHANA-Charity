<?php 
#admin dashboard includes the following functionality and data
#display donations summary (count) 
    #last day,month,year
#display requests summary (count)
    #last day,month,year
#approve membership requests
#accept donation requests
#approve new requirements
#donations yet to be acknowledged
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../lib/bootstrap.min.css">
    <script src="../../../lib/jquery-3.4.1.min.js"></script>
    <script src="../../../lib/bootstrap.min.js"></script>
    <script src="../../../lib/node_modules/chart.js/dist/Chart.bundle.js"></script>
    <title>Admin Dashboard</title>
</head>
<body>
    
    <?php $this->load->view('component/Navbar');?>

    <div  style="color: whitesmoke; background-color: #181C30; height: 7vh ">
        <h4 class="ml-3 pt-2">Donation Summary</h4>
    </div>

    <div id="graph" style="background-color: #181C30;">
        <div class="container" >
            <!--Grid row-->
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-10">

            <canvas id="lineChart"></canvas>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->
        </div>
    </div>


    <?php $this->load->view('component/CounterSection'); ?>

    <div class="" style="color: rgb(77, 77, 77)">
        <div class="col-4 text-left align-bottom mt-3 float-left border-right" style="height:10vh"><h3>Pending Requirements</h3></div>
        <div class="col-4 text-left align-bottom mt-3 float-left" style="height:10vh"><h3>Pending Donations</h3></div>
        <div class="col-4 text-left align-bottom mt-3 float-left border-left" style="height:10vh"><h3>Pending Membership Requests</h3></div>
    </div>
    <div>
    <div id="requirement-list" class="container mt-3 mb-3 ml-0 mr-auto p-4 col-4 float-left" style=" height:60vh; overflow-y: scroll;">
        <?php 
            $this->load->view('component/RequirementModal');
            foreach($requirementList as $requirement){
                $this->load->view('component/Requirement_Contentbox',array('requirement'=>$requirement,'doneeName'=>$doneeNameList[$requirement['DNEID']]));
            }
        ?>
    </div>
    <div id="requirement-list" class="container mt-3 mb-3 ml-0 mr-auto p-4 col-4 float-left" style=" height:60vh; overflow-y: scroll;">
        <?php 
            $this->load->view('component/DonationModal');
            foreach($donationList as $donation){
                $this->load->view('component/Donation_Contentbox',array('donation'=>$donation,'donorName'=>$donorNameList[$donation['DNRID']]));
            }
        ?>
    </div>
    <div id="requirement-list" class="container mt-3 mb-3 ml-0 mr-auto p-4 col-4 float-left" style=" height:60vh; overflow-y: scroll;">
        <?php 
            foreach($requirementList as $requirement){
                $this->load->view('component/Requirement_Contentbox',array('requirement'=>$requirement));
            }
        ?>
    </div>
    </div>
    <?php
        $this->load->view('component/Footer');
    ?>
    <script>
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var gradientFill = ctxL.createLinearGradient(0, 0, 0, 290);
        gradientFill.addColorStop(0, "rgba(173, 53, 186, 1)");
        gradientFill.addColorStop(1, "rgba(173, 53, 186, 0.1)");
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                {
                    label: "Donations",
                    data: [0, 20, 15, 20, 25, 27, 30],
                    backgroundColor: gradientFill,
                    borderColor: [
                    '#AD35BA',
                    ],
                    borderWidth: 2,
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(173, 53, 186, 0.1)",
                }
                ]
            },
            options: {
                responsive: true
            }
        });
    </script>

    
    <script src="../../../util/js/component.js"></script>
</body>
</html>