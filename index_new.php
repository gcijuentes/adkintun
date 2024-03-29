<?php require "login/loginheader.php"; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Tu ciudad en tiempo real</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />


    <style type="text/css">
        #image0{
            width: 100%;

        }

        #bodyContent p{
                font-size: 1.4em;
                    margin: 0 0 0px;
        }

        #firstHeading{

                font-size: 1.4em;
                margin: 0 0 0 0px;
                margin-bottom: 4px;
        }



    </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar"  <? /* data-color="purple" data-image="assets/img/sidebar-5.jpg" */ ?> >

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.aureacorp.cl" class="simple-text">
                    AdKinTun <img url="#" >
                </a>
            </div>

            <ul class="nav">
                
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                
            </ul>
      </div>
    </div>

    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Maps</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <?php /*
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
                              <p class="hidden-lg hidden-md">
                                5 Notifications
                                <b class="caret"></b>
                              </p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">camara nueva </a></li>
                                <li><a href="#">camara nueva </a></li>
                                <li><a href="#">camara nueva </a></li>
                                <li><a href="#">camara nueva </a></li>
                                <li><a href="#">camara nueva </a></li>
                              </ul>
                        </li> */ ?>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       <?php /* <li>
                           <a href="">
                               <p>Cuenta</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>Dropdown<b class="caret"></b></p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Acci&oacute;n</a></li>
                                <li><a href="#">Otra Acci&oacute;n</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> */ ?>

                        <li>
                            <a href="login/logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
            <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="map"></div>

    </div>
</div>


</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Checkbox, Radio & Switch Plugins -->
   <script src="assets/js/bootstrap-checkbox-radio-switch.js"></script> 

   <!--  Charts Plugin -->
   <script src="assets/js/chartist.min.js"></script> 

    <!--  Notifications Plugin    -->
     <script src="assets/js/bootstrap-notify.js"></script> 

    <!--  Google Maps Plugin     AIzaSyBnBSB0Jaa7VC02irNY__uZW77OYER6Zs0 -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnBSB0Jaa7VC02irNY__uZW77OYER6Zs0"></script>
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <script src="assets/js/demo.js"></script>

    <script src="main.js"></script>
    <script src="js.js"></script>

    <script>
        
        /*$().ready(function(){
            demo.initGoogleMaps();
        });*/

    </script>

</html>
