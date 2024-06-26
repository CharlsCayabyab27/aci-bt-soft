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
    ACI-BT | Login
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

<body class="d-flex align-items-center justify-content-center"
    style="height: 100vh; width: 100%; background-color: #F4F3EF;">
    <div class="content col-lg-3" style="border-radius: 10px;">
        <div class="card card-user">
            <div class="image">
                <img src="./assets/img/tiniguiban.jpg" alt="..." class="img-fluid">
            </div>
            <div class="card-body">
                <div class="author">
                    <img class="avatar border-gray" src="./assets/img/logo.jpg" alt="...">
                    <h5 class="title" style="color: #729ED9;">Welcome to ACI-BT!</h5>
                    <label for="">Login</label>
                </div>
                <form action="login_process.php" method="POST" style="padding: 0 30px;">
                    <div class="row d-flex flex-column">
                        <div class="col-md-12 px-1">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">@</span>
                                    <input  type="text" 
                                            class="user-input" 
                                            aria-label="Sizing example input" 
                                            placeholder="Username" 
                                            name="username">
                                </div>
                            </div>
                        </div>

                        <style>
                            .user-input, .password-input {
                                display: block;
                                width: 85%;
                                padding: 0.375rem 0.75rem;
                                font-size: .86rem;
                                line-height: 1.5;
                                color: #495057;
                                background-color: #fff;
                                background-clip: padding-box;
                                border: 1px solid #ced4da;
                                border-left: none;
                                border-radius: 0.25rem;
                                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                            }

                            .toggle-password {
                                position: absolute;
                                top: 50%;
                                right: 10px;
                                transform: translateY(-50%);
                                cursor: pointer;
                            }
                        </style>

                        <div class="col-md-12 px-1">
                            <div class="form-group">
                                <div class="input-group mb-3" style="position: relative;">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i
                                            class="nc-icon nc-lock-circle-open"></i></span>
                                    <input type="password" id="password" class="password-input"
                                        placeholder="Password" name="password"/>
                                    <span class="toggle-password" onclick="togglePasswordVisibility()" style="opacity: 0.6;">🙈</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-round" name="submit"
                                style="background-color: #729ED9;">Login</button>
                        </div>
                    </div>
                </form>

            </div>
            <div class="card-footer">
                <hr>
                <!--Pang arte lang-->
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var togglePassword = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                togglePassword.textContent = "🙉";
            } else {
                passwordInput.type = "password";
                togglePassword.textContent = "🙈";
            }
        }
    </script>

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