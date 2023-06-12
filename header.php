<?php 
$weburl="https://localhost/sfr_komito/";
// $weburl="https://sfrmedical.com/";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" charset="utf-8" />
    <title><?php echo @$pageTitle;?> | SFR Medical </title>
    <meta http-equiv="Cache-control" content="public" max-age="3600">
    <meta name="title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta name="description" content="<?php echo @$pageDesc; ?>" />
    <meta name="keywords" content="<?php echo @$pageKeys; ?>" />
    <meta name="author" content="SFR Medical" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0" />
    <link rel="alternate" href="<?php echo $weburl; ?>" hreflang="en-US">
    <link rel="canonical" href="<?php echo @$weburl.@$pageurl; ?>" />
    
    <!--FB Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:weburl" content="<?php echo @$weburl.@$pageurl; ?>" />
    <meta property="og:title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta property="og:description" content="<?php echo @$pageDesc; ?>" />
    <meta property="og:image" content="<?php echo @$weburl.@$pageImage; ?>" />
    
    <!--Twitter Meta-->
    <meta name="twitter:title" content="<?php echo @$pageTitle; ?> | SFR Medical" />
    <meta name="twitter:description" content="<?php echo @$pageDesc; ?>" />
    <meta name="twitter:image" content="<?php echo @$weburl.@$pageImage; ?>" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $weburl;?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $weburl;?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $weburl;?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $weburl;?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $weburl;?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $weburl;?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $weburl;?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $weburl;?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $weburl;?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $weburl;?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $weburl;?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $weburl;?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $weburl;?>assets/favicon/favicon-16x16.png">
    <!--<link rel="manifest" href="<?php echo $weburl;?>assets/favicon/manifest.json">-->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $weburl;?>assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="<?php echo $weburl;?>assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $weburl;?>assets/favicon/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <!-- <link rel='stylesheet' id='theme-fonts-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;subset=latin-ext%2Chebrew%2Clatin%2Ccyrillic%2Cdevanagari&amp;ver=5.0.3' type='text/css' media='all' /> -->

    <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/timePicker.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet">
    <link href="assets/css/elpath.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- <link href="assets/css/custom.css" rel="stylesheet"> -->

</head>


<!-- page wrapper -->
<body class="layout-frame">

    <div class="boxed_wrapper">
        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="auto-container  clearfix">
                    <div class="left-column pull-left">
                        <ul class="social-links clearfix">
                            <li><a href="https://www.facebook.com/sfrmedical/"><i class="fab fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/sfrmedical"><i class="fab fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/sfrmedical/"><i class="fab fab fa-linkedin"></i></a></li>
                        </ul>                        
                    </div>
                    <div class="right-column pull-right">
                        <ul class="info-list clearfix">
                            <li><i class="fa fa-flag"></i> If you would like to join our panel as an Expert, <a href="join-our-panel">Join our panel →</a></li>
                            <!-- <li><i class="flaticon-clock"></i>Mon - Sat 8:00 - 6:30, Sunday - CLOSED</li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="<?php echo @$weburl;?>"><img src="assets/logo.webp" alt="SFR Medical"></a></figure>
                        <!-- <div class="btn-box">
                            <a href="<?php echo @$weburl;?>" class="theme-btn btn-one"><span>Book Your Tour</span></a>
                        </div> -->
                    </div>
                    <div class="menu-area clearfix pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">  
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class=""><a title="SFR Medical" href="<?php echo @$weburl;?>">HOME</a>
                                    </li>
                                    <li class="dropdown"><a title="WHAT WE DO" href="#">WHAT WE DO <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li class="dropdown"><a title="For police" href="#">For police</a>
                                                <ul>
                                                    <li><a title="For police our purpose" href="<?php echo @$weburl;?>for-police-our-purpose">Our purpose </a></li>
                                                    <li><a title="For police our solution" href="<?php echo @$weburl;?>for-police-our-solution">Our solution</a></li>
                                                    <li><a title="For police our products" href="<?php echo @$weburl;?>for-police-our-products">Our products</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a title="For public" href="#">For public</a>
                                                <ul>
                                                    <li><a title="For public our purpose" href="<?php echo @$weburl;?>for-public-our-purpose">Our purpose </a></li>
                                                    <li><a title="For public our solution" href="<?php echo @$weburl;?>for-public-our-solution">Our solution</a></li>
                                                    <li><a title="For public our products" href="<?php echo @$weburl;?>for-public-our-products">Our products</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a title="For solicitor" href="#">For solicitor</a>
                                                <ul>
                                                    <li><a title="For solicitor our purpose" href="<?php echo @$weburl;?>for-solicitor-our-purpose">Our purpose </a></li>
                                                    <li><a title="For solicitor our solution" href="<?php echo @$weburl;?>for-solicitor-our-solution">Our solution</a></li>
                                                    <li><a title="For solicitor our products" href="<?php echo @$weburl;?>for-solicitor-our-products">Our products</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a title="About us" href="#">ABOUT US <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a title="Our team" href="<?php echo @$weburl;?>our-team">Our team</a></li>
                                            <li><a title="Awards & recognition" href="<?php echo @$weburl;?>awards-and-recognition">Awards & recognition</a></li>
                                            <li><a title="News & posts" href="<?php echo @$weburl;?>news-and-posts">News & posts</a></li>
                                            <li><a title="Testimonials" href="<?php echo @$weburl;?>testimonials">Testimonials </a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a title="Partner with us" href="#">PARTNER WITH US <i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a title="Contracting process" href="<?php echo @$weburl;?>contracting-process">Contracting process</a></li>
                                            <li><a title="Procurement process" href="<?php echo @$weburl;?>procurement-process">Procurement process</a></li>
                                            <li><a title="Governance & compliance" href="<?php echo @$weburl;?>governance-and-compliance">Governance & compliance</a></li>
                                        </ul>
                                    </li>
                                    <li><a title="Contact us" href="<?php echo @$weburl;?>contact-us">CONTACT US</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="nav-right clearfix">
                            <div class="support-box">
                                <a href="#" data-toggle="modal" data-target="#RequestaDemo" class="theme-btn btn-one">Request a demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="header-top top-inner clearfix">
                    <div class="auto-container ">
                        <div class="left-column pull-left">
                            <ul class="social-links clearfix">
                                <li><a href="https://www.facebook.com/sfrmedical/"><i class="fab fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/sfrmedical"><i class="fab fab fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/sfrmedical/"><i class="fab fab fa-linkedin"></i></a></li>
                            </ul>                        
                        </div>
                        <div class="right-column pull-right">
                            <ul class="info-list clearfix">
                                <li><i class="fa fa-flag"></i> If you would like to join our panel as an Expert, <a href="#">Join our panel →</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="outer-box">
                    <div class="auto-container clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="<?php echo @$weburl;?>"><img src="assets/logo.webp" alt="SFR Medical"></a></figure>
                        </div>
                        <div class="menu-area clearfix pull-right mt_10">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <div class="nav-right clearfix">
                                <div class="support-box">
                                    <a href="#" data-toggle="modal" data-target="#RequestaDemo" class="theme-btn btn-one">Request a Demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?php echo @$weburl;?>"><img src="assets/logo-w.webp" alt="SFR Medical" title="SFR Medical"></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <a href="#" data-toggle="modal" data-target="#RequestaDemo" class="theme-btn btn-one">Request a demo</a>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://www.facebook.com/sfrmedical/"><i class="fab fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/sfrmedical"><i class="fab fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/sfrmedical/"><i class="fab fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->