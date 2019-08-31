<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AtKintun - mira al mundo</title>
        <link rel="shortcut icon" href="dist/images/favicon.ico">
        <!--Plugin CSS <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
        <link href="css/plugins.min.css" rel="stylesheet">
        
        <!--main Css-->
        <link href="css/main.min.css" rel="stylesheet"> 
    
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

        .invisible{
        display: none;
        }


        .flag-icon-cl {
        background-image: url(assets/img/cl.svg);
        }

        .flag-icon {
        background-size: contain;
        background-position: 50%;
        background-repeat: no-repeat;
        position: relative;
        display: inline-block;
        width: 1.33333333em;
        line-height: 1em;
        }
        .menu-flags {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        }



        .card .modImage img {
        transition: all 0.55s;
        }


        .rounded {
        border-radius: .25rem!important;
        }

        .img-fluid, .img-thumbnail {
        max-width: 100%;
        height: auto;
        }


        img {
        border-style: none;
        }

        .flag-icon:before {
        content: "\00a0";
        }

        .fa-search:before {
        content: "\f002";
        }

        .searchBox-input{
        margin-top: 16px;
        margin-bottom: -10px;
        }


        .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
        }

        #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
        }

        .pac-controls {
        display: inline-block;
        padding: 5px 11px;
        }

        .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
        }

        #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
        }

        #pac-input:focus {
        border-color: #4d90fe;
        }

        #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
        }

        .fixed-bottom, .fixed-top {
        position: fixed;
        right: 0;
        left: 0;
        z-index: 500;
        }

    </style>
    </head>



    <body>
        <!-- header -->
        <div id="header-fix" class="header fixed-top">
            <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-light py-lg-0 py-4">
                <a class="navbar-brand mr-4 mr-md-5" href="index.php"><img src="dist/images/logo-v2.png" alt=""></a>
                <div id="dl-menu" class="dl-menuwrapper d-block d-lg-none float-right">
                    <button>Open Menu</button>
                    <ul class="dl-menu">

                        <li class="nav-item active dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Home</a>
                           
                        </li>
                        <?php /*
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="blog.php" >Blog</a>
                   
                        </li> */
                        ?>
                        

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Explora</a>
                            <div class="search-widget">
                                <div class="form-group lis-relative ">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="lis-absolute lis-right-20 lis-top-10 lis-line-height-2"> <a href="#" class="lis-light"><i class="fa fa-search"></i></a> </div>
                                </div>
                            </div>
                           
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active dropdown"> <a class="nav-link" href="#" >Home </a></li>
                       
                        <li class="nav-item dropdown"> <a class="nav-link" href="#" >Explora </a></li>
                        <li class="nav-item dropdown"> 
                        <div class="search-widget">
                                <div class="form-group lis-relative searchBox-input">
                                    <input type="text" class="form-control" id="searchBox-input" placeholder="Buscar c&aacute;mara">
                                    
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>


        <!--End header -->
        <!-- Sidebar -->
        <section class="pb-0" style="padding-top: 94px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3 py-5 order-lg-1 order-2 left-sidebar z-index-99">
                        <div class="lis-relative">
                            <h5 class="mb-2">Lista de c&aacute;maras</h5>
                            <p>&Uacute;ltimas c&aacute;maras</p>

                            <div class="mb-4" id="mb-41" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                       
                                    </a>
                                    
                                </div>
                            </div>

                            <div class="mb-4" id="mb-42" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                        <div class="lis-absolute lis-left-20 lis-top-20 lis-bg2 lis-icon lis-rounded-circle-50 text-center">
                                            <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-beer"></i></div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="mb-4" id="mb-43" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                        <div class="lis-absolute lis-left-20 lis-top-20 lis-bg5 lis-icon lis-rounded-circle-50 text-center">
                                            <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-travelling"></i></div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="mb-4" id="mb-44" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="mb-4" id="mb-45" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                        
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative" id="mb-46" >
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                    
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 order-lg-2 order-1 px-0">
                        <div id="map" class="w-100 h-100 map-fixed"></div>

                        <div id="infowindow-content">
                          <img src="" width="16" height="16" id="place-icon">
                          <span id="place-name"  class="title"></span><br>
                          <span id="place-address"></span>
                        </div>

                    </div>
                </div>
            </div>
            <div style="visibility:hidden">
                <script id="_waunh8">var _wau = _wau || []; _wau.push(["dynamic", "lfxwldjygq", "nh8", "c4302bffffff", "small"]);</script><script async src="//waust.at/d.js"></script>
            </div>
        </section>
        <!--End Sidebar -->
        <!-- Top To Bottom-->
        <a href="#" class="scrollup text-center lis-bg-primary lis-rounded-circle-50">
            <div class="text-white mb-0 lis-line-height-1_7 h3"><i class="icofont icofont-long-arrow-up"></i></div>
        </a>
        <!-- End Top To Bottom-->
        <!-- Login /Register Form-->

        <div class="container">
            <div id="modal" class="popupContainer" style="display: none;">
                <header class="popupHeader">
                    <span class="header_title">Login</span>
                    <span class="modal_close"><i class="fa fa-times"></i></span>
                </header>
            </div>
            
        </div>

        <!-- jQuery -->
        
        
        <script src="js/plugins.min.js"></script>
        
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8j1pbZRCtCD4PpaCbKEwb3WZYAzQD0JQ&libraries=places"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript">
        function toCenterMap(lat,lng){
            console.log(lat); 
            console.log(lng); 
            GOOGLEMAPS.setCenterMap(lat,lng)
        }
        </script>
    <!-- Felicidades ya casi eres un hackerman -->
    </body>
</html>