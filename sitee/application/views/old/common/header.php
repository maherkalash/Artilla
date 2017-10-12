<?php
//echo $this->session->userdata('err_message'); exit;
$main_list = get_courses();
//echo "<pre>"; print_r($main_list); exit();
/*
if ($this->session->userdata('user_id')){
    $notif 			= get_statics();
    $new_nots 		= $notif['notifcs'];
    $old_nots 		= $notif['oldnotif'];
    $num_row 		= $notif['num_row'];
    $this->session->set_userdata('dub_num', $notif['my_dubarah_num']);
}

*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>ARTIlA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta property="og:url"         content="<?php echo base_url() ?>" />
    <meta property="og:type"        content="website" />
    <meta property="og:title"       content="Artella" />
    <meta property="og:description" content="<?php echo isset($list_row->SubCategoryName) ? $list_row->SubCategoryName : '' ?>" />
    <meta property="og:image"       content="<?php echo isset($list_row) ? base_url("uploads/freecourses/".$list_row->thumb) : '' ?>" />


    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/sweet-alert2/sweetalert2.min.css"
          rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/custombox.min.css"
          rel="stylesheet">
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/lightbox.min.css"
          rel="stylesheet"/>
    <!-- App css -->
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/slick-slider/slick.css"
          rel="stylesheet"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/slick-slider/slick-theme.css"
          rel="stylesheet"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/bootstrap.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/core.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/components.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/icons.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/pages.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/menu.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/responsive.css"
          rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : '/rtl' ?>/css/style.css"
          rel="stylesheet" type="text/css"/>


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url() . 'assets' ?><?php echo LANG() == 'en' ? '' : 'rtl' ?>/js/modernizr.min.js"></script>


</head>


<body>


<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Zircos-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="index.html" class="logo">
                    <img src="<?php echo base_url() ?>assets/images/logo_dark.png" alt="" height="24">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="navbar-c-items">
                        <form role="search" class="navbar-left app-search pull-left hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <?php if ($this->session->userdata('user_id')) { ?>
                        <li class="dropdown navbar-c-items">
                            <span class="badge badge-topbar badge-success">4</span>
                            <a href="#" class="right-menu-item dropdown-toggle waves-effect" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li class="text-center">
                                    <h5>Notifications</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-danger">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-warning">
                                            <i class="mdi mdi-settings"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">Settings</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Notification</a></p>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown navbar-c-items">
                            <a href="" class="dropdown-toggle waves-effect profile" data-toggle="dropdown"
                               aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img"
                                                         class="img-circle"> </a>
                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li class="text-center">
                                    <h5>Hi, John</h5>
                                </li>
                                <li><a href="javascript:void(0)"><i class="dripicons-user m-r-10"></i> Profile</a></li>
                                <li><a href="javascript:void(0)"><i class="dripicons-mail m-r-10"></i> <span
                                                class="badge badge-success pull-right">5</span> Messages</a></li>
                                <li><a href="javascript:void(0)"><i class="dripicons-gear m-r-10"></i> Settings</a></li>
                                <li><a href="javascript:void(0)"><i class="dripicons-lock m-r-10"></i> Lock screen</a>
                                </li>
                                <li><a href="<?php echo base_url() . "logout" ?>"><i class="dripicons-power m-r-10"></i>
                                        Logout</a></li>
                            </ul>

                        </li>
                    <?php } else { ?>
                        <li class="dropdown navbar-c-items">
                            <div class="button-list" style="margin-top: 10px">
                                <!-- Custom width modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                        data-toggle="modal"
                                        data-target="#signup-modal"><?php echo trans('signup') ?></button>
                                <!-- Full width modal -->
                                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal"
                                        data-target="#login-modal"><?php echo trans('login') ?></button>
                            </div>

                        </li>
                    <?php } ?>

                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <!-- end menu-extras -->

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container" style="width: 100%; padding: 0">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="<?php echo base_url() ?>"><?php echo trans('home') ?></a>

                    </li>

                    <li class="has-submenu">
                        <a href="#"><?php echo trans('courses') ?></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <span><?php echo trans('category') ?></span>
                                    </li>
                                    <?php foreach ($main_list as $key => $value) { ?>
                                        <li onmouseenter="fill_main('<?php echo $key ?>');">
                                            <a href="#"><?php echo $key ?></a>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </li>
                            <li id="submenu">

                            </li>
                            <li id="submenu2">

                            </li>
                        </ul>
                    </li>


                    <li class="has-submenu">
                        <a href="<?php echo base_url() ?>gallery"><?php echo trans('visual_content') ?></a>
                        <ul class="submenu">
                            <?php foreach ($gallery_cat as $value) { ?>
                                <li>
                                    <a href="<?php echo base_url() . $value->cat_name ?>"><?php echo (lang() == 'en') ? $value->cat_name : $value->cat_name_ar ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><?php echo trans('store') ?><span
                                    style="color: red; font-size: 10px"> Soon</span></a>
                        <ul class="submenu">
                            <li><a href="#">اعمال فنيه</a></li>
                            <li><a href="#">لوحات فنية</a></li>
                            <li><a href="#">تصميم هدايا</a></li>
                            <li><a href="#">لوازم فنية</a></li>
                            <li><a href="#">اضافات</a></li>


                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo base_url() ?>studentgallery"><?php echo trans('work_of_trainees') ?></a>
                        <ul class="submenu">
                            <?php foreach ($gallery_cat as $value) { ?>
                                <li>
                                    <a href="<?php echo base_url() . 'student' . $value->cat_name ?>"><?php echo (lang() == 'en') ? $value->cat_name : $value->cat_name_ar ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>


                    <li>
                        <a href="<?php echo base_url() ?>"><?php echo trans('jobs') ?><span
                                    style="color: red; font-size: 10px"> Soon</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>"><?php echo trans('blog') ?><span
                                    style="color: red; font-size: 10px"> Soon</span></a>

                    </li>
                    <li><a href="<?php echo base_url() ?>switch_lang"
                           style="padding-left:20px;color:#fff;"><?php echo LANG() == 'en' ? 'العربية' : 'ENG' ?></a>
                    </li>


                </ul>
                <?php if (isset($selected) && $selected == 'new_course') { ?>
                    <ul class="navigation-menu" style="background-color: #f1f1f1; width: 100%">

                        <li class="has-submenu">
                            <a href="#" style="color: #797979"><?php echo trans('course_content') ?></a>
                        </li>

                        <li>
                            <a href="#course-b1" data-toggle="tab" style="color: #797979"><?php echo trans('course_info') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("discussion/$id") ?>" style="color: #797979"><?php echo trans('discuss_area') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("repeated_questions/$id") ?>" style="color: #797979"><?php echo trans('repeated_questios') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("quiz/$id") ?>" data-toggle="tab" style="color: #797979"><?php echo trans('licenses') ?></a>
                        </li>


                        <?php if (isset($add_post)) { ?>
                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                    data-toggle="modal"
                                    data-target="#new_post-modal"><?php echo trans('new_post') ?></button>
                        <?php } ?>
                    </ul>
                <!-- End navigation menu -->
                <?php } ?>
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->




</header>
<div class="wrapper">
    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">


                <?php if ($title != 'Home') { ?>
                    <div class="page-title-box">
                        <div class="btn-group pull-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li>
                                    <a href="<?php echo base_url() ?>"><?php echo trans('home') ?></a>
                                </li>
                                <li class="active">
                                    <a href="#"><?php echo $title ?></a>
                                </li>

                            </ol>
                        </div>
                        <h4 class="page-title"><?php echo $title ?></h4>
                    </div>

                <?php } ?>
	
	
	
	
	
	
	
	
	
	
	
	
		