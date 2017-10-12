<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- FontAewsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Social Button-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-social.css"/>
    <!--Import Slider Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/slider/cssSlider.css"/>
    <!--Import Gallery Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/slider/cssSlider.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?><?php echo LANG()=='en'? 'assets/css/custom_en.css': 'assets/css/custom.css' ?>"/>
</head>


<body>





<nav class="<?php echo $selected=='Home'? 'transparent z-depth-0' :'midnightBlue'  ?>">
    <div class="nav-wrapper container">
        <a href="#" class="brand-logo white-text <?php echo LANG()=='en'? '': 'left' ?>" style="z-index: 100">Artilla</a>
      <?php  if(!$this->session->userdata('user_id')){?>
        <ul id="nav-mobile" class="<?php echo LANG()=='en'? 'right': '' ?> hide-on-med-and-down">
            <li><a class="waves-effect waves-light btn account-btn"><?php echo trans('login') ?></a></li>
            <li><a class="waves-effect waves-light btn account-btn"><?php echo trans('signup') ?></a></li>
        </ul>
      <?php } else{ ?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Adnan Diab</a></li>
            </ul>
          <?php } ?>
    </div>
</nav>
<?php if($title=='Home') {?>
<div class="main-screen">
    <ul class="slideshow">
      <?php $i =  0; foreach ($sliders as $one) { ?>

          <li style="background: url('<?php echo base_url()."uploads/sliders/$one->img" ?>') no-repeat center center" class="image <?php echo $i == 0 ? 'active' : ''; $i++; ?>"><h1 class="slider-text centered"><?php echo LANG() == 'en' ? $one->title_en : $one->title_ar ?></h1></li>
;

        <?php } ?>

    </ul>
</div>
<?php } ?>

<?php if($selected=='category_view') {?>
<div class="col l12">
    <img src="http://via.placeholder.com/3000x800" class="responsive-img intro-course">
    <h2 class="right-align centered midnightBlue-text question-card">
      <?php  echo LANG()=='en'? $cat->CategoryName_en :  $cat->CategoryName ?>
    </h2>
</div>
  <?php } ?>


<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content dropart-menu <?php echo LANG()=='en'? '': 'right' ?>">
    <div class="hover-tab">
        <div class="container-tab">

          <?php foreach ($main_list as $key => $value){ ?>


            <div id="<?php echo $key ?>" class="tab-content <?php echo LANG()=='en'? 'right': 'left' ?>" style="display:block;">
            <?php foreach ($value as $key => $row): ?>

                <div class="row">
                    <div class="col">
                        <a class=""><?php echo $row['title'] ?></a>
                    </div>
                    <div class="col">
                        <a class="">button</a>
                    </div>
                </div>
              <?php endforeach; ?>

            </div>
          <?php } ?>




        </div>

        <div class="tab-titles <?php echo LANG()=='en'? '': 'right' ?>">
          <?php $i=0; foreach ($main_list as $key => $value){ ?>
                <div class="<?php echo $i==0? 'active ' : ''?>tab-btn"><a href="#<?php echo $key ?>"><?php echo $key ?></a></div>

          <?php    $i++; } ?>


        </div>

    </div>
</ul>

<nav class="wetAsphalt" style="<?php echo $selected=='Home'? 'margin-top: -64px ;' :''  ?>">
    <div class="nav-wrapper container">
        <ul class="<?php echo LANG()=='en'? '': 'right' ?> hide-on-med-and-down">
            <li><a href="<?php echo base_url()?>" class="white-text"><?php echo trans('home') ?>  </a></li>
            <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1"><?php echo trans('courses') ?><i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="<?php echo base_url() ?>gallery" class="white-text"><?php echo trans('visual_content') ?></a></li>
            <li><a href="#" class="white-text"><?php echo trans('jobs') ?>  </a></li>
            <li><a href="#" class="white-text"><?php echo trans('blog') ?></a></li>
            <li><a href="" class="white-text"><?php echo trans('work_of_trainees') ?></a></li>
            <li><a href="#" class="white-text"><?php echo trans('store') ?></a></li>
            <!-- Dropdown Trigger -->
        </ul>
    </div>
</nav>
