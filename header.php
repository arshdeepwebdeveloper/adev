<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon1.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon-dev.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Interior Genie</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css" /><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" href="css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" href="css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <!-- <link rel="stylesheet" href="css/loader.min.css"> LOADER STYLE SHEET -->     
    <link rel="stylesheet" href="css/flaticon.min.css"><!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" href="css/skin/skin-1.css" class="skin"><!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/custom.css">

    <!-- lightboox code -->
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/lightbox-min.css">
     

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
 	 <!-- BEFORE/AFTER ADD-ON FILES  MUST BE INSERTED AFTER THE SLIDER DOM ELEMENTS !-->
	<link rel='stylesheet' href='plugins/revolution/revolution-addons/beforeafter/css/revolution.addon.beforeafter.css' type='text/css' media='all' />	    
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,800,800i,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Martel:200,300,400,600,700,800,900" rel="stylesheet"> 

    <!-- font Awesome    -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

	<div class="page-wraper"> 
       	
        <!-- HEADER START -->
        <header class="site-header header-style-1  nav-wide  mobile-sider-drawer-menu">
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container header-center">
                        <div class="wt-header-left">
                            <div class="logo-header">
                                <div class="logo-header-inner logo-header-one ">
                                    <a href="index.php" class="">
                                       <img src="images/logo-adev.png" width="100" height="50" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-header-center"> 
                             <!-- NAV Toggle Button -->
                            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar icon-bar-first"></span>
                                <span class="icon-bar icon-bar-two"></span>
                                <span class="icon-bar icon-bar-three"></span>
                            </button>                       
                            <!-- MAIN Vav -->
                            <div class="header-nav navbar-collapse collapse nav-dark">
                                <ul class=" nav navbar-nav nav-line-animation">
                                    <li class="">
                                    	<a href="index.php" >Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php">About us</a>
                                    </li>
                                    <li>
                                        <a href="service.php" > Our Services</a>
                                       <!-- <ul class="sub-menu">
                                            <li><a href="news-grid.html">Modular Kitchen</a></li>
                                            <li><a href="news-grid.html">False Ceiling Designs</a></li>
                                            <li><a href="news-grid.html">Wall Papper</a></li>
                                            <li><a href="news-grid.html">Wall Paints</a></li>
                                            <li><a href="news-grid.html">Wardrobes</a></li>
                                            <li><a href="news-listing.html">Living Room Designs</a></li>
                                            <li><a href="news-masonry.html">Wooden Work</a></li>
                                             <li><a href="news-masonry.html">Furniture</a></li>
                                              <li><a href="news-masonry.html">LEd panels</a></li>
                                               <li><a href="news-masonry.html">Crockery unit</a></li>
                                               <li><a href="news-masonry.html">Mandir</a></li>
                                               <li><a href="news-masonry.html">Wall decoration</a></li>
                                        </ul> -->
                                    </li>
                                    <!-- <li>
                                        <a href="gallery.php" >Gallery</a>
                                    </li> -->
                                    <li>
                                        <a href="contact.php">Contact us</a>
                                    </li>                               
                                </ul>
                            </div>
                        </div>
                        <div class="wt-header-right ">
                            <div class="site-bg-primary wt-header-right-child">
                                <!-- ETRA Nav -->
                                <div class="extra-nav">
                                    <div class="extra-cell">
                                        <!-- <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a> -->
                                    </div>
                                 </div>                                 
                                <!-- ETRA Nav -->
                                <div class="extra-nav">
                                    <div class="extra-cell">
                                        <div class="right-arrow-btn">
                                            <button type="button" class="btn-open contact-slide-show text-white notification-animate"><i class="fa fa-angle-left"></i></button>
                                        </div>                                         
                                    </div>
                                 </div>
                             </div>                                 
                       </div>  

                        <!-- Contact Nav -->                            
                        <div class="contact-slide-hide"> 
                            <div class="contact-nav">
                                 <a href="javascript:void(0)" class="contact_close">&times;</a>
                                 <div class="contact-nav-form p-a30">
                                    <div class="contact-info text-black m-b30">

                                            <div class="logo-header-inner logo-header-one">
                                                <a href="index.php">
                                                   <img src="images/logo-adev.png" width="125" height="49" alt="" />
                                                </a>

                                                <br class="pt-3">Efficient cooling systems designed to provide powerful</br> performance, energy efficiency, and reliable</br> comfort for homes and businesses.</p>
                                            </div>
                                        <!-- TITLE START -->
                                        <div class="section-head text-left">
                                            <h4 class="m-b2">Contact Info</h4>
                                        </div>
                                        <!-- TITLE END --> 
                                        <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                            <div class="icon-xs"><i class="flaticon-smartphone  icon-shake"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500 mb-0">Phone number</h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="tel:+91 94784-47955">+91 94784-47955</br/></a><a href="tel:+91 94784-47955"> +91 +91 94784-47955</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wt-icon-box-wraper left p-b40 icon-shake-outer">
                                            <div class="icon-xs"><i class="flaticon-email  icon-shake"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500 mb-0">Email address</h5>

                                                <ul class="list-unstyled">
                                                    <li><a href="mailto:hardinesh@gmail.com">hardinesh@gmail.com</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wt-icon-box-wraper left icon-shake-outer">
                                            <div class="icon-xs"><i class="flaticon-placeholder  icon-shake"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0 font-weight-500 mb-0">Address info</h5>
                                                <p>#19416, St No. 3, Bibi Wala Road,</br> Dr. Bakshi Wali Gali, Bathinda-151001</p>
                                            </div>
                                        </div>
                                    </div>                                        
                                 </div>
                            </div> 
                        </div>       
                         <!-- Search popup -->
                        <div id="search"> 
                            <span class="close"></span>
                            <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                                <div class="input-group">
                                    <input value="" name="q" type="search" placeholder="Type to search"/>
                                    <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->