<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AtKintun - mira al mundo</title>
        <link rel="shortcut icon" href="dist/images/favicon.ico">
        <!--Plugin CSS-->
        <link href="dist/css/plugins.min.css" rel="stylesheet">
        <!--main Css-->
        <link href="dist/css/main.min.css" rel="stylesheet"> 
    
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
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="blog.php" >Blog</a>
                   
                        </li>
                        
                        <?php /*
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing</a>
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing By Categories</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="listing-categories-style1.html">Category 1</a></li>
                                        <li><a href="listing-categories-style2.html">Category 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing No Map</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="listing-no-map-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listing-no-map-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Half Screen Map</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="half-screen-search-sidebar-place.html">With Search Place</a></li>
                                        <li><a href="half-screen-search-sidebar-event.html">With Search Event</a></li>
                                        <li><a href="half-screen-search-sidebar-property.html">With Search Property</a></li>
                                        <li><a href="half-screen-with-categories-sidebar.html">With Categories Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>*/?>


                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Explorar</a>
                            <div class="search-widget">
                                <div class="form-group lis-relative">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="lis-absolute lis-right-20 lis-top-10 lis-line-height-2"> <a href="#" class="lis-light"><i class="fa fa-search"></i></a> </div>
                                </div>
                            </div>
                           <?php /*
                            <ul class="dl-submenu">
                                <li class="dl-back"><a href="#">back</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Blog</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="blog-grid.html"> Blog Grid</a></li>
                                        <li><a href="blog-listing.html"> Blog Listing</a></li>
                                        <li><a href="blog-single.html"> Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact</a></li>
                                <li><a href="user-profile.html"> User Profile</a></li>
                                <li><a href="faq.html"> Faq</a></li>
                                <li><a href="pricing.html"> Pricing Table</a></li>
                                <li><a href="coming-soon.html"> Coming Soon</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">404 Error</a>
                                    <ul class="dl-submenu">
                                        <li class="dl-back"><a href="#">back</a></li>
                                        <li><a href="error-dark.html"> 404 Error Dark</a></li>
                                        <li><a href="error-light.html"> 404 Error Light</a></li>
                                    </ul>
                                </li>
                            </ul>
                             */?>
                        </li>

                        <?php /*
                        <li> <a href="#modal" class="text-white login_form"><i class="fa fa-sign-in pr-2"></i> Sign In | Register</a></li>

                        <li> <a href="add-listing.html" ><i class="fa fa-plus pr-1"></i> Add Listing</a></li>
                            */ ?>


                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active dropdown"> <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Home </a>
                          <?php /*  
                            <i class="fa fa-angle-down"></i>
                          <ul class="dropdown-menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                            </ul>
                            */?>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link" href="blog.php" >Blog </a>
                            <?php /*
                                <i class="fa fa-angle-down"></i>
                             <ul class="dropdown-menu">
                                <li><a href="listing-explore-place-profile.html">Explore Place</a></li>
                                <li><a href="listing-explore-event-profile.html">Explore Event</a></li>
                                <li><a href="listing-explore-property-profile.html">Explore Property</a></li>
                            </ul>
                            */?>
                        </li>
                        <?php /*<li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Listing <i class="fa fa-angle-down"></i></a>
                             <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing By Categories</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listing-categories-style1.html">Category 1</a></li>
                                        <li><a href="listing-categories-style2.html">Category 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Listing No Map</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listing-no-map-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listing-no-map-fullwidth.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Half Screen Map</a>
                                     <ul class="dropdown-menu">
                                        <li><a href="half-screen-search-sidebar-place.html">With Search Place</a></li>
                                        <li><a href="half-screen-search-sidebar-event.html">With Search Event</a></li>
                                        <li><a href="half-screen-search-sidebar-property.html">With Search Property</a></li>
                                        <li><a href="half-screen-with-categories-sidebar.html">With Categories Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </li>*/?>
                        <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">Explorar </a>

                        <li class="nav-item dropdown"> 
                        <div class="search-widget">
                                <div class="form-group lis-relative searchBox-input">
                                    <input type="text" class="form-control" id="searchBox-input" placeholder="Search">
                                    <div class="lis-absolute lis-right-20 lis-top-10 lis-line-height-2"> <a href="#" class="lis-light"><i class="fa fa-search"></i></a> </div>
                                </div>
                            </div>
                        
                            
                            <?php /*
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-grid.html"> Blog Grid</a></li>
                                        <li><a href="blog-listing.html"> Blog Listing</a></li>
                                        <li><a href="blog-single.html"> Single Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"> Contact</a></li>
                                <li><a href="user-profile.html"> User Profile</a></li>
                                <li><a href="faq.html"> Faq</a></li>
                                <li><a href="pricing.html"> Pricing Table</a></li>
                                <li><a href="coming-soon.html"> Coming Soon</a></li>
                                <li class="dropdown-submenu"><a tabindex="-1" href="#">404 Error</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="error-dark.html"> 404 Error Dark</a></li>
                                        <li><a href="error-light.html"> 404 Error Light</a></li>
                                    </ul>
                                </li>
                            </ul>  */ ?>


                        </li>
                    </ul>
                    <?php /*
                    <ul class="list-unstyled my-2 my-lg-0">
                        <li>
                            <a href="#modal" class="text-white login_form"><i class="fa fa-sign-in pr-2"></i> Sign In | Register</a>
                        </li>
                    </ul> <a href="add-listing.html" class="btn btn-outline-light btn-sm ml-0 ml-lg-4 mt-3 mt-lg-0"><i class="fa fa-plus pr-1"></i> Add Listing</a> 
                    */?>
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
                                        <div class="lis-absolute lis-left-20 lis-top-20  lis-icon lis-rounded-circle-50 text-center">
                                            <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="flag-icon flag-icon-cl"></i></div>
                                        </div>
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
                                        <div class="lis-absolute lis-left-20 lis-top-20 lis-bg3 lis-icon lis-rounded-circle-50 text-center">
                                            <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-radio-mic"></i></div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="mb-4" id="mb-45" >
                                <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">
                                    <a href="#">
                                        <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                        <div class="lis-absolute lis-left-20 lis-top-20 lis-bg1 lis-icon lis-rounded-circle-50 text-center">
                                            <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-hotel-alt"></i></div>
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="card lis-brd-light text-center text-lg-left lis-info lis-relative" id="mb-46" >
                                <a href="#">
                                    <div class="lis-grediant grediant-tb-light lis-relative modImage rounded"> <img src="dist/images/image.png" alt="" class="img-fluid rounded" /> </div>
                                    <div class="lis-absolute lis-left-20 lis-top-20 lis-bg6 lis-icon lis-rounded-circle-50 text-center">
                                        <div class="text-white mb-0 lis-line-height-2_5 h4"><i class="icofont icofont-medical-sign-alt"></i></div>
                                    </div>
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



                <div class="popupBody">

                    <!-- Social Login -->                       



                    <!-- Username & Password Login form -->

                    <div class="user_login">

                        <form>



                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 " placeholder="username or email address" />

                            <br />





                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 " placeholder="password" />

                            <br />



                            <div class="checkbox">

                                <input id="remember" type="checkbox" />

                                <label for="remember">Remember me on this computer</label>

                            </div>



                            <div class="action_btns">



                                <a href="#" class="btn btn-primary btn-default mt-3 w-100">Login</a>

                            </div>

                        </form>

                        <br/>

                        Sign in with your social network<br/>

                        <ul class="list-inline my-0">

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-linkedin"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-tumblr"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-pinterest-p"></i></a></li>

                        </ul>

                        <hr/>

                        Don't have an account <a href="#" class="register_form">Sign Up</a>

                    </div>



                    <!-- Register Form -->

                    <div class="user_register">

                        <form>



                            <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Username" />

                            <br />





                            <input type="email" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Email Address" />

                            <br />





                            <input type="password" class="form-control border-top-0 border-left-0 border-right-0 rounded-0" placeholder="Password" />

                            <br />



                            <div class="checkbox">

                                <input id="send_updates" type="checkbox" />

                                <label for="send_updates">Send me occasional email updates</label>

                            </div>



                            <div class="action_btns">

                                <a href="#" class="btn btn-primary btn-default mt-3 w-100">Register</a>

                            </div>

                        </form>

                        <br/>

                        Register with your social network<br/>

                        <ul class="list-inline my-0">

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-facebook"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-twitter"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-linkedin"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-tumblr"></i></a></li>

                            <li class="list-inline-item mr-0"><a href="#" class="lis-light lis-social border lis-brd-light text-center lis-line-height-2_3 rounded d-block"><i class="fa fa-pinterest-p"></i></a></li>

                        </ul>

                        <hr/>

                        Already have an account <a href="#" class="login_form">Sign In</a>

                    </div>

                </div>


            </div>
            <!-- <script id="_wauoqd">var _wau = _wau || []; _wau.push(["dynamic", "1hlm4yhsqd", "oqd", "666666ffffff", "small"]);</script><script async src="//waust.at/d.js"></script> -->

        </div>

        <!-- End Login /Register Form-->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8j1pbZRCtCD4PpaCbKEwb3WZYAzQD0JQ&libraries=places"></script>
        <!-- <script src="dist/js/map.js"></script> -->
        <script src="main.js"></script>
        <script type="text/javascript">
        function toCenterMap(lat,lng){
            console.log(lat); 
            console.log(lng); 
            GOOGLEMAPS.setCenterMap(lat,lng)
        }
        </script>
    </body>

</html>