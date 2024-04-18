<?php
    require('db.php');

    session_start();

    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `admin` WHERE username='$username' and password='$password'";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        $count = mysqli_num_rows($result);

        if ($count == 1){
            $_SESSION['username'] = ucfirst($username);
            header("Location: home.php");
        } else {
            echo "Invalid Login Credentials.";
        }
    }