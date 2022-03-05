<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once 'php/connection.php';

global $connection;

$sql = "SELECT * FROM comments ORDER BY id DESC;";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="font-family: Gabriola; font-size: 20pt">Hot Plate Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">Customer Messages</a>
                    </li>


                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="index.php">Logout</a>
                </form>

            </div>
        </nav>





        <br>
        <br>
        <br>
        <br>

        <div class="container">

            <center><h1 style="font-family: Gabriola; font-size: 40pt;"><b><u>Customer Feedbacks</u></b></h1></center>

            <div class="accordion" id="accordionExample">


                <?php
                $result = mysqli_query($connection, $sql);
                if (mysqli_num_rows($result) > 0) {
                    
                   while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo '<div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" style="text-decoration: none;" data-target="#collapse'.$row['id'].'" aria-controls="collapse'.$row['id'].'">
                                Customer Name : '.$row['cus_name'].'  ('.$row['date'].')
                            </button>
                        </h2>
                    </div>

                    <div id="collapse'.$row['id'].'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            '.$row['message'].'
                        </div>
                    </div>
                </div>'; 
                        
                    }
                    
                }
                ?>

                


            </div>

        </div>



    </body>



</html>
