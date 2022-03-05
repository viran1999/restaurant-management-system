<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = "localhost";
$db_name = "hot_plate";
$db_user = "root";
$db_password = "";
$db_port = "3306";

$connection = mysqli_connect($db_host,$db_name, $db_user, $db_password, $db_port );
if($connection->connect_error){
    echo 'Failed';
    die();
    
}
