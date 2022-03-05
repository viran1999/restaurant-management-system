<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

        <script src="bostrap_res/jquery.min.js" type="text/javascript"></script>
        <link href="bostrap_res/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bostrap_res/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="bostrap_res/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="bostrap_res/w3css.css" rel="stylesheet" type="text/css"/>

        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            body {
                background: #9CECFB;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }

            input[type=text] {
                background-color:  #dedede;
                color: black;
                margin: 10px; 
            }

            input[type=button]{

                background-color: #56baed;
                border: none;
                color: white;
                margin: 20px 20px 40px 20px;
            }

        </style>
    </head>
    <body>

        <div class="wrapper fadeInDown">

            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="img/login.png" style="margin:30px 30px 30px 30px">
                </div>

                <!-- Login Form -->
                <form>
                    <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                    <input type="button" class="btn btn-primary" onclick="loginCheck();" value="LOG IN">

                </form>

            </div>
        </div>
    </body>



</html>
<script type="text/javascript">

    function loginCheck() {

        var uname = document.getElementById('login').value;
        var pw = document.getElementById('password').value;


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

//                    console.log(this.responseText);
                if (this.responseText == "ok") {

                    window.location.href = "dashboard.php";

                } else {

                    alert("Username Or Password Incorrect");

                }

            }
        };
        xhttp.open("GET", "php/login.php?name=" + uname + "&pword=" + pw, true);
        xhttp.send();

    }

</script>
