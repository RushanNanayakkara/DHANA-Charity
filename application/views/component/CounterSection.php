<!DOCTYPE html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <style>
        .counter-box [class^=col-] {
        padding: 33px 15px;
        border-right: 1px solid rgba(255, 255, 255, 0.1); }
        .counter-box [class^=col-]:last-child {
            border-right: 0px; }

        .counter-box-dark [class^=col-] {
        border-right: 1px solid rgba(120, 130, 140, 0.13); }
        .counter-box-dark [class^=col-]:last-child {
            border-right: 0px; }
    </style>
</head>
<body>

<div class="bg-primary">
        <div class="container">
            <!-- Row -->
            <div class="row counter-box text-center">
                <!-- column  -->
                <div class="col-lg-3 col-6 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                    <div class="">
                        <h2 class="font-medium text-white m-b-0"><span id="donation_count" class="counter">0</span>+</h2>
                        <h6 class="text-white font-14 op-7">Completed Donations<br>This Month</h6>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                    <div class="">
                        <h2 class="font-medium text-white m-b-0"><span id="requirement_count" class="counter">0</span>+</h2>
                        <h6 class="text-white font-14 op-7">New Requirements</h6>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                    <div class="">
                        <h2 class="font-medium text-white m-b-0"><span id="payment_req_count" class="counter">0</span>+</h2>
                        <h6 class="text-white font-14 op-7">Payment Requests</h6>
                    </div>
                </div>
                <!-- column  -->
                <!-- column  -->
                <div class="col-lg-3 col-6 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                    <div class="">
                        <h2 class="font-medium text-white m-b-0"><span id="membership_count" class="counter">0</span>+</h2>
                        <h6 class="text-white font-14 op-7">New Membership<br>Requests</h6>
                    </div>
                </div>
                <!-- column  -->
            </div>
        </div>
    </div> 
</body>

<!-- Refreshing counters continuously -->
<script>
     setInterval(function() {//CHANGE THIS TO THE LOOP FUNCTION
        $.ajax({
            type:'GET',
            url:'<?=base_url()?>CTRL_CounterSection/getLastMonthCounts',
            success: function(msg){
                var counts = JSON.parse(msg)
                $('#donation_count').html(counts['donation_count'])

                $('#requirement_count').html(counts['requirement_count'])

                $('#payment_req_count').html(counts['donation_accepted_count'])

                $('#membership_count').html(counts['membership_count'])
            }
        });
    },1000);
</script>

</html>