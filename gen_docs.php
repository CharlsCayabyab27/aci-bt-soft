<?php
// session_start();

// if (!isset($_SESSION['username'])) {
//     header('location: index.php');
// }

// require('db.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
    ACI-BT | Generate Documents
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />

    <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body style="background-color: #F4F3EF;">
    <div class="wrapper">
        <div class="sidebar" data-color="" data-active-color="danger">
            <div class="logo" style="background-color: #729ED9;">
                <a href="home.php" class="simple-text logo-normal">
                    <div class="logo-image-big p-3">
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
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent border-0">
                <div class="container-fluid" style="border-bottom: 1px solid rgba(26, 25, 19, 0.192);">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="">Automated Credential Issuance: Barangay
                            Tiniguiban</a>
                    </div>
                    <div class="navbar-wrapper">
                        <a href="home.php"><button type="submit" class="btn btn-round"
                                style="width: 100px; background-color: #729ED9;">Back</button></a>
                    </div>
                </div>
            </nav>

            <style>
                @media print {
                    iframe {
                        border: none;
                        width: 21cm !important;
                        height: 29.7cm !important;
                    }
                }

                iFrame {
                    /* position: fixed !important; */
                    left: 50%;
                    width: 21.05cm;
                    height: 32cm;
                    border: none;
                    overflow: hidden !important;
                    transform: scale(0.9);
                    transform-origin: 0 0;
                }

                p {
                    color: white;
                    font-size: 12px;
                }

                .certificates div {
                    display: none;
                }

                .certificates div.active {
                    display: block;
                }
            </style>

            <div class="content">
                <div class="row ml-3">
                    <select class="p-2" id="certificateType" onchange="toggleFields()" style="cursor: pointer;">
                        <option value="">--select certificates--</option>
                        <option value="barangay_clearance">Barangay Clearance</option>
                        <option value="business_permit_new">Barangay Business Permit New</option>
                        <option value="business_permit_renew">Barangay Business Permit Renew</option>
                        <option value="certificate_of_employability">Certificate Of Employability</option>
                        <option value="certificate_of_income">Certificate of Income</option>
                        <option value="cohabitation">Certificate of Cohabitation</option>
                        <option value="complaint_certificate">Complaint Certificate</option>
                        <option value="death_certificate">Death Certificate</option>
                        <option value="first_time_job_seeker">Barangay Certification (First time Job Seeker)</option>
                        <option value="indigency">Indigency</option>
                        <option value="indigency_aics">Indigency (AICS)</option>
                        <option value="lot_ownership">Lot Ownership</option>
                        <option value="Oathtaking">Oathtaking</option>
                        <option value="transfer_of_residency">Certificate of Transfer</option>
                    </select>
                </div>

                <div class="row mt-2">
                    <div class="col-md-5">
                        <div class="card-user">
                            <div class="card-body forms">
                                <!-- <button onclick="printIframe()">Print</button> -->

                                <div class="certificates">

                                    <div id="barangay_clearance">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <label for="">Birthplace:</label>
                                        <input type="text" class="form-control" name="birthplace">

                                        <label for="">Birthday:</label>
                                        <input type="date" class="form-control" name="birthday">
                                        <br>
                                        <label for="">Civil Status:</label>
                                        <select onchange="update()" name="" id="gg">
                                            <option value="Maried">Marriied</option>
                                            <option value="Widow">window</option>
                                            <option value="Single">singol</option>
                                        </select>
                                        <br>
                                        <label for="">Period of Residency:</label>
                                        <input type="number" class="form-control" name="residency_period"><br>

                                        <label for="">Purpose:</label>
                                        <input type="text" class="form-control" name="purpose">

                                        

                                        <label for="">Duty Officer Full Name:</label>
                                        <input type="text" class="form-control" name="duty_officer_full_name">

                                    </div>
                                    
                                    <div id="business_permit_new">
                                        <label for="businessName">Business name/ Trade Activity:</label>
                                        <input type="text" class="form-control" name="business_name"><br>

                                        <label for="businessPurok">Purok:</label>
                                        <input type="text" class="form-control" name="business_purok"><br>

                                        <label for="">Manager / Operator</label>
                                        <input type="text" class="form-control" name="manager_operator">

                                        <label for="">Address(Manager / Operator)</label>
                                        <input type="text" class="form-control" name="manager_operator_address">

                                        <!-- <label for="businessIssuedDate">Issued Date:</label>
                                        <input type="date" class="form-control" name="business_issued_date"><br> -->
                                    </div>

                                    <div id="business_permit_renew">
                                        <label for="businessName">Business name/ Trade Activity:</label>
                                        <input type="text" class="form-control" name="business_name"><br>

                                        <label for="businessPurok">Purok:</label>
                                        <input type="text" class="form-control" name="business_purok"><br>

                                        <label for="">Manager / Operator</label>
                                        <input type="text" class="form-control" name="manager_operator">

                                        <label for="">Address(Manager / Operator)</label>
                                        <input type="text" class="form-control" name="manager_operator_address">

                                        <!-- <label for="businessIssuedDate">Issued Date:</label>
                                        <input type="date" class="form-control" name="business_issued_date"><br> -->
                                    </div>

                                    <div id="certificate_of_employability">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Age</label>
                                        <input type="number" class="form-control">

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control"><br>

                                        <!-- <label for="">Issued Date:</label>
                                        <input type="date" class="form-control"> -->

                                        <label for="">Duty Officer Full Name:</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div id="certificate_of_income">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Amount (In Numeric Form)</label>
                                        <input type="number" class="form-control"><br>

                                        <!-- <label for="">Issued Date:</label>
                                        <input type="date" class="form-control"> -->

                                        <label for="">Duty Officer Full Name:</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div id="cohabitation">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="cohabitant1Birthdate">Birthdate:</label>
                                        <input type="date" class="form-control" name="birth_date"><br>

                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="cohabitant_first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="cohabitant_middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="cohabitant_last_name"><br>

                                        <label for="cohabitant1Birthdate">Birthdate:</label>
                                        <input type="date" class="form-control" name="cohabitant_birth_date"><br>

                                        <label for="cohabitationPurok">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <!--Month and Year daw-->
                                        <label for="dateOfMarriage">Date of Marriage:</label>
                                        <input type="date" class="form-control" name="date_of_marriage"><br>

                                        <label for="periodOfMarriage">Period of marriage:</label>
                                        <input type="number" class="form-control" name="period_of_marriage"><br>

                                        <!-- <label for="cohabitationIssuedDate">Issued Date:</label>
                                        <input type="date" class="form-control" name="issued_date"><br> -->

                                        <label for="">Duty Officer Full Name</label>
                                        <input type="text" class="form-control" name="duty_officer_full_name">
                                    </div>

                                    <div id="complaint_certificate">
                                        <!--With honorifics-->
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Age</label>
                                        <input type="number" class="form-control">

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Date Filed:</label>
                                        <input type="date" class="form-control">

                                        <!--Respondent Full Name-->
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control"><br>

                                        <label for="">Case Number:</label>
                                        <input type="number" class="form-control">

                                        <label for="">VAWC Official Name</label>
                                        <input type="text" class="form-control">

                                        <!-- <label for="">Issued Date:</label>
                                        <input type="date" class="form-control"> -->
                                    </div>

                                    <div id="death_certificate">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="dead_first_name" placeholder="Name of Dead Person"><br>

                                        <label for="">Middle Initial:</label>
                                        <input type="text" class="form-control" name="dead_middle_initial"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="dead_last_name"><br>

                                        <label for="">Suffix</label>
                                        <input type="text" class="form-control" name="dead_suffix"><br>

                                        <label for="deathAge">Age:</label>
                                        <input type="number" class="form-control" name="dead_age"><br>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control" name="dead_purok"><br>

                                        <label for="dateOfDeath">Date of death:</label>
                                        <input type="date" class="form-control" name="date_of_death"><br>

                                        <label for="timeOfDeath">Time of death:</label>
                                        <input type="time" class="form-control" name="time_of_death"><br>

                                        <label for="causeOfDeath">Cause of death:</label>
                                        <input type="text" class="form-control" name="cause_of_death"><br>

                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="requesting_first_name"
                                            placeholder="Name of Requesting Person"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="requesting_middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="requesting_last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="requesting_suffix"><br>

                                        <label for="relationshipToDeadPerson">Relationship to the dead person:</label>
                                        <input type="text" class="form-control" name="relationship_to_dead_person"><br>

                                        <label for="dateRequested">Date requested:</label>
                                        <input type="date" class="form-control" name="date_requested"><br>
                                    </div>

                                    <div id="first_time_job_seeker">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="jobSeekerPurok">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <label for="residencyPeriod">Period of Residency:</label>
                                        <input type="text" class="form-control" name="residency_period"><br>

                                        <!--(Day/Month/Year daw)-->
                                        <label for="certificationSignedDate">Signed date:</label>
                                        <input type="date" class="form-control" name="signed_date"><br>

                                        <!--(Month and Year daw)-->
                                        <label for="certificationValidationDate">Validation date:</label>
                                        <input type="date" class="form-control" name="validation_date"><br>

                                        <!--(Full name daw)-->
                                        <label for="">Witness</label>
                                        <input type="text" class="form-control" name="witness">
                                    </div>

                                    <div id="indigency_aics">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Initial:</label>
                                        <input type="text" class="form-control" name="middle_initial"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <!-- <label for="">Last Name:</label>
                                        <input type="text"  class="form-control" ><br>
                                     -->
                                        <label for="">Suffix</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="">Purok</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <!-- <label for="">Purpose</label>
                                        <input type="text"  class="form-control"  placeholder="Ex. Food Assistance"><br>
                                     -->
                                        <!-- <label for="">Purpose</label>
                                        <input type="text"  class="form-control"  placeholder="Ex. Purpose Reason"><br>
                                     -->
                                        <label for="indigencyIssuedDate">Issued Date:</label>
                                        <input type="date" class="form-control" name="issued_date"><br>
                                    </div>

                                    <div id="indigency">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="">Age</label>
                                        <input type="number" class="form-control" name="age">
                                        
                                        <label for="">Civil Status</label>
                                        <select name=""  id="civil" onchange="updateText()" class="form-control">
                                            <option value="">Select Civil Status</option>
                                            <option value="m">Married</option>
                                            <option value="s">Single</option>
                                            <option value="w">Widow</option>
                                        </select>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <!-- <label for="">Purpose:</label>
                                        <input type="text" class="form-control"><br> -->

                                        
                                    </div>

                                    <div id="lot_ownership">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="lot_first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="lot_middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="lot_last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="lot_suffix"><br>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control" name="lot_purok"><br>

                                        <ul style="list-style: none;">
                                            <li>
                                                <input type="checkbox">
                                                <label for="">Claimant</label>
                                            </li>
                                            <li>
                                                <input type="checkbox">
                                                <label for="">Beneficiary</label>
                                            </li>
                                            <li>
                                                <input type="checkbox">
                                                <label for="">Actual Occupant</label>
                                            </li>
                                        </ul>

                                        <label for="lotNumber">Lot Number:</label>
                                        <input type="number" class="form-control" name="lot_number" placeholder="Lot No. 123"><br>

                                        <label for="lotAreaNumerical">Area Measurement (Numerical Form):</label>
                                        <input type="number" class="form-control" name="lot_area_numerical"><br>

                                        <!-- <label for="lotAreaWord">Area Measurement (Word Form):</label>
                                        <input type="text" class="form-control"  disabled><br>
                                     -->
                                        <label for="lotLocationAddress">Location Address:</label>
                                        <input type="text" class="form-control" name="lot_location_address"><br>

                                        
                                    </div>

                                    <div id="Oathtaking"> ⁡⁢⁣⁢<!-- ‍wala sa database table -->⁡⁡
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="applicantAge">Age:</label>
                                        <input type="number" class="form-control" name="age"><br>

                                        <label for="applicantResidencyPeriod">Period of Residency:</label>
                                        <input type="number" class="form-control" name="residency_period"><br>

                                        <label for="applicantSignedDate">Signed date:</label>
                                        <input type="date" class="form-control" name="signed_date"><br>

                                        <!--For Guardian-->
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="guardian_first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="guardian_middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="guardian_last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="guardian_suffix"><br>

                                        <label for="guardianAge">Guardian Age:</label>
                                        <input type="number" class="form-control" name="guardian_age"><br>

                                        <!-- <label for="guardianOption">Option (Parent/ Guardian):</label>
                                        <input type="text" class="form-control" ><br> -->

                                        <!-- <label for="applicantName">Name of Applicant:</label>
                                        <input type="text" class="form-control" ><br> -->

                                        <label for="applicantPurok">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <label for="applicantResidencyPeriod2">Period of Residency:</label>
                                        <input type="number" class="form-control" name="residency_period"><br>

                                        <!-- <label for="guardianFullName2">Guardian Full Name:</label>
                                        <input type="text" class="form-control" ><br> -->
                                    </div>

                                    <div id="transfer_of_residency">
                                        <label for="">First Name:</label>
                                        <input type="text" class="form-control" name="first_name"><br>

                                        <label for="">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name"><br>

                                        <label for="">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name"><br>

                                        <label for="">Suffix:</label>
                                        <input type="text" class="form-control" name="suffix"><br>

                                        <label for="">Purok:</label>
                                        <input type="text" class="form-control" name="purok"><br>

                                        <!-- <label for="">Nationality:</label>
                                        <input type="text" class="form-control"><br>
                                     -->
                                        <!-- <label for="">Civil Status:</label>
                                        <input type="text" class="form-control"><br> -->

                                        <label for="">Previous Address:</label>
                                        <input type="text" class="form-control" name="previous_address"><br>

                                        <label for="">Current Address:</label>
                                        <input type="text" class="form-control" name="current_address"><br>

                                        
                                    </div>

                                </div>
                                <br>
                                <button onclick="printIframe()">Print</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card-docs d-flex align-items-center justify-content-center">
                            <div class="docs-container">
                                <iframe id="myIframe" width="100%" height="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-notify.js"></script>
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <script src="assets/js/main.js"> </script>
</body>
</html>