<?php

    //Create Constants to store Non Repeating Values
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','food-order');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,'') or die(mysqli_connect_error());//Database Connection
    $db_select = mysqli_select_db($conn,'food-order') or die(mysqli_error($conn));//Selecting Database


?>