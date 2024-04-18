<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbase = "acibt_db";

    $db = new mysqli ($servername, $username, $password, $dbase);

    // Check connection
    // if ($db) {
    //     echo "Connected to the database";
    // } else {
    //     echo "Failed to connect to the database";
    // }
