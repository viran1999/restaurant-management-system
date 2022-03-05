<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'connection.php';

global $connection;

$name = $_GET['name'];
$email = $_GET['email'];
$msg = $_GET['msg'];

//date_default_timezone_set("Asia/Colombo");
//$date = date("y-m-d");

$sql = "insert into comments(cus_name,email,message) values('$name','$email','$msg')";

if (mysqli_query($connection, $sql)) {
    echo 'Reported';
} else {
    echo 'Error';
//    echo mysqli_error($connection);
}



