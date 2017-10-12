<?php //echo "<pre>";
//print_r($subcats); exit;
 ?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->

<head>
	<title>jomran ,online shopping store in UAE, Dubai</title>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta name="laptop & accessories , desktop & laptop accessories" content=" Dell, HP,TOSHIBA,SAMSUNG,LENOVO,ASUS,ACER,APPLE,Hard Disk,USB Flash Drive,Headset,Speaker ">
<meta name="TABLETS" content=" Asus ,Wintouch ,Apple ,Lenosed ,Berry ,SAMSUNG ">
<meta name="MOBILES & ACCESSORIES" content="SAMSUNG,APPLE,HTC,NOKIA,SONY,BLACKBERRY,LG,MOTOROLA,LENOVO,ASUS,AMAZON,IPower,Watch,X -BO ,Hotwav,znarr,Adata,Momax,Hisense,Vr Box,Memory card,Mobile Holder,Vsun,Chargers,Obi,Accessories kit">
<meta name="WIRELESS" content=" TP-LINKE ,Linkln ">
<meta name="SCOOTER" content=" TP-SCOOTER ,Smart Electric Charging 10 inch 2  ">
<meta name="PLAY STATION" content=" PLAY STATION ,Sony PlayStation 3 Dualshock 3   ">
<meta name="PERFUMES" content=" PERFUMES   ">
<meta name="PROJECTOR" content=" LG ,cyber   ">
<meta name="X BOX" content=" X BOX ,Microsoft Xbox  ">
<meta name="TV SCREENS & ACCESORIES" content=" LCD stand,Cyber® LCD/LED Floor Stand Trolley With Two Metal Shelf - LTW ">
<meta name="JEWELLERY & WATCHES" content="Pendant,Necklace,Ring,Earrings,CURREN ">
<meta name="online shopping store in UAE, Dubai" content=" online shopping store in UAE, Dubai. Buy the latest mobiles, tablets, laptops and home appliances at low prices and enjoy free ">
<meta content="<?php echo trans('jomran') ?>" name="description">
<meta content="logoby.us" name="author">
<link href="<?php echo base_url(); ?>assets/images/logo.png" rel="shortcut icon">
<title><?php echo trans('jomran'); ?></title>

<!-- Reset CSS -->
<link href="<?php echo base_url(); ?>assets/css/normalize.css" rel="stylesheet" type="text/css"/>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
<?php if (LANG() != 'en') { ?>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-rtl.css" rel="stylesheet" type="text/css" />
<?php } ?>

<!-- Iview Slider CSS 
	http://jomran.com/site/assets/images/logo.png

-->
<link href="<?php echo base_url(); ?>assets/css/iview.css" rel="stylesheet">

<!--	Responsive 3D Menu	-->
<link href="<?php echo base_url(); ?>assets/css/menu3d.css" rel="stylesheet"/>

<!-- Animations -->
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>

<!-- Custom styles for this template -->
<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
<!-- Style Switcher -->


<!-- Color -->
<link href="<?php echo base_url(); ?>assets/css/skin/color.css" id="colorstyle" rel="stylesheet">
<?php if (LANG() != 'en') { ?>
	<link href="<?php echo base_url(); ?>assets/css/rtl.css" rel="stylesheet" type="text/css" />
<?php } ?>



<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script> <![endif]-->

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>

<!-- Custom Scripts -->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<!-- MegaMenu -->
<script src="<?php echo base_url(); ?>assets/js/menu3d.js" type="text/javascript"></script>

<!-- iView Slider -->
<script src="<?php echo base_url(); ?>assets/js/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/iview.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert.css">
<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

<!--[if IE 8]>
    <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->

</head>

<body onload="check_width()">
<!-- Header -->
<header> 
  <!-- Top Heading Bar -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="topheadrow">
          <ul class="nav nav-pills pull-right">
          	<li>
	          <form method="get" action="<?php echo base_url()."search" ?>">
	              <input class="searchinput" style="background-color: white; border: 1px solid #f1f1f1" name="search_s" id="search" placeholder="<?php echo trans('search') ?>..." type="search">
	              <button class="fa fa-search fa-fw" type="submit" style="visibility: hidden;" ></button>
	          </form>
            </li>
          	 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#a"><?php echo trans('lang') ?> <i class="fa fa-angle-down fa-fw"></i> </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url()."lang/en"?>"><?php echo trans('en') ?></a></li>
                <li><a href="<?php echo base_url()."lang/ar"?>"><?php echo trans('ar') ?></a></li>
              </ul>
            </li>
          	<?php if (!$this->session->userdata('cus_id')): ?>
				  <li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a">
				  	 <i class="fa fa-user fa-fw"></i> <span class="hidden-xs"> <?php echo trans('login') ?></span></a>
		              <div class="loginbox dropdown-menu"> <span class="form-header"><?php echo trans('login') ?></span> 
		                <form method="post" action="<?php echo base_url()."login" ?>">
		                  <div class="form-group"> <i class="fa fa-user fa-fw"></i>
		                    <input class="form-control" name="username" id="InputUserName" placeholder="<?php echo trans('username') ?>" type="text" data-validation="required">
		                  </div>
		                  <div class="form-group"> <i class="fa fa-lock fa-fw"></i>
		                    <input class="form-control" id="InputPassword" name="password" placeholder="<?php echo trans('password') ?>" type="password" data-validation="required">
		                  </div>
		                  <button class="btn medium color1 pull-right" type="submit"><?php echo trans('login') ?></button>
		                </form>
		                <button class="btn medium color1 pull-right" onclick="location.href = '<?php echo base_url() ?>register'"; ><?php echo trans('sign up') ?></button>
		              </div>
		            </li>
			  <?php else: ?>
			  	<li class="dropdown"> <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> 
			  		<i class="fa fa-shopping-cart fa-fw"></i><span class="hidden-xs"> <?php echo trans('wlc').' '.$this->session->userdata('full_name'); ?></span>
			  		
			  		<div class="loginbox dropdown-menu" id="items_div" style="height: <?php echo (count($items->res) * 75) + 80 ?>px"> 
			  			<span class="form-header"><?php echo trans('cart') ?></span> 
		                <ul id="items_list">
							<?php
							if ($items) {
							foreach ($items->res as $row): ?>
							<li onclick="location.href='<?php echo base_url() ?>cart_items'" style=" padding-top: 0; margin-top: 0">
								
				            		 <img style="height: 50px; width: 50px; margin-left: 0" src="<?php echo $service."uploads/products/$row->ProductThumb" ?>"> 
						            <font style="font-size: 10px; margin-left: 2px"><?php echo LANG() == 'en' ? $row->ProductName_en : $row->ProductName ?></font> 
									<!-- end: product -->
								
							</li>
							<?php endforeach ?>
							
							<?php } ?>
		                	
		                </ul>
		            </div>
			  	</li>
			  	<a></a>
			  	<li style="margin-top: 0"> 
			  		<a class="dropdown-toggle" href="<?php echo base_url()."logout" ?>"> <i class="fa fa-power-off fa-fw"></i> 
			  			<span class="hidden-xs"> <?php echo trans('logout'); ?></span>
			  		</a>
			  	</li>
			  <?php endif ?>
			  
            
          </ul>
       </div>
          
         <div class="row clearfix">
      <div class="col-lg-3 col-xs-12">
        <div class="logo"> <a href="<?php echo base_url() ?>" title="<?php echo trans('jomran') ?>"><!-- <img alt="Flatro - Responsive Metro Inspired Flat ECommerce theme" src="images/logo2.png"> -->
          <div class="logoimage"><img src="<?php echo base_url() ?>assets/images/logo.png" /></div>
          <div class="logotext"><span><strong><?php echo trans('jomran') ?></strong></span></div>
          <span class="slogan"></span></a> </div>
      </div>
      <!-- end: logo -->
      <div class="visible-xs f-space20"></div>
      <!-- search -->
   
      </div>
    </div>
  </div>
  <!-- end: Top Heading Bar -->
  
  <!--<div class="f-space20"></div>-->
  <!-- Logo and Search -->
 <!-- <div class="container">
   
  </div>-->
  <!-- end: Logo and Search -->
  <div class="f-space20"></div>
  <!-- Menu -->
    <div class="row clearfix">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 menu-col">
        <div class="<?php echo isset($main_page) ? 'menu-heading' : 'menu-heading menuHeadingdropdown' ?>"> <span> <i class="fa fa-bars"></i> <?php echo trans('categories') ?></span> </div>
        <!-- Mega Menu -->
        <div class="<?php echo isset($main_page) ? 'menu3dmega vertical' : 'menu3dmega vertical menuMegasub' ?>" id="menuMega">
          <ul>
            <!-- Menu Item Links for Mobiles Only -->
            <li class="visible-xs"> <a href="<?php echo base_url() ?>"> <i class="fa fa-home"></i> <span><?php echo trans('home') ?></span> <i class="fa fa-angle-right"></i> </a>
              <div class="dropdown-menu flyout-menu"> 
                <!-- Sub Menu -->
                <ul>
                  <li><a href="#a"><?php echo trans('about') ?></a></li>
                  <li> <a href="#a"><span><?php echo trans('account') ?></span> <i class="fa fa-caret-right"></i> </a>
                    <ul class="dropdown-menu sub flyout-menu">
                      <li><a href="#a"><?php echo trans('login') ?></a></li>
                    </ul>
                  </li>
                  <li> 
                  	<a href="#a"><span><?php echo trans('products') ?></span> <i class="fa fa-caret-right"></i> </a>
                  </li>
                  <li><a href="#a"><?php echo trans('contact') ?></a></li>
                </ul>
                <!-- end: Sub Menu --> 
              </div>
            </li>
            <!-- end: Menu Item --> 
            <!-- Menu Item -->
            
			
			<?php $i = 0; $d_check = 0;$accissory = ''; foreach ($subcats as $row) { ?>
				<?php if ($i == 0 || $row->CategoryID != $subcats[$i - 1]->CategoryID) { ?>
					<li style="height: 38px;"> <a href="#a"> <i class=""></i> <span> <?php echo LANG() == 'en' ? $row->CategoryName_en : $row->CategoryName ?></span>  </a>
		              <div class="dropdown-menu"> 
		                <!-- Sub Menu -->
		                <div class="content">
		                  <div class="row">
		                    <div class="col-md-4"><?php echo trans('prodl') ?>
		                      <ul>
				<?php } ?>
					<li><a class="menu-title" href="<?php echo base_url()."sub_cat/$row->ID" ?>"><?php echo LANG() == 'en' ? $row->SubCategoryName_en : $row->SubCategoryName ?></a></li>
				<?php if (!isset($subcats[$i + 1]) || ($row->CategoryID != $subcats[$i + 1]->CategoryID)) { ?>
							 </ul>
							  
	                    <? /* */ ?>
	                      </a> 
	                      
		                    </div>
		                    	<?php } ?>
		                  
		                  
		                    	<?php if (!isset($subcats[$i + 1]) || ($row->CategoryID != $subcats[$i + 1]->CategoryID)) { ?>
		                          
		                          
		                          <div class="col-md-4"> 
                       <ul>
		                      	
			
					
				
							 </ul>
                    </div>
                     
		                   <div class="col-md-7">
		                    	<?php  $ss = 0; $yes = 0; foreach ($top_prod as $prod) {
		                    		
		                    		foreach ($acc as $acc_row) {
		                    	if ($acc_row->CategoryID == $row->CategoryID && $d_check != $acc_row->CategoryID) {
											$yes = 1;
											if ($ss==0){
												echo LANG() == 'en' ? 'ACCESSORIES' : 'الاكسسوارات';
												$ss++;
											}
											?>
											<ul>
												<li><a class="menu-title" href="<?php echo base_url()."sub_cat/$acc_row->ID" ?>"><?php echo LANG() == 'en' ? $acc_row->SubCategoryName_en : $acc_row->SubCategoryName ?></a>
						<!-- <div class="row box-product"> 
                 
           </div>-->
					</li>
											</ul>
											<?php 
								$accissory = $acc_row->CategoryID;
								}
										
									}
									$d_check = $accissory;
		                    	
						if ($prod->cat_id == $row->CategoryID && !$yes) { ?>
					
							<div class="col-lg-12">
	                  <div class="product-block">
	                    <div class="image">
	                      <div class="product-label product-sale">
	                      	<span><?php echo trans('sale') ?></span>
	                      </div>
	                      <a class="img" href="<?php echo base_url()."product/$prod->ProductID" ?>">
	                      	<img alt="product info" src="<?php echo $service."uploads/products/$prod->ProductThumb" ?>" title="product title">
	                      </a> 
	                    </div>
	                    <div class="product-meta">
	                      <div class="name">
	                      	
	                      		<?php echo LANG() == 'en' ? $prod->ProductName_en : $prod->ProductName ?>
	                      	</a>
	                      </div>
	                      <div class="big-price"> 
	                      	<span class="price-new">
	                      		<span class="sym"><?php echo trans('AED') ?></span>
	                      		<?php echo $prod->ProductPrice - $prod->discount ?></span> 
	                      		<?php if ($prod->discount > 0): ?>
									<span class="price-old">
		                      			<span class="sym">
		                      				<?php echo trans('AED') ?>
		                      			</span><?php echo $prod->ProductPrice ?>
		                      		</span> 
								<?php endif ?>
	                      		
	                      	</div>
	                      <div class="big-btns"> 
	                      	<a class="btn btn-default btn-view pull-left" href="<?php echo base_url()."product/$prod->ProductID" ?>">
	                      		<?php echo trans('view') ?>
	                      	</a> 
	                      	<a class="btn btn-default btn-addtocart pull-right" onclick="add(<?php echo $prod->ProductID ?>)">
	                           <?php echo trans('addtocart') ?>
	                        </a> 
	                      </div>
	                      <div class="small-price"> 
	                      	<span class="price-new">
	                      		<span class="sym">
	                      			<?php echo trans('AED') ?>
	                      		</span>
	                      		<?php echo $prod->ProductPrice - $prod->discount ?>
	                      	</span> 
	                      	<?php if ($prod->discount > 0): ?>
								<span class="price-old">
		                      		<span class="sym"><?php echo trans('AED') ?></span>
		                      		<?php echo $prod->ProductPrice ?>
		                      	</span> 
							<?php endif ?>
	                      	
	                      </div>
	                      <div class="rating"> 
	                      	<i class="fa fa-star"></i> 
	                        <i class="fa fa-star"></i> 
	                        <i class="fa fa-star"></i> 
	                        <i class="fa fa-star"></i> 
	                        <i class="fa fa-star-half-o"></i> 
	                       <!-- <i class="fa fa-star-o"></i> -->
	                    </div>
	                      
	                    </div>
	                    <div class="meta-back"></div>
	                    
	                  </div>
	                </div>
                <?php } 
					} ?>
		                 
                <!-- end: Product -->
					
		                    </div>
		                    
		                  </div>
		                </div>
		                <!-- end: Sub Menu --> 
		              </div>
		            </li>
				<?php } ?>
			<?php $i++; } ?>
            
            <!-- end: Menu Item --> 
            
            <!-- end: Menu Item -->
          </ul>
        </div>
        <!-- end: Mega Menu --> 
      </div>
      <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 menu-col-2"> 
        <!-- Navigation Buttons/Quick Cart for Tablets and Desktop Only -->
        <div class="menu-links hidden-xs">
          <ul class="nav nav-pills nav-justified">
            <li> <a href="<?php echo base_url() ?>"> <i class="fa fa-home fa-fw"></i> <span class="hidden-sm"><?php echo trans('home') ?></span></a> </li>
            <li> <a href="<?php echo base_url() ?>about"> <i class="fa fa-info-circle fa-fw"></i> <span class="hidden-sm"><?php echo trans('about_us') ?></span></a> </li>
            <li> <a href="<?php echo base_url() ?>cart_items"> <i class="fa fa-bullhorn fa-fw"></i> <span class="hidden-sm"><?php echo trans('account') ?></span></a> </li>
            <li> <a href="<?php echo base_url() ?>contact"> <i class="fa fa-pencil-square-o fa-fw"></i> <span class="hidden-sm "><?php echo trans('contact_us') ?></span></a> </li>
              
            </li>
          </ul>
        </div>
        <!-- end: Navigation Buttons/Quick Cart Tablets and large screens Only --> 
        <?php if (!isset($main_page)): ?>
             </div>
        <?php endif ?>
        
        
        <script type="text/javascript">



function add ($ProductID) {
		
		
		$.ajax({
              url: '<?php echo base_url(); ?>addtocart/'+ $ProductID +'/' + 1,
              success: function(data) {
                if (data != 0) {
                	var item_hight = $("#items_div").height() + 115;
                	document.getElementById('items_div').setAttribute("style","height:"+ item_hight +"px");
                	$("#items_list").prepend(data);
                	swal ({
						title: '<?php echo trans('added_success') ?>',
						text: '<?php echo trans('added_s_desc') ?>',
						type: 'success',
						timer: 9000,
						showConfirmButton: false
					});
                } else{
                	window.location.href = '<?php echo base_url()."register" ?>';
                };
              }
          });
	  
	}
	
</script>
        
          