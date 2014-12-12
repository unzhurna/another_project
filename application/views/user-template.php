<!DOCTYPE HTML>
<html>
<head>
    <title>Traveler - Travel Profile</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/styles.css">
    <link rel="stylesheet" href="<?php echo config_item('assets'); ?>css/mystyles.css">
    <script src="<?php echo config_item('assets'); ?>js/modernizr.js"></script>
</head>
<body>
    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.html">
                                <img src="<?php echo config_item('assets'); ?>img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="<?php echo config_item('assets'); ?>img/40x40.png" alt="Image Alternative text" title="AMaze" />Hi, John</a>
                                    </li>
                                    <li><a href="#">Sign Out</a>
                                    </li>
                                    <li class="nav-drop"><a href="#">USD $<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a>
                                        <ul class="list nav-drop-menu">
                                            <li><a href="#">EUR<span class="right">€</span></a>
                                            </li>
                                            <li><a href="#">GBP<span class="right">£</span></a>
                                            </li>
                                            <li><a href="#">JPY<span class="right">円</span></a>
                                            </li>
                                            <li><a href="#">CAD<span class="right">$</span></a>
                                            </li>
                                            <li><a href="#">AUD<span class="right">A$</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-user-area-lang nav-drop">
                                        <a href="#">
                                            <img src="<?php echo config_item('assets'); ?>img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" />ENG<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                        </a>
                                        <ul class="list nav-drop-menu">
                                            <li>
                                                <a title="German" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/de.png" alt="Image Alternative text" title="Image Title" /><span class="right">GER</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Japanise" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/jp.png" alt="Image Alternative text" title="Image Title" /><span class="right">JAP</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Italian" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/it.png" alt="Image Alternative text" title="Image Title" /><span class="right">ITA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="French" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/fr.png" alt="Image Alternative text" title="Image Title" /><span class="right">FRE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Russian" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/ru.png" alt="Image Alternative text" title="Image Title" /><span class="right">RUS</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Korean" href="#">
                                                    <img src="<?php echo config_item('assets'); ?>img/flags/32/kr.png" alt="Image Alternative text" title="Image Title" /><span class="right">KOR</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <?php
                        $this->load->view('include/main-menu');
                    ?>
                </div>
            </div>
        </header>

        <div class="container">
            <h1 class="page-title">Travel Profile</h1>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                            <img src="<?php echo config_item('assets'); ?>img/300x300.png" alt="Image Alternative text" title="AMaze" />
                            <h5>John Doe</h5>
                            <p>Member Since May 2012</p>
                        </div>
                        <ul class="list user-profile-nav">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Overview</a>
                            </li>
                            <li><a href="user-profile-settings.html"><i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li><a href="user-profile-photos.html"><i class="fa fa-camera"></i>My Travel Photos</a>
                            </li>
                            <li><a href="user-profile-booking-history.html"><i class="fa fa-clock-o"></i>Booking History</a>
                            </li>
                            <li><a href="user-profile-cards.html"><i class="fa fa-credit-card"></i>Credit/Debit Cards</a>
                            </li>
                            <li><a href="user-profile-wishlist.html"><i class="fa fa-heart-o"></i>Wishlist</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <h4>Total Traveled</h4>
                    <ul class="list list-inline user-profile-statictics mb30">
                        <li><i class="fa fa-dashboard user-profile-statictics-icon"></i>
                            <h5>12540</h5>
                            <p>Miles</p>
                        </li>
                        <li><i class="fa fa-globe user-profile-statictics-icon"></i>
                            <h5>2%</h5>
                            <p>World</p>
                        </li>
                        <li><i class="fa fa-building-o user-profile-statictics-icon"></i>
                            <h5>15</h5>
                            <p>Cityes</p>
                        </li>
                        <li><i class="fa fa-flag-o user-profile-statictics-icon"></i>
                            <h5>3</h5>
                            <p>Countries</p>
                        </li>
                        <li><i class="fa fa-plane user-profile-statictics-icon"></i>
                            <h5>20</h5>
                            <p>Trips</p>
                        </li>
                    </ul>
                    <div id="map-canvas" style="width:100%; height:400px;"></div>
                </div>
            </div>
        </div>



        <div class="gap"></div>
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <?php
                        $this->load->view('include/footer');
                    ?>
                </div>
            </div>
        </footer>

        <script src="<?php echo config_item('assets'); ?>js/jquery.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/bootstrap.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/slimmenu.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/bootstrap-datepicker.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/bootstrap-timepicker.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/nicescroll.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/dropit.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/ionrangeslider.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/icheck.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="<?php echo config_item('assets'); ?>js/typeahead.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/card-payment.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/magnific.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/owl-carousel.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/fitvids.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/tweet.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/countdown.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/gridrotator.js"></script>
        <script src="<?php echo config_item('assets'); ?>js/custom.js"></script>
    </div>
</body>

</html>


