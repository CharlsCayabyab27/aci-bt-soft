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
    ACI-BT | Reports
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
    color: #000;
  }

  .wrapper {
    overflow-y: scroll;
    /* Hide the vertical scrollbar */
    overflow-x: hidden;
    /* Optionally hide the horizontal scrollbar */
    height: 100vh;
    /* Set height to 100% of the viewport height */
  }



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


  .card-body {
    cursor: pointer;
  }

  .background-border {
    height: 70px;
    width: 70px;
    border: 1px solid rgba(255, 255, 255, 0.4);
    position: absolute;
    top: 50px;
    right: 45px;
  }

  .cert {
    z-index: 1;
    border: 1px solid rgba(255, 255, 255, 0.4);
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
        const Sales_Certificate_of_Income = <?php echo $count_certificate_of_income ?>;
        const Sales_Cohabitation = <?php echo $count_cohabitation; ?>;
        const Sales_Complaint_Certificate = <?php echo $count_complaint_certificate; ?>;
        const Sales_Death_Certificate = <?php echo $count_death_certificate; ?>;
        const Sales_First_Time_Job_Seeker = <?php echo $count_first_time_job_seeker; ?>;
        const Sales_Indigency = <?php echo $count_indigency; ?>;
        const Sales_Indigency_AICS = <?php echo $count_indigency_aics; ?>;
        const Sales_Lot_Ownership = <?php echo $count_lot_ownership; ?>;
        const Sales_Transfer_of_Residency = <?php echo $count_transfer_of_residency; ?>;
      </script>

      <div class="container content bg-white  border rounded  py-3"
        style="width: 97%;  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); overflow-x: hidden;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel"
          data-bs-interval="3000">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="row">

                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgba(94, 180, 239);">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Business Permit (New)</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_business_permit_new ?>
                        </div>
                      </div>

                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgba(94, 180, 239);">

                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(255, 215, 119)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Business Permit (Renew)
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_business_permit_renew ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(255, 215, 119);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>



                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(188, 70, 70)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">First Time Job Seeker</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_first_time_job_seeker ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(188, 70, 70);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


              </div>
            </div>


            <div class="carousel-item">
              <div class="row">

                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(255, 70, 70)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Barangay Clearance</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_clearance ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(255, 70, 70);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>




                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(255, 183, 50)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Certificate of Cohabitation
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_cohabitation ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(255, 183, 50);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(110, 204, 204)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Certificate of Employability
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_certificate_of_employability ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(110, 204, 204);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>


            <div class="carousel-item">
              <div class="row">




                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(183, 147, 255)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Certificate of Income</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_certificate_of_income ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(183, 147, 255);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(90, 123, 156)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Complaint Certificate</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_complaint_certificate ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(90, 123, 156);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>

                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(76, 166, 76)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Death Certificate</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_death_certificate; ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(76, 166, 76);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="row">

                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color:  rgb(120, 120, 120)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Indigency (AICS)</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_indigency_aics; ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(120, 120, 120);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(140, 90, 140)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Indigency</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_indigency; ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(140, 90, 140);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(173, 90, 90)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Lot Ownership</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_lot_ownership; ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(173, 90, 90);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="row">


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm" style="background-color: rgb(188, 188, 88)">
                    <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Transfer of Residency</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">
                          <?php echo $count_transfer_of_residency; ?>
                        </div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(188, 188, 88);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-black">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm"
                    style="background-color: rgb(54, 162, 235); opacity: 0;">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barangay Clearance</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">145</div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(54, 162, 235);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-white">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>


                <div class="col-md">
                  <div class="card-body border rounded my-1 shadow-sm"
                    style="background-color: rgb(54, 162, 235); opacity: 0;">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Barangay Clearance</div>

                    <div class="d-flex align-items-center justify-content-between mb-1"
                      style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">
                      <div class="card-icon">
                        <div class="h5 mb-0 font-weight-bold text-gray-800 ml-5">145</div>
                      </div>
                      <div class="background-border"></div>
                      <div class="cert mt-2" style="background-color: rgb(54, 162, 235);">
                        <img src="assets/view_report_icons/icon.png" class="bg-transparent p-1" height="70" alt="">
                      </div>
                    </div>
                    <div class="row px-3">
                      <div class="col text-white">More Info</div>
                      <i style="margin-top: 5px; color: white;" class="fas fa-info-circle"></i>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Add more carousel-items with three images each as needed -->
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"
            style="position:  absolute; left: -90px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only ">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"
            style="position:  absolute; right: -90px; ">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <!--End of Carousel -->

      <!--Start of Charts-->

      <div class="container content bg-white border rounded py-2 mt-2"
        style="width: 97%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); overflow: hidden;">
        <div id="chartCarousel" class="carousel slide " data-ride="carousel" data-bs-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="row">
                <div class="col-lg">
                  <canvas id="myChart" style="width: 800px; height: 240px;"></canvas>

                  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                  <script>
                    // Data for the bar chart
                    const chartData = {
                      labels: ['Business Permit (New)', 'Business Permit (Renew)', 'First Time Job Seeker', 'Clearance', 'Cohabitation', 'Certificate of Employability', 'Certificate of Income', 'Complaint Certificate', 'Death Certificate', 'Indigency (AICS)', 'Indigency', 'Lot Ownership', 'Transfer of Residency'],
                      datasets: [{
                        label: 'Number of Issued Certificates',
                        backgroundColor: [

                          'rgba(54, 162, 235, 0.2)', // Business Permit (New)
                          'rgba(255, 206, 86, 0.2)', // Business Permit (Renew)
                          'rgba(153, 0, 0, 0.2)', // First Time Job Seeker
                          'rgba(255, 25, 25, 0.2)', // Clearance
                          'rgba(255, 165, 0, 0.2)', // Cohabitation
                          'rgba(75, 192, 192, 0.2)', // Certificate of Employability
                          'rgba(153, 102, 255, 0.2)', // Certificate of Income
                          'rgba(0, 51, 102, 0.2)', // Complaint Certificate
                          'rgba(0, 128, 0, 0.2)', // Death Certificate
                          'rgba(16, 16, 16, 0.2)', // Indigency (AICS)
                          'rgba(77, 0, 77, 0.2)', // Indigency                         
                          'rgba(128, 0, 0, 0.2)', // Lot Ownership
                          'rgba(153, 153, 0, 0.2)' // Transfer of Residency
                        ],
                        borderColor: [

                          'rgba(54, 162, 235, 1)', // Business Permit (New)
                          'rgba(255, 206, 86, 1)', // Business Permit (Renew)
                          'rgba(153, 0, 0, 1)', // First Time Job Seeker
                          'rgba(255, 0, 0, 1)', // Clearance
                          'rgba(255, 165, 0, 1)', // Cohabitation
                          'rgba(75, 192, 192, 1)', // Certificate of Employability
                          'rgba(153, 102, 255, 1)', // ertificate of Income                         
                          'rgba(0, 51, 102, 1)', // Complaint Certificate
                          'rgba(0, 128, 0,, 1)', // Death Certificate
                          'rgba(16, 16, 16, 1)', // Indigency (AICS)
                          'rgba(77, 0, 77, 1)', // Indigency
                          'rgba(128, 0, 0, 1)', // Lot Ownership
                          'rgba(153, 153, 0, 1)' // Transfer of Residency
                        ],
                        borderWidth: 1,
                        data: [Sales_Business_Permit_New, Sales_Business_Permit_Renew, Sales_First_Time_Job_Seeker, Sales_Clearance, Sales_Cohabitation, Sales_Certificate_of_Employability, Sales_Certificate_of_Income, Sales_Complaint_Certificate, Sales_Death_Certificate, Sales_Indigency_AICS, Sales_Indigency, Sales_Lot_Ownership, Sales_Transfer_of_Residency]
                      }]
                    };

                    // Configuration options
                    const chartConfig = {
                      type: 'bar',
                      data: chartData,
                      options: {
                        scales: {
                          y: {
                            beginAtZero: true
                          }
                        }
                      }
                    };


                    // Function to update chart dimensions based on window size
                    function updateChartDimensions(chart) {
                      var chartCanvas = chart.canvas;
                      var parent = chartCanvas.parentNode;
                      var containerWidth = parent.offsetWidth;
                      var containerHeight = parent.offsetHeight;

                      chartCanvas.style.width = containerWidth + 'px';
                      chartCanvas.style.height = containerHeight + 'px';
                      chart.resize(); // Resize the chart
                    }

                    // Render the bar chart
                    const myChart = new Chart(document.getElementById('myChart'), chartConfig);

                    // Update chart dimensions when the window is resized
                    window.addEventListener('resize', function () {
                      updateChartDimensions(chartMeatvsSeafood);
                    });

                    // Initial call to update chart dimensions
                    updateChartDimensions(chartMeatvsSeafood);


                  </script>


                </div>
              </div>
            </div>


            <div class="carousel-item">
              <div class="row d-flex justify-content-center">
                <div class="col-md">

                  <canvas id="chartTop3" style="width: 800px; height: 210px;"></canvas>


                  <script>
                    // <!-- setup block -->
                    const Top1_Count = [100, 90, 80, 10, 100, 60, 23, 56, 76, 80, 12, 45];
                    const Top2_Count = [150, 10, 40, 90, 120, 20, 23, 56, 76, 23, 45, 6];
                    const Top3_Count = [80, 70, 30, 50, 80, 23, 45, 67, 83, 12, 45, 100];
                    const label_1 = ['Death Certificate'];
                    const label_2 = ['Death Certificate'];
                    const label_3 = ['Death Certificate'];

                    const monthLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                    // <!-- config block -->
                    const lineChartData = {
                      labels: monthLabels,
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
                    const lineChartConfig = {
                      type: 'line',
                      data: lineChartData
                    };


                    // <!-- render block -->
                    const chartTop3 = new Chart(document.getElementById('chartTop3').getContext('2d'), lineChartConfig);


                    // Function to update chart dimensions based on window size
                    function updateChartDimensions(chart) {
                      var chartCanvas = chart.canvas;
                      var parent = chartCanvas.parentNode;
                      var containerWidth = parent.offsetWidth;
                      var containerHeight = parent.offsetHeight;

                      chartCanvas.style.width = containerWidth + 'px';
                      chartCanvas.style.height = containerHeight + 'px';
                      chart.resize(); // Resize the chart
                    }
                    // Update chart dimensions when the window is resized
                    window.addEventListener('resize', function () {
                      updateChartDimensions(chartTop3);
                    });

                    // Initial call to update chart dimensions
                    updateChartDimensions(chartTop3);

                  </script>
                </div>
              </div>
            </div>




          </div>
          <!--Carousel End-->

          <a class="carousel-control-prev" href="#chartCarousel" role="button" data-slide="prev"
            style="position: absolute; left: -90px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#chartCarousel" role="button" data-slide="next"
            style="position: absolute; right: -90px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>


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
