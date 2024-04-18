<?php
  session_start();
?>

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
  <style>
    @media (max-width:991.98px) {
      .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
      }

      .table-responsive-lg>.table-bordered {
        border: 0
      }
    }
  </style>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="./assets/img/cap-log.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ACI-BT | Home
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
</head>

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
          <li class="active">
            <a href="home.php">
              <i class="nc-icon nc-world-2"></i>
              <p class="text">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="nc-icon nc-world-2"></i>
                <p class="text">Officials</p>
            </a>
            <ul class="nav-content d-flex flex-column align-items-end">
              <li>
                <a class="nav-link" href="officials.html">
                  <p class="text">Barangay Officials</p>
                </a>
              </li>
              <li>
                <a class="nav-link" href="sk.html">
                  <p class="text">SK Officials</p>
                </a>
              </li>
              <li>
                <a class="nav-link" href="staff.html">
                  <p class="text">Staff Officials</p>
                </a>
              </li>
            </ul>
          </li>
          <li>
              <a href="about.html">
                  <i class="nc-icon nc-bell-55"></i>
                  <p class="text">About</p>
              </a>
          </li>
        </ul>
      </div>
    </div>
      <!-- <div class="sidebar-wrapper" style="background-color: #174793;">
        <ul class="nav">
          <li class="active">
            <a href="home.php">
              <i class="nc-icon nc-world-2"></i>
              <p class="text-white">Home</p>
            </a>
          </li>

          <li>
            <details class="d-flex flex-column align-items-center justify-content-center">
              <summary class="text-white">
                Officials
              </summary>
              <a class="text-white" href="officials.html">Barangay Officials</a>
              <a class="text-white" href="sk.html">SK Officials</a>
              <a class="text-white" href="staff.html">Barangay Staffs</a>
            </details>
          </li>

          <li>
            <a href="about.html">
              <i class="nc-icon nc-bell-55"></i>
              <p class="text-white">About</p>
            </a>
          </li>
        </ul>
      </div> -->
  
  <div class="main-panel" style="height: 100vh;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent border-0">
      <div class="container-fluid" style="border-bottom: 1px solid rgba(26, 25, 19, 0.192);">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Automated Credential Issuance: Barangay Tiniguiban</a>
        </div>
        <div class="navbar-wrapper">
          <a href="logout.php">
            <button type="submit" class="btn btn-round">Logout</button>
          </a>
        </div>
      </div>
    </nav>

    <style>
      .navbar-wrapper button {
        width: 100px;
        background-color: #729ED9;
      }

      .card {
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        position: relative;
        display: inline-block;
        border-radius: 10px;
        background: #efefef;
        box-shadow: 5px 5px 4px #c8d0e7, -1px -1px 3px #fff;
        color: #585858;
      }

      .card:active {
        box-shadow: inset 1px 1px 3px #c8d0e7, inset -1px -1px 3px #fff;
      }

      .card:hover {
        transform: scale(1.1);
        background-color: rgb(255, 230, 91);
      }
    </style>

    <div class="content">
      <div class="row d-flex justify-content-center pt-4">
        <div class="col-md-11">
          <div class="welcome-card d-flex align-items-center justify-content-between">
          <h3>Welcome, <?php echo $_SESSION['username'] ?>!</h3>
          <script type="text/javascript">
              tday=new Array	("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
              tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

              function GetClock(){
              var d=new Date();
              var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
              var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

              if(nhour==0){ap=" AM";nhour=12;}
              else if(nhour<12){ap=" AM";}
              else if(nhour==12){ap=" PM";}
              else if(nhour>12){ap=" PM";nhour-=12;}

              if(nmin<=9) nmin="0"+nmin;
              if(nsec<=9) nsec="0"+nsec;

              document.getElementById('datetime').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+" , "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+tday[nday]+"";
              }
              window.onload=function(){
              GetClock();
              setInterval(GetClock,1000);
              }
            </script>
            <h6 class="" id="datetime"></h6>
          </div>
        </div>

        <div class="col-md-12 d-flex align-items-center justify-content-around mt-4">
          <form action="gen_docs.php" class="row">
            <div class="col-md-12"> <button class="card">
                <div class="card-header">
                  <h6 class="card-title">Generate Documents</h6>
                </div>
                <div class="card-body">
                  <img height="250" width="280" src="./assets/img/certs.png" alt="">
                </div>
                <div class="card-footer">
                  <hr>
                  <div class="stats">
                  </div>
                </div>
              </button>
            </div>
          </form>
          <form action="view_trans.php">
            <div class="col-md-12"> <button class="card">
                <div class="card-header">
                  <h6 class="card-title">View Transactions</h6>
                </div>
                <div class="card-body">
                  <img height="250" width="280" src="./assets/img/list.png" alt="">
                </div>
                <div class="card-footer">
                  <hr>
                  <div class="stats">
                  </div>
                </div>
              </button>
            </div>
          </form>
          <form action="view_reports.php">
            <div class="col-md-12"> <button class="card">
                <div class="card-header">
                  <h6 class="card-title">View Reports</h6>
                </div>
                <div class="card-body">
                  <img height="250" width="280" src="./assets/img/reports.png" alt="">
                </div>
                <div class="card-footer">
                  <hr>
                  <div class="stats">
                  </div>
                </div>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
  
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