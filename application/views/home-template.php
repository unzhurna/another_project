<!DOCTYPE HTML>
<html>
<head>
    <title>Home | pigipasiar.com</title>
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
                                    <li>
										<?php echo anchor('auth', 'Sign In'); ?>
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

        <!-- TOP AREA -->
        <div class="top-area show-onload">
            <div class="owl-carousel owl-slider owl-carousel-area" id="owl-carousel-slider">
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo config_item('assets'); ?>img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Paris</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$2700</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo config_item('assets'); ?>img/2048x1365.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Las Vegas</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$2200</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
                <div class="bg-holder full text-center text-white">
                    <div class="bg-mask"></div>
                    <div class="bg-img" style="background-image:url(<?php echo config_item('assets'); ?>img/2048x2048.png);"></div>
                    <div class="bg-front full-center">
                        <div class="owl-cap">
                            <h1 class="owl-cap-title fittext">Budapest</h1>
                            <div class="owl-cap-price"><small>from</small>
                                <h5>$1900</h5>
                            </div><a class="btn btn-white btn-ghost" href="#"><i class="fa fa-angle-right"></i> Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP AREA  -->




        <div class="container">
            <div class="search-tabs search-tabs-bg search-tabs-to-top">
                <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Hotels</span></a>
                        </li>
                        <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Flights</span></a>
                        </li>
                        <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-home"></i> <span >Rentals</span></a>
                        </li>
                        <li><a href="#tab-4" data-toggle="tab"><i class="fa fa-car"></i> <span >Cars</span></a>
                        </li>
                        <li><a href="#tab-5" data-toggle="tab"><i class="fa fa-bolt"></i> <span >Activities</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab-1">
                            <h2>Search and Save on Hotels</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>Where are you going?</label>
                                            <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Check-in</label>
                                                        <input class="form-control" name="start" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Check-out</label>
                                                        <input class="form-control" name="end" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Rooms</label>
                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options" />1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Guests</label>
                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options" />1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Search for Hotels</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <h2>Search for Cheap Flights</h2>
                            <form>
                                <div class="tabbable">
                                    <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                        <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                        </li>
                                        <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="flight-search-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                <label>From</label>
                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                <label>To</label>
                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-daterange" data-date-format="M d, D">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Departing</label>
                                                                    <input class="form-control" name="start" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Returning</label>
                                                                    <input class="form-control" name="end" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Passngers</label>
                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                        <label class="btn btn-primary active">
                                                                            <input type="radio" name="options" />1</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />2</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3+</label>
                                                                    </div>
                                                                    <select class="form-control hidden">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option selected="selected">4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="flight-search-2">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                <label>From</label>
                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                <label>To</label>
                                                                <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-daterange" data-date-format="M d, D">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                    <label>Departing</label>
                                                                    <input class="date-pick form-control" data-date-format="M d, D" type="text" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Passngers</label>
                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                                        <label class="btn btn-primary active">
                                                                            <input type="radio" name="options" />1</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />2</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3</label>
                                                                        <label class="btn btn-primary">
                                                                            <input type="radio" name="options" />3+</label>
                                                                    </div>
                                                                    <select class="form-control hidden">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option selected="selected">4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <h2>Find Your Perfect Home</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>Where are you going?</label>
                                            <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Check-in</label>
                                                        <input class="form-control" name="start" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Check-out</label>
                                                        <input class="form-control" name="end" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Rooms</label>
                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options" />1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group form-group-lg form-group-select-plus">
                                                        <label>Guests</label>
                                                        <div class="btn-group btn-group-select-num" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="options" />1</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />2</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3</label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="options" />3+</label>
                                                        </div>
                                                        <select class="form-control hidden">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option selected="selected">4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Search for Vacation Rentals</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab-4">
                            <h2>Search for Cheap Rental Cars</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                    <label>Pick-up Location</label>
                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                    <label>Drop-off Location</label>
                                                    <input class="typeahead form-control" placeholder="City, Airport, U.S. Zip" type="text" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Pick-up Date</label>
                                                        <input class="form-control" name="start" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>Drop-ff Date</label>
                                                        <input class="form-control" name="end" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Search for Rental Cars</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab-5">
                            <h2>Search for Activities</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>Where are you going?</label>
                                            <input class="typeahead form-control" placeholder="City, Airport, Point of Interest or U.S. Zip Code" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-daterange" data-date-format="M d, D">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>From</label>
                                                        <input class="form-control" name="start" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>To</label>
                                                        <input class="form-control" name="end" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" type="submit">Search for Activities</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Trendy Now <small ><a href="#">view all</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY LIBERDADE" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Holiday Inn Express Kennedy</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$387</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO lobby" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">JFK Inn</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$467</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel EDEN MAR suite" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Club Quarters Grand Central</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$465</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Hot Deals <small ><a href="#">view all</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Wyndham Garden Chinatown</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$170</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">The Kimberly Hotel</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$190</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="LHOTEL PORTO BAY SAO PAULO suite lhotel living room" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Bryant Park Hotel</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$458</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Special for You <small ><a href="#">view all</a></small></h3>
                    <ul class="booking-list">
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL rooftop pool" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Warwick New York Hotel</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$418</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY RIO INTERNACIONAL de luxe" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">The London NYC</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$316</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="booking-item booking-item-small">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="hotel PORTO BAY SERRA GOLF suite2" />
                                    </div>
                                    <div class="col-xs-5">
                                        <h5 class="booking-item-title">Affinia Shelburne</h5>
                                        <ul class="icon-group booking-item-rating-stars">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-half-empty"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3"><span class="booking-item-price-from">from</span><span class="booking-item-price">$350</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap gap-small"></div>
            <h2 class="mb20">Explore Our Top Destinations</h2>
            <div class="row row-wrap">
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?php echo config_item('assets'); ?>img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Africa</h4>
                            <p class="thumb-desc">Fusce nascetur proin ligula nisi at scelerisque odio cum accumsan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Australia</h4>
                            <p class="thumb-desc">Dignissim himenaeos varius vulputate nullam a leo congue feugiat himenaeos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?php echo config_item('assets'); ?>img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">USA</h4>
                            <p class="thumb-desc">Orci vehicula ac sit vulputate nisl torquent donec litora per</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
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