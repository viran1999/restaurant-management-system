<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">

        <title>Hot Plate</title>

        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>

        <link href="css/dycalendar.min.css" rel="stylesheet"/>
        <!--<script src="javascript/dycalendar.min.js" type="text/javascript"></script>-->
        <style>



            .sidenav {
                height: 100%;
                width: 250px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color:  #d9d9d9;
                overflow-x: hidden;
                padding-top: 20px;
                margin-top: 45px; 
                border-right:3px solid #004085; 
            }

            /* Style the sidenav links and the dropdown button */
            .sidenav a, .dropdown-btn {
                margin-top : 8px; 
                padding: 5px 8px 6px 16px;
                text-decoration: none;
                font-size: 20px;
                color: black;
                display: block;
                border-radius: 15px 50px;
                border-bottom: 6px solid #000;
                background: none;
                width: 100%;
                text-align: left;
                cursor: pointer;
                outline: none;
            }

            /* On mouse-over */
            .sidenav a:hover, .dropdown-btn:hover {
                color:#262626;
            }

            /* Main content */
            .main {
                margin-left: 200px; /* Same as the width of the sidenav */
                font-size: 10px; /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            /* Add an active class to the active dropdown button */
            .active {
                background-color: green;
                color: transparent;
            }

            /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
            .dropdown-container {
                display: none;
                background-color: #262626;
                padding-left: 8px;
                padding-right: 20px;

            }

            /* Optional: Style the caret down icon */
            .fa-caret-down {
                float: right;
                padding-right: 8px;
            }

            /* Some media queries for responsiveness */
            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; z-index: 6;">
            <a class="navbar-brand" href="#" style="font-family: Times New Roman; margin:0px 0px 0px 10px; font-size: 15pt"><img src="img/navbaricon.png" style="margin:0px 10px 0px 0px">KDU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active" style="background-color: transparent">
                        <a class="nav-link" href="#" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Attendance</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.html" style="font-family: Times New Roman; margin:0px 0px 5px 10px; font-size: 15pt">Medical records</a>
                    </li>
<!--                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="font-family: Times New Roman; margin:0px 0px 5px 0px; font-size: 15pt" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            FOOD PRICES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Pasta_&_Noodles_pl.html">Pasta & Noodles</a>
                            <a class="dropdown-item" href="Bakery_Products_pl.html">Bakery Products</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>-->

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-success my-2 my-sm-0" href="login.php">Log out</a>
                </form>

            </div>
        </nav>


        <div class="row">
            <div class="col-md-5" style="margin:0px 0px 0px 0px ;  ">
                <!--                <div class="pos-f-t">
                                    <div class="collapse" id="navbarToggleExternalContent">
                                        <div class="bg-dark p-4">
                                            <h5 class="text-white h4">Collapsed content</h5>
                                            <span class="text-muted">Toggleable via the navbar brand.</span>
                                        </div>
                                    </div>
                                    <nav class="navbar navbar-dark bg-dark">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </nav>
                                </div> -->

                <div class="sidenav">
                    <a class="btn btn-outline-light" href="#about" style="border-bottom:6px solid #000">About</a>
                    <button class="dropdown-btn btn btn-outline-light">Calander &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;></button>
                    <div class="dropdown-container" style="align-content: center; height: 320px ;padding: 20px 0px 5px 15px">

                        <!--                        <div id="sample-calendar" class="dycalendar-container dycalendar-month-prev-next-button  skin-green round-edge shadow-green">
                        
                                                </div>-->

                        <div class="dycalendar-month-prev-next-button dycalendar-container shadow-default round-edge skin-blue gradient"></div>


                    </div>
                    <a class="btn btn-outline-light" href="#services">Services</a>
                    <a class="btn btn-outline-light" href="#clients">Clients</a>
                    <a class="btn btn-outline-light" href="#contact">Contact</a>

                    <a class="btn btn-outline-light" href="#contact">Search</a>
                </div>


                <script src="javascript/dycalendar-jquery.min.js"></script>
                <script src="javascript/default.js"></script>



                <script>
                    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                    var dropdown = document.getElementsByClassName("dropdown-btn");
                    var i;

                    for (i = 0; i < dropdown.length; i++) {
                        dropdown[i].addEventListener("click", function () {
                            this.classList.toggle("active");
                            var dropdownContent = this.nextElementSibling;
                            if (dropdownContent.style.display === "block") {
                                dropdownContent.style.display = "none";
                            } else {
                                dropdownContent.style.display = "block";
                            }
                        });
                    }
                </script>


            </div>


            <div class="col-md-7" style="margin:70px 0px 0px 0px ;  ">

            </div>
        </div>




    </body>
</html>
