<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- NEED TO WORK ON -->

    <link href="../assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="../assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="../assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link  href="../assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">

    <!-- BEGIN CORE JS FRAMEWORK--> 
    <script src="../assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
    <script src="../assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
    <script src="../assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="../assets/plugins/breakpoints.js" type="text/javascript"></script> 
    <script src="../assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
    <script src="../assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
    <!-- END CORE JS FRAMEWORK --> 
    <!-- BEGIN PAGE LEVEL JS -->    
    <script src="../assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>    
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
    <script src="../assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
    <script src="../assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.stringToSlug.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->     
    
    <!-- BEGIN CORE TEMPLATE JS --> 
    <script src="../assets/js/core.js" type="text/javascript"></script> 
    <script src="../assets/js/chat.js" type="text/javascript"></script> 
    <script src="../assets/js/demo.js" type="text/javascript"></script>
    <script src="../assets/js/my_script.js"></script>
    <!-- END CORE TEMPLATE JS --> 

    <!-- END NEED TO WORK ON -->

</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <!-- BEGIN NAVIGATION HEADER -->
        <div class="header-seperation"> 
            <!-- BEGIN MOBILE HEADER -->
            <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">    
                <li class="dropdown">
                    <a id="main-menu-toggle" href="#main-menu" class="">
                        <div class="iconset top-menu-toggle-white"></div>
                    </a>
                </li>        
            </ul>
            <!-- END MOBILE HEADER -->
            <!-- BEGIN LOGO --> 
            <h4><strong style="color:white">Laptop <br>CMS Panel</strong></h4>
            <!-- END LOGO --> 
            </div>
        <!-- END NAVIGATION HEADER -->
        <!-- BEGIN CONTENT HEADER -->
        <div class="header-quick-nav"> 
            <!-- BEGIN HEADER LEFT SIDE SECTION -->
            <!-- END HEADER LEFT SIDE SECTION -->
            <!-- BEGIN HEADER RIGHT SIDE SECTION -->
            <div class="pull-right"> 
                <div class="chat-toggler">  
                    <!-- BEGIN NOTIFICATION CENTER -->
                    <a href="#">
                        <div class="user-details"> 
                            <div class="username">
                                Imran <span class="bold"> Khan</span>                                   
                            </div>                      
                        </div> 
                        &nbsp; &nbsp; &nbsp; &nbsp; 
                    </a>    
                    
                    <!-- END NOTIFICATION CENTER -->
                    <!-- BEGIN PROFILE PICTURE -->
                    <div class="profile-pic"> 
                        <img src="../assets/img/profiles/avatar_small.jpg" alt="" data-src="../assets/img/profiles/avatar_small.jpg" data-src-retina="../assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
                    </div>  
                    <!-- END PROFILE PICTURE -->                
                </div>
                <!-- BEGIN HEADER NAV BUTTONS -->
                <ul class="nav quick-section">
                    <!-- BEGIN SETTINGS -->
                    <li class="quicklinks"> 
                        <a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">
                            <div class="iconset top-settings-dark"></div>   
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
                            <li><a href="#">Preview</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li class="divider"></li>                
                            <li><a href="#"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></li>
                        </ul>
                    </li>
                    <!-- END SETTINGS -->
                </ul>
                <!-- END HEADER NAV BUTTONS -->
            </div>
            <!-- END HEADER RIGHT SIDE SECTION -->
        </div> 
        <!-- END CONTENT HEADER --> 
    </div>
    <!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <!-- BEGIN MENU -->
    <div class="page-sidebar" id="main-menu"> 
          <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <!-- BEGIN MINI-PROFILE -->
        <div class="user-info-wrapper"> 
            <div class="profile-wrapper">
                <img src="./assets/img/profiles/avatar.jpg" alt="" data-src="./assets/img/profiles/avatar.jpg" data-src-retina="./assets/img/profiles/avatar2x.jpg" width="69" height="69" />
            </div>
            <div class="user-info">
                <div class="greeting">Welcome</div>
                <div class="username">Imran <span class="semi-bold">Khan</span></div> &nbsp; &nbsp;
            </div>
        </div>
        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU --> 
        <p class="menu-title">BROWSE<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
        <ul>
            <li class="start active"><a href="../brand/index.php"><i class="fa fa-tasks"></i><span class="title">Brand</span><span class="selected"></span></a></li>
            <li class="start active"><a href="../product/index.php"><i class="fa fa-briefcase"></i><span class="title">Product</span><span class="selected"></span></a></li>
            <li class="start active"><a href="../media/index.php"><i class="fa fa-film"></i><span class="title">Media</span><span class="selected"></span></a></li>
            <li class="start active"><a href="../subscriber/index.php"><i class="fa fa-check-square-o"></i><span class="title">Subscriber</span><span class="selected"></span></a></li>
            <li class="start active"><a href="../Webmaster/index.php"><i class="fa fa-user"></i><span class="title">Webmaster</span><span class="selected"></span></a></li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    </div>
    <!-- BEGIN SCROLL UP HOVER -->
    <a href="#" class="scrollup">Scroll</a>
    <!-- END SCROLL UP HOVER -->
    <!-- END MENU -->
    <!-- BEGIN SIDEBAR FOOTER WIDGET -->
    <div class="footer-widget">     
        <a href="https://www.webdevelopersacademy.com">Web Developers Academy</a>
        </div>
    <!-- END SIDEBAR FOOTER WIDGET -->
    <!-- END SIDEBAR -->