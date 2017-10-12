<?php $this->load->view('common/header_view') ?>



 
      
   
<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2><?php echo trans('About') ?></h2>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="about-company-container">
        <div class="row">
          <div class="col-lg-6 col-md-5 col-sm-12 about-image"><img src="<?php echo base_url() ?>assets/images/aboutus.jpg"   alt="about company"></div>
          <div class="col-lg-6 col-md-7 col-sm-12 about-company">
          <h2 style="direction: inherit;"><?php echo trans('titel') ?></h2>
            <h4 style="direction: inherit; "><?php echo trans('text1') ?></h4>
            <p style="direction: inherit; "><?php echo trans('text2') ?> </p>
            <p style="direction: inherit; "><?php echo trans('text3') ?> </p>
         <p style="direction: inherit; "> <?php echo trans('text4') ?></p> 
          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space30"></div>
<!-- shop features -->
<div class="container">
  <div class="row">
    <div class="col-md-3"> 
      <!-- feature box -->
      <div class=" feature-box" >
        <div class="feature-title"><i class="fa fa-star circle-icon"></i>
         <h4><?php echo trans('support') ?></h4>
        </div>
        <p> <?php echo trans('public') ?> </p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-star circle-icon"></i>
          <h4><?php echo trans('reviews') ?></h4>
        </div>
        <p> <?php echo trans('reviews1') ?> </p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-user circle-icon"></i>
          <h4><?php echo trans('checkout') ?> </h4>
        </div>
        <p>   <?php echo trans('checkout1') ?></p>
      </div>
    </div>
    <!-- end: feature box --> 
    <!-- feature box -->
    <div class="col-md-3">
      <div class=" feature-box">
        <div class="feature-title"><i class="fa fa-rocket circle-icon"></i>
          <h4><?php echo trans('delivery') ?></h4>
        </div>
        <p>    <?php echo trans('delivery1') ?> </p>
      </div>
    </div>
  </div>
</div>
<!-- end: shop features -->
<div class="row clearfix f-space30"></div>
<!-- big unit -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
     <?php $this->load->view('common/footer_view') ?>

<script>

(function($) {
  "use strict";
  //Mega Menu
 $('#menuMega').menu3d();
             
              //Help/Contact Number/Quick Message
			$('.quickbox').carousel({
				interval: 10000
			});

})(jQuery);

 </script>
