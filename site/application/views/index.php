<?php //echo "<pre>"; print_r($high_prods); exit; ?>
<?php $this->load->view('common/header_view') ?>
      
        
        <div class="clearfix"></div>
        <!-- Iview Slider -->
        <div class="slider" style="height: 250px">
          <div id="iview"> 
      		
            	<?php $i = 0; foreach ($sliders as $row): ?>
            		
            		<div data-iview:image="<?php echo $service."uploads/sliders/$row->img" ?>" data-iview:pausetime="6000" style="width: 867px; margin-bottom: 10px">
            		</div>	
				<?php $i++; endforeach ?>
                      
              
              
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
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
<meta name="online shopping" content=" online shopping store in UAE, Dubai. Buy the latest mobiles, tablets, laptops and home appliances at low prices and enjoy free ">
<!-- end: Header --> 
<!-- Products -->
<div class="row clearfix f-space30"></div>
<div class="container"  id="widthp">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span><?php echo trans('top_products') ?></span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc1">
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <div class="item active">
              <div class="row box-product"> 
                <!-- Product -->
                <?php foreach ($high_prods as $row): ?>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-top: 20px">
	                  <div class="product-block">
	                    <div class="image">
	                      <div class="product-label product-sale">
	                      	<span><?php echo trans('sale') ?></span>
	                      </div>
	                      <a class="img" href="<?php echo base_url()."product/$row->ProductID" ?>">
	                      	<img alt="product info" src="<?php echo $service."uploads/products/$row->ProductThumb" ?>" title="product title">
	                      </a> 
	                    </div>
	                    <div class="product-meta">
	                      <div class="name">
	                      	<a href="<?php echo base_url()."product/$row->ProductID" ?>">
	                      		<?php echo LANG() == 'en' ? $row->ProductName_en : $row->ProductName ?>
	                      	</a>
	                      </div>
	                      <div class="big-price"> 
	                      	<span class="price-new">
	                      		<span class="sym"><?php echo trans('AED') ?></span>
	                      		<?php echo $row->ProductPrice - $row->discount ?></span> 
	                      		<?php if ($row->discount > 0): ?>
									<span class="price-old">
		                      			<span class="sym">
		                      				<?php echo trans('AED') ?>
		                      			</span><?php echo $row->ProductPrice ?>
		                      		</span> 
								<?php endif ?>
	                      		
	                      	</div>
	                      <div class="big-btns"> 
	                      	<a class="btn btn-default btn-view pull-left" href="<?php echo base_url()."product/$row->ProductID" ?>">
	                      		<?php echo trans('view') ?>
	                      	</a> 
	                      	<a class="btn btn-default btn-addtocart pull-right" onclick="add(<?php echo $row->ProductID ?>)">
	                           <?php echo trans('addtocart') ?>
	                        </a> 
	                      </div>
	                      <div class="small-price"> 
	                      	<span class="price-new">
	                      		<span class="sym">
	                      			<?php echo trans('AED') ?>
	                      		</span>
	                      		<?php echo $row->ProductPrice - $row->discount ?>
	                      	</span> 
	                      	<?php if ($row->discount > 0): ?>
								<span class="price-old">
		                      		<span class="sym"><?php echo trans('AED') ?></span>
		                      		<?php echo $row->ProductPrice ?>
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
                <?php endforeach ?>
                
                <!-- end: Product --> 
                
              </div>
            </div>
            <!-- end: Items Row --> 
           
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
<div class="row clearfix f-space30"></div>

<?php //if ($this->session->userdata('ip_address') == '90.153.153.253') { ?>
	<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span><?php echo trans('top_seller') ?></span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <?php $i=0; foreach ($best_sell as $row) { ?>
                <?php if ($i==0 || $i %4==0): ?>
                    <div class="item <?php echo $i==0 ? 'active' : '' ?>">
		              <div class="row box-product"> 
		                <!-- Product -->
                <?php endif ?>
                
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-top: 20px">
                  <div class="product-block">
                    <div class="image">
                      <div class="product-label product-sale">
                      	<span><?php echo trans('sale') ?></span>
                      </div>
                      <a class="img" href="<?php echo base_url()."product/$row->ProductID" ?>">
                      	<img alt="product info" src="<?php echo $service."uploads/products/$row->ProductThumb" ?>" title="product title">
                      </a> 
                    </div>
                    <div class="product-meta">
                      <div class="name">
                      	<a href="<?php echo base_url()."product/$row->ProductID" ?>">
                      		<?php echo LANG() == 'en' ? $row->ProductName_en : $row->ProductName ?>
                      	</a>
                      </div>
                      <div class="big-price"> 
                      	<span class="price-new">
                      		<span class="sym"><?php echo trans('AED') ?></span>
                      		<?php echo $row->ProductPrice - $row->discount ?></span> 
                      		<?php if ($row->discount > 0): ?>
								<span class="price-old">
	                      			<span class="sym">
	                      				<?php echo trans('AED') ?>
	                      			</span><?php echo $row->ProductPrice ?>
	                      		</span> 
							<?php endif ?>
                      		
                      	</div>
                      <div class="big-btns"> 
                      	<a class="btn btn-default btn-view pull-left" href="<?php echo base_url()."product/$row->ProductID" ?>">
                      		<?php echo trans('view') ?>
                      	</a> 
                      	    <a class="btn btn-default btn-addtocart pull-right" onclick="add_cart(<?php echo $row->ProductID ?>)">
                           <?php echo trans('addtocart') ?>
                        </a> 
                      </div>
                      <div class="small-price"> 
                      	<span class="price-new">
                      		<span class="sym">
                      			<?php echo trans('AED') ?>
                      		</span>
                      		<?php echo $row->ProductPrice - $row->discount ?>
                      	</span> 
                      	<?php if ($row->discount > 0): ?>
							<span class="price-old">
	                      		<span class="sym"><?php echo trans('AED') ?></span>
	                      		<?php echo $row->ProductPrice ?>
	                      	</span> 
						<?php endif ?>
                      	
                      </div>
                      <div class="rating"> 
                      	<i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star-half-o"></i> 
                       <!--<i class="fa fa-star-o"></i> -->
                      </div>
                      
                    </div>
                    <div class="meta-back"></div>
                  </div>
                </div>
                
                <?php $i++; if ($i %4==0): ?>
	                    </div>
	            	</div>
                <?php endif ?>
            <?php  } ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- end: Related products -->
<?php //} ?>

<!-- Rectangle Banners -->
<div class="row clearfix f-space30"></div>

<!-- end: Rectangle Banners --> 
<!-- Widgets -->

<!-- end: Widgets -->
<div class="row clearfix f-space30"></div>
<?php $this->load->view('common/footer_view'); ?>
<script type="text/javascript">



	
</script>

