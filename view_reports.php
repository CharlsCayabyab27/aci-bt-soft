<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Para sa Soft Eng
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/reports.css">
  <script src="https://kit.fontawesome.com/c7ecee943a.js" crossorigin="anonymous"></script>
  

</head>

<style>
  p {
    color: white;
    font-size: 12px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
      color: #000; /* Change to the color you desire */
    }



  
</style>

<body style="background-color: #F4F3EF;">
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo" style="background-color: #729ED9;">
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          <div class="logo-image-big" style="padding: 25px;">
            <img src="./assets/img/cap-log.png">
          </div>
        </a>
      </div>
      <div class="sidebar-wrapper" style="background-color: #174793;">
        <ul class="nav">
          <li class="active ">
            <a href="home.html">
              <i class="nc-icon nc-world-2"></i>
              <p class="text">Home</p>
            </a>
          </li>
          <li>
            <a href=";">
              <i class="nc-icon nc-circle-10"></i>
              <p class="text">Officials</p>
            </a>
          </li>
          <li>
            <a href=";">
              <i class="nc-icon nc-bell-55"></i>
              <p class="text">About</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" style="border: none;">
        <div class="container-fluid" style="border-bottom: 1px solid rgba(26, 25, 19, 0.192);">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Automated Credential Issuance: Barangay Tiniguiban</a>
          </div>
          <div class="navbar-wrapper">
            <a href="login.html"><button type="submit" class="btn btn-round"
              style="width: 100px; background-color: #729ED9;">Logout</button></a>
          </div>
        </div>
      </nav>

      <style>
        .card {
          height: 350px;
          width: 350px;
          transition: transform 0.3s;
          font-size: 18px;
          font-weight: 400;
          border-bottom: 2px solid black;
        }

        .card:hover {
          transform: scale(1.1);
          background-color: rgb(255, 230, 91);
        }

        .carousel-control-next-icon,
.carousel-control-prev-icon {
  filter: invert(1);
}
      </style>

<?php
  // Include your PHP code here
  include 'db.php';
  ?>

  <script>
    // Use PHP variables in JavaScript
    const Sales_Clearance = <?php echo $count_clearance; ?>;
    const Sales_Business_Permit_New = <?php echo $count_business_permit_new ?>;
    const Sales_Business_Permit_Renew = <?php echo $count_business_permit_renew ?>;
    const Sales_Certificate_of_Employability = <?php echo $count_certificate_of_employability ?>;
    const Sales_Certificate_of_Income = <?php echo $count_certificate_of_income?>;
    const Sales_Cohabitation = <?php echo $count_cohabitation; ?>;
    const Sales_Complaint_Certificate = <?php echo $count_complaint_certificate;?>;
    const Sales_Death_Certificate = <?php echo $count_death_certificate;?>;
    const Sales_First_Time_Job_Seeker = <?php echo $count_first_time_job_seeker;?>;
    const Sales_Indigency = <?php echo $count_indigency;?>;
    const Sales_Indigency_AICS = <?php echo $count_indigency_aics;?>;
    const Sales_Lot_Ownership = <?php echo $count_lot_ownership;?>;
    const Sales_Transfer_of_Residency = <?php echo $count_transfer_of_residency;?>;
  </script>

<div class="container content bg-white  border rounded  py-3">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel" >
      <div class="carousel-inner">
          <div class="carousel-item active">
              <div class="row">


                  <div class="col-md">
                    <div class="card-body border my-1" style="background-color: rgb(255, 99, 132); border-radius: 20px;">
                      <h6 class="card-title"><span> Barangay Business Permit (New) </span></h6>
    
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                          
                          <!-- <i class="fa-solid fa-cart-shopping "></i> -->
                          <img src="assets/view_report_icons/icon.png" class="rounded-circle bg-white p-1" height="50" alt="">
                        </div>
                        <div class="ps-3 mx-5">
                          <h5><?php echo $count_business_permit_new ?></h5>
                          
                          <!-- <span class="text-dark small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
    
                        </div>
                      </div>
                    </div>

                  </div>

                  


                  <div class="col-md">
                    <div class="card-body border bg-success my-1" style="border-radius: 20px;">
                      <h6 class="card-title"> <span> Barangay Business Permit (Renew)</span></h6>
    
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                          
                
                          <img src="assets/view_report_icons/icon.png" class="rounded-circle bg-white p-1" alt="" height="50">
                        </div>
                        <div class="ps-3 mx-5">
                          <h5><?php echo $count_business_permit_renew ?></h5>
                          <!-- <span class="text-dark small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
    
                        </div>
                      </div>
                    </div>

                  </div>
                  
                  <div class="col-md">
                    <div class="card-body border my-1" style="background-color: rgb(255, 230, 91); border-radius: 20px;">
                      <h6 class="card-title"> <span> First Time Job Seeker</span></h6>
    
                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                          
                          <img src="assets/view_report_icons/icon.png" class="rounded-circle bg-white p-1" height="50" alt="">
                        </div>
                        <div class="ps-3 mx-5">
                          <h5><?php echo $count_first_time_job_seeker?></h5>
                          <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
    
                        </div>
                      </div>
                    </div>

                  </div>
              </div>
          </div>


          <div class="carousel-item">
              <div class="row">

                <div class="col-md">
                  <div class="card-body border my-1" style="background-color: rgb(255, 99, 132); border-radius: 20px;">
                    <h6 class="card-title"> <span> Barangay Clearance</span></h6>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <img src="assets/view_report_icons/icon.png" class="p-3 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_clearance ?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
  
                      </div>
                    </div>
                  </div>

                </div>

                


                <div class="col-md">
                  <div class="card-body border bg-success my-1" style="border-radius:  20px;">
                    <h6 class="card-title"><span> Certificate of Cohabitation</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_cohabitation ?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
  
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="col-md">
                  <div class="card-body border my-1" style="background-color: rgb(255, 230, 91); border-radius: 20px;">
                    <h6 class="card-title"> <span> Certificate of Employability</span></h6>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_certificate_of_employability ?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
  
                      </div>
                    </div>
                  </div>

                </div>

              </div>
          </div>


          <div class="carousel-item">
            <div class="row">


                <div class="col-md">
                  <div class="card-body border my-1 bg-success" style="border-radius: 20px;">
                    <h6 class="card-title"> <span> Certificate of Income</span></h6>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_certificate_of_income?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
   -->
                      </div>
                    </div>
                  </div>

                </div>


                <div class="col-md">
                  <div class="card-body border my-1 bg-warning" style="border-radius:  20px;">
                    <h6 class="card-title"><span> Complaint Certificate</span></h6>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_complaint_certificate?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
   -->
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md">
                  <div class="card-body border my-1 bg-danger" style="border-radius: 20px;">
                    <h6 class="card-title"> <span> Death Certificate</span></h6>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                        
                        <!-- <i class="fa-solid fa-cart-shopping p-4 rounded-circle bg-info"></i> -->
                        <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                        <h5><?php echo $count_death_certificate;?></h5>
                        <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
  
                      </div>
                    </div>
                  </div>

                </div>
            </div>
        </div>

        <div class="carousel-item">
          <div class="row">


              <div class="col-md">
                <div class="card-body border my-1 bg-danger" style="border-radius: 20px;">
                  <h6 class="card-title"><span> Indigency (AICS)</span></h6>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                      <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                    </div>
                    <div class="ps-3 mx-5">
                      <h5><?php echo $count_indigency_aics;?></h5>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>


              <div class="col-md">
                <div class="card-body border my-1 bg-success" style="border-radius: 20px;">
                  <h6 class="card-title"> <span> Indigency</span></h6>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                      <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                    </div>
                    <div class="ps-3 mx-5">
                      <h5><?php echo $count_indigency;?></h5>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>

              <div class="col-md">
                <div class="card-body border my-1 bg-info" style="border-radius: 20px;">
                  <h6 class="card-title"> <span> Lot Ownership</span></h6>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                      <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                    </div>
                    <div class="ps-3 mx-5">
                      <h5><?php echo $count_lot_ownership;?></h5>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
          </div>
      </div>

      <div class="carousel-item">
        <div class="row">
          <div class="col-md">

            <div class="card-body border bg-primary my-1" style="border-radius: 20px;">
              <h6 class="card-title"><span> Transfer of Residency</span></h6>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                  <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                  <h5><?php echo $count_transfer_of_residency;?></h5>
                  <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>

          <div class="col-md">
            <div class="card-body border my-1 bg-warning" style="opacity: 0;">
              <h6 class="card-title"> <span> Today</span></h6>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                  <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                  <h5>145</h5>
                 
                </div>
              </div>
            </div>

          </div>

          <div class="col-md">
            <div class="card-body border  my-1"  style="opacity: 0;">
              <h6 class="card-title"> <span>Today</span></h6>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center py-1">
                      
                  <img src="assets/view_report_icons/icon.png" class="p-1 rounded-circle bg-white p-1" height="50" alt="">
                      </div>
                      <div class="ps-3 mx-5">
                  <h5>145</h5>
                  <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                </div>
              </div>
            </div>

          </div>
        </div>
    </div>
    
          <!-- Add more carousel-items with three images each as needed -->
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="position:  absolute; left: -90px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only ">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="position:  absolute; right: -90px; ">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
<!--End of Carousel -->

<!--Start of Charts-->

<div class="container content bg-white border rounded py-2 my-3">
  <div id="chartCarousel" class="carousel slide " data-ride="carousel" data-bs-ride="carousel">
      <div class="carousel-inner">

          <div class="carousel-item active">
              <div class="row">
                  <div class="col-md">
                      <canvas id="chartMeatvsSeafood" style="width: 800px; height: 240px; "></canvas>

                      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                      <script>
                          // Sample data (replace with your actual data)
                          const Sales_Meat = [100, 200, 150, 300, 250, 180, 220, 190, 280, 320, 270, 310];
                          const Sales_Seafood = [80, 150, 120, 200, 180, 160, 190, 170, 210, 240, 220, 230];
                          
                          // Data for the bar chart
                          const data3 = {
                              labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                              datasets: [{
                                  label: 'Meat/Poultry',
                                  data: Sales_Meat,
                                  backgroundColor: 'rgb(255, 99, 132)',
                                  borderColor: 'rgb(255, 99, 132)',
                                  borderWidth: 1
                              },
                              {
                                  label: 'Seafood',
                                  data: Sales_Seafood,
                                  backgroundColor: 'rgb(54, 162, 235)',
                                  borderColor: 'rgb(54, 162, 235)',
                                  borderWidth: 1
                              }]
                          };
                          
                          // Configuration options
                          const config3 = {
                              type: 'bar',
                              data: data3,
                              options: {
                                  scales: {
                                      y: {
                                          beginAtZero: true
                                      }
                                  }
                              }
                          };
                          
                          // Render the bar chart
                          const chartMeatvsSeafood = new Chart(
                              document.getElementById('chartMeatvsSeafood').getContext('2d'),
                              config3
                          );
                      </script>
                  </div>
              </div>
          </div>
          
          <!-- <div class="carousel-item">
              <div class="row d-flex justify-content-center">
                  <div class="col-md-4">
                      <canvas id="chartShippers" height="40" width="40"></canvas> -->
                      
                      <!-- <script>
                          // setup block
                          const Count_Orders = [300, 50, 100, 500];
                          const label_piechart = ['Red', 'Blue', 'Yellow'];
                          const data1 = {
                              labels: label_piechart,
                              datasets: [{
                                  label: 'My First Dataset',
                                  data: Count_Orders,
                                  backgroundColor: [
                                      'rgb(255, 99, 132)',
                                      'rgb(54, 162, 235)',
                                      'rgb(255, 165, 0)'
                                  ],
                                  hoverOffset: 4
                              }]
                          };
                          //  config block 
                          const config = {
                              type: 'pie',
                              data: data1,
                          };
                          //  render block 
                          const chartShippers = new Chart(
                              document.getElementById('chartShippers'),
                              config
                          );
                      </script> -->
                  <!-- </div>
              </div>
          </div> -->


          <div class="carousel-item">
            <div class="row d-flex justify-content-center">
                <div class="col-md">
                  <canvas id="chartTop3" style="width: 800px; height: 240px;"></canvas>

                  <script>
                    // <!-- setup block -->
                    const Top1_Count = [100, 90, 80, 10, 100, 60, 23, 56, 76, 80, 12, 45];
                    const Top2_Count = [150, 10, 40, 90, 120, 20, 23, 56, 76, 23, 45, 6];
                    const Top3_Count = [80, 70, 30, 50, 80, 23, 45, 67, 83, 12, 45, 100];
                    const label_1 = ['Death Certificate'];
                    const label_2 = ['Death Certificate'];
                    const label_3 = ['Death Certificate'];
                    const data2 = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                    'Oct', 'Nov', 'Dec'],
                    datasets: [{
                    label: label_1,
                    data: Top1_Count,
                    fill: false,
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    tension: 0.1
                    },
                    {
                    label: label_2,
                    data: Top2_Count,
                    fill: false,
                    backgroundColor: 'rgb(54, 162, 235)',
                    borderColor: 'rgb(54, 162, 235)',
                    tension: 0.1
                    },
                    {
                    label: label_3,
                    data: Top3_Count,
                    fill: false,
                    backgroundColor: 'rgb(255,165,0)',
                    borderColor: 'rgb(255,165,0)',
                    tension: 0.1
                    }]
                    };
                    // <!-- config block -->
                    const config2 = {
                    type: 'line',
                    data: data2,
                    };
                    // <!-- render block -->
                    const chartTop3 = new Chart(
                    document.getElementById('chartTop3'),
                    config2
                    );
                    </script>
                </div>
            </div>
          </div>


          
          
      </div>
      <!--Carousel End-->
      
      <a class="carousel-control-prev" href="#chartCarousel" role="button" data-slide="prev" style="position: absolute; left: -90px;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#chartCarousel" role="button" data-slide="next" style="position: absolute; right: -90px;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>
</div>


        

        

<!-- 
        <div class="carousel-item">
          <div class="row">
            <div class="col-md">
              <canvas id="myPieChart"></canvas>
            </div>
          </div>
        </div>
         -->
        

  <!-- <script>
    // Sample data (replace with your actual data)
    const data = {
      labels: ['Red', 'Blue', 'Yellow'],
      datasets: [{
        data: [300, 50, 100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    };

    // Configuration options
    const config = {
      type: 'pie',
      data: data,
    };

    // Render the pie chart
    const myPieChart = new Chart(
      document.getElementById('myPieChart').getContext('2d'),
      config
    );
  </script> -->
        






<!-- End of Charts-->





  <script src="./assets/js/reports.js"></script>
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>