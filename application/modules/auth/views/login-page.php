<!DOCTYPE HTML>
<html class="full">
<head>
    <title>Welcome to pigipasiar.com</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="" />
    <meta name="description" content="">
    <meta name="author" content="unzhurna">
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

<body class="full">
    <div class="global-wrap">
        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/1280x852.png);"></div>
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder" href="index.html">
                        <img src="<?php echo config_item('assets'); ?>img/logo-white.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="row row-wrap" data-gutter="60">
                                <div class="col-md-4">
                                    <div class="visible-lg">
                                        <h3 class="mb15">Welcome to Traveler</h3>
                                        <p>Ultrices lacus erat mattis nam sem porta nascetur luctus nunc litora diam ornare maecenas et phasellus molestie lorem habitant ultricies condimentum dignissim interdum erat sit praesent penatibus mattis pharetra penatibus</p>
                                        <p>Sodales amet consectetur consectetur curae placerat consectetur penatibus fusce sagittis</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                    <form>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Username or email</label>
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign in" />
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">New To Traveler?</h3>
                                    <form>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="e.g. John Doe" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                            <label>Emai</label>
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign up for Traveler" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links">
                        <li><?php echo anchor('', 'About'); ?></li>
                        <li><?php echo anchor('', 'Help'); ?></li>
                        <li><?php echo anchor('', 'Hot Deals'); ?></li>
                        <li><?php echo anchor('', 'Popular Locations'); ?></li>
                        <li><?php echo anchor('', 'Cheap Flights'); ?></li>
                        <li><?php echo anchor('', 'Business'); ?></li>
                        <li><?php echo anchor('', 'Media'); ?></li>
                        <li><?php echo anchor('', 'Developers'); ?></li>
                        <li><?php echo anchor('', 'Advertise'); ?></li>
                    </ul>
                </div>
            </div>
        </div>

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


