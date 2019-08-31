<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l1 sidebar-r1-xs" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Ad Kintun</title>

 <? /* <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <!-- <link href="css/vendor/all.css" rel="stylesheet"> -->

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->  */ ?>
  <link href="css/vendor/bootstrap.css" rel="stylesheet">
  
  <link href="font-awesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
   
  <link href="css/vendor/picto.css" rel="stylesheet">
  <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet">
  <link href="css/vendor/datepicker3.css" rel="stylesheet">
  <link href="css/vendor/jquery.minicolors.css" rel="stylesheet">
  <link href="css/vendor/bootstrap-slider.css" rel="stylesheet">
  <link href="css/vendor/railscasts.css" rel="stylesheet">
  <link href="css/vendor/jquery-jvectormap.css" rel="stylesheet">
  <link href="css/vendor/owl.carousel.css" rel="stylesheet">
  <link href="css/vendor/slick.css" rel="stylesheet">
  <link href="css/vendor/morris.css" rel="stylesheet">
  <link href="css/vendor/ui.fancytree.css" rel="stylesheet">
  <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet">
  <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet">
  <link href="css/vendor/select2.css" rel="stylesheet">


    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

<? /*
  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "html" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "html" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "html" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/html/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <!-- <link href="css/app/app.css" rel="stylesheet"> -->

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->  */ ?>
  <link href="css/app/main.css" rel="stylesheet">

<? /*  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible --> */ ?>

  <link href="css/app/essentials.css" rel="stylesheet" />
  <link href="css/app/layout.css" rel="stylesheet" />
  <link href="css/app/sidebar.css" rel="stylesheet" />
  <link href="css/app/sidebar-skins.css" rel="stylesheet" />
  <link href="css/app/navbar.css" rel="stylesheet" />
  <link href="css/app/media.css" rel="stylesheet" />
  <link href="css/app/maps.css" rel="stylesheet" />
  <link href="css/app/colors-buttons.css" rel="stylesheet" />
  <link href="css/app/colors-text.css" rel="stylesheet" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />

<style type="text/css">
        #image0{
            width: 200px;

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

        .navbar .navbar-brand  {
            padding: 0 15px;
            font-weight: 700;
            margin: 0px 0px;

          }


          #map-canvas {
  margin: 0;
  padding: 0;
  height: 400px;
  max-width: none;
}
#map-canvas img {
  max-width: none !important;
}
.gm-style-iw {
  width: 222px !important;
  top: 15px !important;
  left: 0px !important;
  background-color: #fff;
  box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
  border: 1px solid rgba(72, 181, 233, 0.6);
  border-radius: 2px 2px 10px 10px;
}
#iw-container {
  margin-bottom: 10px;
}
#iw-container .iw-title {
  font-family: 'Open Sans Condensed', sans-serif;
  padding: 10px;
  background-color: #48b5e9;
  color: white;
  margin: 0;
  border-radius: 2px 2px 0 0;
  font-size: 1.2em;
  font-weight: 400;
  padding: 1px;

}
#iw-container .iw-content {
  font-size: 13px;
  line-height: 18px;
  font-weight: 400;
  margin-right: 1px;
  padding: 15px 5px 20px 15px;
  max-height: 140px;
  overflow-y: auto;
  overflow-x: hidden;
}
.iw-content img {
  float: right;
  margin: 0 5px 5px 10px; 
}
.iw-subTitle {
  font-size: 16px;
  font-weight: 700;
  padding: 5px 0;
}
.iw-bottom-gradient {
  position: absolute;
  width: 326px;
  height: 25px;
  bottom: 10px;
  right: 18px;
  background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
  background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
}  

    </style>
  

  
 <script type="text/javascript">
        

    function toCenterMap(lat,lng){
        console.log(lat); 
        console.log(lng); 
        GOOGLEMAPS.setCenterMap(lat,lng)
    }






    </script>

</head>

<body>

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- <a href="#sidebar-menu" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a> -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#sidebar-map" data-toggle="sidebar-menu" class="toggle pull-right visible-xs"><i class="fa fa-map-marker"></i></a>

          <a class="navbar-brand" href="index.html">Ad Kintun</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav">
          <form class="navbar-form navbar-left margin-none ">

            <div class="search-1">
            <i class="fa fa-fw fa-info"></i> Descubre miles de lugares.
              <div class="input-group">
                <span class="input-group-addon"><i class="icon-search"></i></span>

                <input type="text" class="form-control input-lg" placeholder="Buscar ..">
              </div>
            </div>
          </form>
          
        <!-- /.navbar-collapse -->

      </div>
    </nav>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar)  -->
    <?php /* <aside class="sidebar left sidebar-size-1 sidebar-mini-reveal sidebar-offset-0 sidebar-skin-dark sidebar-visible-desktop" id=sidebar-menu data-type=collapse>
      <div data-scrollable>
        <ul class="sidebar-menu sm-bordered sm-icons-block sm-icons-right">
          <li class="hasSubmenu open active">
            <a href="#discover"><i class="fa fa-star"></i><span>Discover</span></a>
            <ul id="discover" class="in">
              <li class="active"><a href="index.html"><i class="fa fa-map-marker"></i><span>Full screen Map</span></a></li>
              <li><a href="map-listing-list.html"><i class="fa fa-list"></i><span>Map Listing - List</span></a></li>
              <li><a href="map-listing-grid.html"><i class="fa fa-th"></i><span>Map Listing - Grid</span></a></li>
              <li><a href="listing.html"><i class="fa fa-list"></i><span>Listing - List</span></a></li>
              <li><a href="listing-grid.html"><i class="fa fa-th"></i><span>Listing - Grid</span></a></li>
              <li><a href="listing-map.html"><i class="fa fa-map-marker"></i><span>Listing - Map</span></a></li>
            </ul>
          </li>
          <li class="hasSubmenu">
            <a href="#property"><i class="fa fa-home"></i><span>Property</span></a>
            <ul id="property">
              <li><a href="map-property.html"><i class="fa fa-map-marker"></i><span>Map + Property</span></a></li>
              <li><a href="property.html"><i class="fa fa-list"></i><span>Property details</span></a></li>
            </ul>
          </li>
          <li><a href="map-edit.html"><i class="fa fa-pencil"></i><span>Add property</span></a></li>
        </ul>
        <h4 class="category">Map features</h4>
        <ul class="sidebar-menu sm-icons-block sm-active-item-bg sm-icons-right">
          <li><a href="map-filters.html"><i class="fa fa-search"></i><span>Map Filters</span></a></li>
          <li><a href="map-themes.html"><i class="fa fa-eyedropper"></i><span>Map Themes</span></a></li>
          <li><a href="map-markers.html"><i class="fa fa-map-marker"></i><span>Map Markers</span></a></li>
        </ul>
        <h4 class="category">Website pages</h4>
        <div class="sidebar-block">
          <ul class="list-group list-group-menu">
            <li class="list-group-item"><a href="front-home-slider.html">Home + Slider</a></li>
            <li class="list-group-item"><a href="front-home-map.html">Home + Map</a></li>
            <li class="list-group-item"><a href="front-listing-list.html">Listing - List</a></li>
            <li class="list-group-item"><a href="front-listing-grid.html">Listing - Grid</a></li>
            <li class="list-group-item"><a href="front-property.html">Property</a></li>
          </ul>
        </div>
        <h4 class="category">Versions</h4>
        <div class="sidebar-block text-center">
          <a class="btn btn-primary btn-block" href="../angular/index.html">
            <strong>AngularJS</strong>
          </a>
          <a class="btn btn-primary active btn-block" href="index.html">
            <strong>HTML</strong>
          </a>
        </div>
      </div>
    </aside>   */  ?>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <aside class="sidebar right sidebar-size-xs-1 sidebar-size-lg-48pc sidebar-size-40pc sidebar-offset-0 sidebar-skin-white" id=sidebar-map data-toggle-layout=sidebar-r-48pc-lg,sidebar-r-40pc data-toggle-bar=true data-overlay=false>
      <div data-scrollable>

        <div class="sidebar-block sidebar-block-full padding-none">
          <div class="cover overlay hover cover-image-full height-220">
            <? /* <img src="images/photodune-3979102-superb-backyard-xs.jpg" alt="people" /> */ ?>
            <div class="overlay overlay-bg-black overlay-full">
              <div class="v-center">
                <h3 class="text-overlay text-headline">Featured Property</h3>
                <p class="text-overlay text-subhead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="text-h5">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-white"></span>
                </p>
              </div>
            </div>
            <a href="map-property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
              <span class="v-center">
                <span class="btn btn-lg btn-red-500"><i class="fa fa-fw fa-star"></i> Details</span>
              </span>
            </a>
          </div>
        </div>

        <h4 class="category">Properties</h4>
        <div class="sidebar-block padding-none">
          <div data-toggle="gridalicious" data-width="200">
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-primary inline absolute left margin-none">Sale</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-378874-real-estate-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Property for sale</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;277,028.00</span>&nbsp;

                <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-default inline absolute left margin-none">Sale</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-195203-houses-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Property for sale</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;82,331.00</span>&nbsp;

                <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-default inline absolute left margin-none">Sale</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-196089-house-xs.jpg" alt="location" class="img-responsive" /> --> 
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Property for sale</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;81,662.00</span>&nbsp;

                <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-primary inline absolute left margin-none">Rent</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-197173-residential-home-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Residential Home</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;132,021.00</span>&nbsp;

                <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-primary inline absolute left margin-none">Rent</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-3979102-superb-backyard-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Superb Backyard</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;175,654.00</span>&nbsp;

                <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-default inline absolute left margin-none">Sale</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-2238345-apartments-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Apartment</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;187,285.00</span>&nbsp;

                <i class="small fa fa-fw icon-user-1" data-toggle="tooltip" data-title="Individual"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
            <div class="panel panel-default relative">
              <div class="ribbon-heading ribbon-default inline absolute left margin-none">Sale</div>
              <div class="cover hover overlay margin-none">
                <!-- <img src="images/photodune-1112879-modern-kitchen-in-luxury-mansion-xs.jpg" alt="location" class="img-responsive" /> -->
                <a href="property.html" class="overlay overlay-full overlay-bg-black overlay-hover">
                  <span class="v-center">
                <span class="btn btn-circle btn-white"><i class="fa fa-eye"></i></span>
                  </span>
                </a>
              </div>
              <div class="panel-body">
                <h4 class="margin-v-0-5">Luxury Mansion</h4>
                <p class="small">
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <span class="label label-grey-100">&euro;72,152.00</span>&nbsp;

                <i class="small fa fa-fw icon-home-fill-1" data-toggle="tooltip" data-title="Agency"></i>

                <a href="property.html" class="btn btn-primary btn-circle absolute bottom right"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="sidebar-block equal-padding">
          <ul class="pagination margin-none">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>
        </div>

      </div>
    </aside>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner padding-top-none" id="content">

          <div id="google-fs-realestate" data-toggle="google-maps" data-file="js/data/google_maps/markers-listing.json" data-zoom-position="LEFT_BOTTOM" class="maps-google-fs"></div>



        <!--  <nav class="navbar navbar-default navbar-size-large navbar-static-top navbar-map-overlay">
            <a data-toggle="sidebar-menu" href="#sidebar-map" class="toggle pull-right hidden-xs margin-none"><i class="fa fa-list"></i></a>
            <div class="navbar-header">
              <div class="container-fluid">
                <div class="navbar-text pull-left"><i class="fa fa-fw fa-info"></i> Discover thousands of locations</div>
                <a class="toggle pull-right margin-none visible-xs" data-toggle="collapse" data-target="#map-nav"><i class="fa fa-sliders fa-rotate-90"></i></a>
              </div>
            </div> -->
            <!-- Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="map-nav">
              <form class="navbar-form  navbar-left">
                <div class="search-2">
                  <div class="input-group">

                    <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
                    <span class="input-group-btn">
            <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
        </span>
                  </div>
                </div>
              </form>
            </div>
          </nav> -->

          <script id="real-estate-map-pop-1" type="text/x-handlebars-template">
            <div class="padding-none full">
              <div class="ribbon-heading text-h5 {{ ribbon_mark_class }} absolute leftinline margin-none">{{ ribbon_mark_text }}</div>
              <div class="cover overlay cover-image-full margin-none">
                <a href="{{ details_url }}" class="thumb" data-height="150px">
                  <img src="{{ image }}" alt="image" class="img-responsive">
                </a>
              </div>
              <div class="list-group margin-none">
                <div class="list-group-item">
                  <a href="{{ details_url }}" class="btn btn-primary btn-circle pull-right">
                    <i class="fa fa-shopping-cart"></i>
                  </a>
                  <h4 class="margin-v-0-5">{{ title }}</h4>
                  <p class="small">
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                    <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                  </p>
                  <p>{{ description }}</p>
                  <label class="label label-grey-100">&euro;{{ price }}</label>&nbsp;
                  <small>

                    <i class="fa fa-fw icon-home-fill-1"></i> Agency

                  </small>
                </div>
              </div>
            </div>
          </script>

          <script id="real-estate-map-pop_home" type="text/x-handlebars-template">
            <div class="padding-none">
              <div class="ribbon-heading text-h5 {{ ribbon_mark_class }} absolute left inline margin-none">
                {{ ribbon_mark_text }}
              </div>
              <div class="cover cover-image-full margin-none">
                <a href="{{ details_url }}" class="thumb" data-height="150px">
                  <img src="{{ image }}" alt="image" class="img-responsive">
                </a>
              </div>
              <div class="text-center">
                <h4 class="text-primary margin-bottom-none">{{ title }}</h4>
                <p class="h5 text-muted margin-v-5-15">{{ location }}</p>
              </div>
            </div>
          </script>

          <script id="real-estate-map-pop_profile" type="text/x-handlebars-template">
            <div class="text-center">
              <p>
                <img src="{{ image }}" alt="" class="img-circle" />
              </p>
              <h4><a href="{{ details_url }}" class="text-grey-700">{{ name }}</a></h4>
              <a href="mailto:{{ email }}">{{ email }}</a>
              <br/>
              <p class="text-muted"><i class="fa fa-user fa-fw"></i>Agent <i class="fa fa-home fa-fw"></i>{{ no_properties }} Properties</p>
            </div>
          </script>

          <script id="real-estate-map-pop_icon" type="text/x-handlebars-template">
            <div>
              <div class="text-center">
                <div class="h1 text-grey-300">
                  <i class="{{ inner_icon }}"></i>
                </div>
                <p><a href="{{ details_url }}" class="h4 text-primary">{{ name }}</a></p>
                <p>{{ location }}</p>
              </div>
            </div>
          </script>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
      <strong>Ad Kintun</strong> v0.1 &copy; Copyright 2016
    </footer>
    <!-- // Footer -->

  </div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "html",
      skins: {
        "default": {
          "primary-color": "#16ae9f"
        }
      }
    };
  </script>



  <!--   Core JS Files  -->
  <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script> 


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8j1pbZRCtCD4PpaCbKEwb3WZYAzQD0JQ"></script>

  <script src="maps_white.js"></script>
  <script src="js.js"></script>



</body>

</html>