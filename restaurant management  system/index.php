 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hot Plate</title>

        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>
        <style>
            .flip-box {
                background-color: #f2f2f2;
                width: 300px;
                height: 500px;
                border:  white;
                perspective: 1000px; /* Remove this if you don't want the 3D effect */
            }

            /* This container is needed to position the front and back side */
            .flip-box-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
            }

            /* Do an horizontal flip when you move the mouse over the flip box container */
            .flip-box:hover .flip-box-inner {
                transform: rotateY(180deg);
            }

            /* Position the front and back side */
            .flip-box-front, .flip-box-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden; /* Safari */
                backface-visibility: hidden;
            }

            /* Style the front side */
            .flip-box-front {
                background-color:#e3f2fd;
                color: black;
                border:  black;
            }

            /* Style the back side */
            .flip-box-back {
                background-color:#b3d9ff;
                color: white;
                transform: rotateY(180deg);
            }


            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #3399ff;
                background-color:  #ffffff;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                width: 250px;
            }

            .button:hover {background-color: #ffffff}

            .button:active {
                background-color: #ffffff;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            </style>




        </head>
        <body style="background-color:  #f2f2f2">


            <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd; z-index: 6;">
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

                <!--        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Navbar w/ text</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                </ul>
                                <span class="navbar-text">
                                    Navbar text with an inline element
                                </span>
                            </div>
                        </nav>-->



                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/bcg1.jpg" class="d-block w-100" alt="...">


                            </div>
                            <div class="carousel-item">
                                <img src="img/bcg3.jpg" class="d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="img/bcg2.jpg" class="d-block w-100" alt="...">

                            </div>
                            
                            <div class="carousel-item">
                                <img src="img/bcg4.jpg" class="d-block w-100" alt="...">

                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <br>

                    <div class="container">

                        <center><h1 style="font-family: Times New Roman ; font-size: 25pt"><b>UPDATE DETAILS</b></h1></center>

                        <div class="row" style="align-items: center">



                            <div class="col-md-6" style="margin:40px 0px 40px 0px ">
                                <center>
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <h2>Lecturer</h2>
                                                <img src="img/lecturer.png" style="margin:0px 0px 0px 0px">
                                            </div>
                                            <div class="flip-box-back">

                                                <a class="nav-link button" style = "margin-top:90px" href="#">Add Lecturer</a><br> 
                                                <a class="nav-link button" style = "margin-top:50px" href="#">Edit Lecturer </a><br>
                                                <a class="nav-link button" style = "margin-top:50px" href="#">Delete Lecturer</a><br>
                                                <!--                                                <button class="button">Click Me</button>-->

                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <!--transform: rotateY(120deg);-->
                            <div class="col-md-6" style="margin:40px 0px 40px 0px"  >
                                <center>
                                    <div class="flip-box">
                                        <div class="flip-box-inner">
                                            <div class="flip-box-front">
                                                <h2>Student</h2>
                                                <img src="img/student.png" style="margin:0px 0px 0px 0px">
                                            </div>
                                            <div class="flip-box-back">
                                                <a class="nav-link button" style = "margin-top:90px" href="#">Add Student</a><br> 
                                                <a class="nav-link button" style = "margin-top:50px" href="#">Edit Student </a><br>
                                                <a class="nav-link button" style = "margin-top:50px" href="#">Delete Student</a><br>  
                                            </div>
                                        </div>
                                    </div>
                                </center>
                            </div>

                            <!--                    <div class="col-md-4" style="margin-bottom: 10px">
                                                    <div class="card" >
                                                        <img src="img/sp7.jpg" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Pollo Alla Milanese</h5>
                                                            <p class="card-text">Beef fillet with seasonal vegetables in beefy tomato based soup.Chicken rasher, chilli, garlic & diced tomatoes tossed in olvie oil </p>
                                                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Read More</button></center>
                                                        </div>
                                                    </div>
                                                </div>-->


                        </div>


                        <!-- Modal -->
                        <!--                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Chicken rasher, shitake mushrooms, chilli, garlic & diced tomatoes tossed in olive oil with a hint of tomato sauce </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ...
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->

                    </div>

                    <!--            <div class="row" style="background: #000000; padding: 10px; color: #cccccc">
                    
                                    <div class="col-md-4">
                    
                                        <h2>Mobile :</h2>
                                        <h4>+94 777366289 / +94 112802236</h4>
                    
                                    </div>
                                    <div class="col-md-4">
                    
                                        <h2>E mail :</h2>
                                        <h4>info@hotplate.com</h4>
                    
                                    </div>
                                    <div class="col-md-4">
                    
                                        <h2>Address :</h2>
                                        <h4>101A , Kema Mawatha, Awilla Kapan</h4>
                    
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                </div>-->

            </body>
        </html>
