<?php $this->load->view('common/header_view'); ?>


<div class="row clearfix"></div>

<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-12 box-block"> 
      
      <!--  box content -->
      
      <div class="box-content"> 
        <!-- single product -->
        <div class="single-product"> 
          <!-- Images -->
          <div class="images col-md-6 col-sm-12 col-xs-12">
            <div class="row"> 
              <!-- Small Images -->
              <div class="thumbs col-md-3 col-sm-3 col-xs-3"  id="thumbs">
                <ul>
                	<?php if ($prod->images): ?>
						<?php foreach ($prod->images as $img): ?>
		                      <li class="">
		                        <a href="#a" data-image="<?php echo $service."uploads/prod_imgs/".$img->photo ?>" data-zoom-image="<?php echo $service."uploads/prod_imgs/".$img->photo ?>" class="elevatezoom-gallery active" >
		                      		<img src="<?php echo $service."uploads/prod_imgs/".$img->photo ?>" alt="small image" />
		                      	</a>
		                      </li>
		                  <?php endforeach ?>
		                  
					<?php endif ?>
                  
                </ul>
              </div>
              <!-- end: Small Images --> 
              <!-- Big Image and Zoom -->
              <div class="big-image col-md-9 col-sm-9 col-xs-9"> <img id="product-image" src="<?php echo $service."uploads/products/".$prod->prod->ProductThumb ?>" data-zoom-image="<?php echo $service."uploads/products/".$prod->prod->ProductThumb ?>" alt="big image" /> </div>
              <!-- end: Big Image and Zoom --> 
            </div>
          </div>
          
          <!-- end: Images --> 
          
          <!-- product details -->
          
          <div class="product-details col-md-6 col-sm-12 col-xs-12"> 
            
            <!-- Title and rating info -->
            <div class="title">
              <h1><?php echo LANG() == 'en' ? $prod->prod->ProductName_en : $prod->prod->ProductName ?></h1>
              <?php //<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> <span>This product has 30 review(s) <a href="#a">Add Review</a></span> </div> ?>
            </div>
            <!-- end: Title and rating info -->
            
            <div class="row"> 
              <!-- Availability, Product Code, Brand and short info -->
              <div class="short-info-wr col-md-12 col-sm-12 col-xs-12">
                <div class="short-info">
                  <div class="product-attr-text"> <?php echo trans('avilability') ?>: <span class="available" <?php echo $prod->prod->count ? 'style="background: red; color: white"' : '' ?>><?php echo $prod->prod->count ? trans('in_stock') : trans('unavailable') ?></span></div>
                  <div class="product-attr-text"><?php echo trans('brand') ?>: <span><?php echo LANG() == 'en' ? $prod->sub_cat->SubCategoryName_en : $prod->sub_cat->SubCategoryName ?></span></div>
                 
                </div>
              </div>
              <!-- end: Availability, Product Code, Brand and short info --> 
              
            </div>
           <?php /* <div class="row">
              <div class="short-info-opt-wr col-md-4 col-sm-4 col-xs-4">
                <div class="short-info-opt">
                  <div class="att-row">
                    
                    
                    <div class="color-wr">
                      <div class="color-options">
                        <ul class="pull-left">
                          <li class="input-prepend dropdown" data-select="true"> <a class="add-on dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <span class="dropdown-display">Color</span> <i class="fa fa-sort fa-fw"></i> </a> 
                            <!-- this hidden field is used to contain the selected option from the dropdown -->
                            <input class="dropdown-field" type="hidden" value="">
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#a" data-value="Black" class="border-black">Black</a></li>
                              <li><a href="#a" data-value="Green" class="border-green">Green</a></li>
                              <li><a href="#a" data-value="Blue" class="border-blue">Blue</a></li>
                              <li><a href="#a" data-value="Orange" class="border-orange">Orange</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="size-wr">
                      <div class="size-options">
                        <ul class="pull-left">
                          <li class="input-prepend dropdown" data-select="true"> <a class="add-on dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" href="#a"> <span class="dropdown-display">Size</span> <i class="fa fa-sort fa-fw"></i> </a> 
                            <!-- this hidden field is used to contain the selected option from the dropdown -->
                            <input class="dropdown-field" type="hidden" value="">
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#a" data-value="XS">XS</a></li>
                              <li><a href="#a" data-value="S">S</a></li>
                              <li><a href="#a" data-value="M">M</a></li>
                              <li><a href="#a" data-value="N">N</a></li>
                              <li><a href="#a" data-value="L">L</a></li>
                              <li><a href="#a" data-value="XL">XL</a></li>
                              <li><a href="#a" data-value="XXL">XXL</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
              
            </div>*/ ?>
            <div class="row">
              <div class="price-wr col-md-4 col-sm-4 col-xs-12">
                <div class="big-price"> <span class="price-old"> 
                	<?php if ($prod->prod->discount):?>
						<span class="sym"><?php echo trans('AED') ?></span><?php echo $prod->prod->ProductPrice ?>
					<?php endif ?></span> 
                	 <span class="price-new"><span class="sym"><?php echo trans('AED') ?></span><?php echo $prod->prod->ProductPrice - $prod->prod->discount ?></span> </div>
              </div>
              <div class="product-btns-wr col-md-8 col-sm-8 col-xs-12">
                <div class="product-btns">
                  <div class="product-big-btns">
                  	 <div class="qty-wr" style="padding-top: 15px">
                        <div class="qty-text hidden-xs"><?php echo trans('qty') ?></div>
                        <div class="quantity-inp">
                          <input id="qty" type="text" class="quantity-input" name="p_quantity" value="1">
                        </div>
                    </div>
                    <button class="btn btn-addtocart" onclick="add()"> <i class="fa fa-shopping-cart fa-fw"></i> <?php echo trans('addc') ?> </button>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- end: product details --> 
          
        </div>
        
        <!-- end: single product --> 
        
      </div>
      
      <!-- end: box content --> 
      
    </div>
  </div>
  <!-- end:row --> 
</div>
<!-- end: container-->

<div class="row clearfix f-space30"></div>

<!-- container -->
<div class="container"> 
  <!-- row -->
  <div class="row"> 
    <!-- tabs -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block product-details-tabs"> 
      
      <!-- Details Info/Reviews/Tags --> 
      <!-- Nav tabs -->
      <ul class="nav nav-tabs blog-tabs nav-justified">
        <li class="active"><a href="#details-info" data-toggle="tab"><i class="fa  fa-th-list fa-fw"></i> <?php echo trans('deta') ?></a></li>
        <li><a href="#reviews" data-toggle="tab"><i class="fa fa-comments fa-fw"></i> <?php echo trans('comm') ?></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
      	<div class="tab-pane" id="reviews" style="width: 100%">
          <div class="heading"> <span><strong>"<?php echo LANG() == 'en' ? $prod->prod->ProductName_en : $prod->prod->ProductName ?>"</strong> <?php echo trans('has') ?> <?php echo $comments[1] ?> <?php echo trans('reviews') ?></span>
          	<?php /* <a href="#wr" class="btn color1 normal">Add Review</a> */ ?>
          </div> 
          <?php foreach ($comments[0] as $row): ?>
              <div class="review">
	            <div class="review-info">
	              <div class="name"><i class="fa fa-comment-o fa-flip-horizontal fa-fw"></i> <?php echo $row->full_name ?></div>
	              <div class="date"> on <em><?php echo date('Y-m-d H:i', $row->com_date) ?></em></div>
	              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> <i class="fa fa-star-o"></i> </div>
	            </div>
	            <div class="text"><?php echo $row->comment; ?></div>
	          </div>
          <?php endforeach ?>
          <?php /*
          <span class="pull-left">Showing 1 to 2 of 123 (4 Pages)</span>
          <div class="pull-right">
            <ul class="pagination pagination-xs">
              <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
              <li  class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div> */ ?>
          <?php if ($this->session->userdata('cus_id')): ?>
	          <div class="write-reivew" id="#write-review">
	            <h3><?php echo trans('write_review') ?></h3>
	            <div class="fr-border"></div>
            
                <!-- Form -->
	            <form action="<?php echo base_url()."comment/$prod_id" ?>" id="review_form" method="post">
	              <div class="row">
	               
	                <div class="col-md-12 col-xs-12">
	                  <textarea name="comment" id="review" placeholder="Review" style="height: 130px"></textarea>
	                </div>
	              </div>
	              <button class="btn normal color1 pull-right"><?php echo trans('submit') ?></button>
	            </form>
	            <!-- end: Form -->
         	</div>
          <?php endif ?>
        </div>
        <div class="tab-pane active" id="details-info" style="width: 100%; min-height: 300px">
          <?php echo LANG() == 'en' ? $prod->prod->desc_en :  $prod->prod->desc_ar?>
        
        </div>
        
        
      </div>
      <!-- end: Tab panes --> 
      <!-- end: Details Info/Reviews/Tags -->
      <div class="clearfix f-space30"></div>
    </div>
    <!-- end: tabs --> 
    
    
  </div>
  <!-- row --> 
</div>
<!-- end: container --> 

<!-- Relate Products -->

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-column box-block">
      <div class="box-heading"><span><?php echo trans('related_prods') ?></span></div>
      <div class="box-content">
        <div class="box-products slide" id="productc3">
          <div class="carousel-controls"> <a class="carousel-control left" data-slide="prev" href="#productc3"> <i class="fa fa-angle-left fa-fw"></i> </a> <a class="carousel-control right" data-slide="next" href="#productc3"> <i class="fa fa-angle-right fa-fw"></i> </a> </div>
          <div class="carousel-inner"> 
            <!-- Items Row -->
            <?php $i=0; foreach ($prod->prods as $row) { ?>
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

<div class="row clearfix f-space30"></div>
</div>
<!-- Rectangle Banners -->


<div class="row clearfix f-space30"></div>
</div>
<!-- footer -->
</div></div></div></div></div></div></div>
<?php $this->load->view('common/footer_view') ?>
<script type="text/javascript">
	function add () {
		qty = document.getElementById("qty").value;
		
		$.ajax({
              url: '<?php echo base_url(); ?>addtocart/'+ '<?php echo $prod_id; ?>/' + qty,
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
                	swal ({
						title: '<?php echo trans('added_failed') ?>',
						text: '<?php echo trans('added_f_desc') ?>',
						type: 'error',
						timer: 9000,
						showConfirmButton: false
					});
                };
              }
          });
	  
	}
	
	function add_cart (ProductID) {
		
		
		$.ajax({
              url: '<?php echo base_url(); ?>addtocart/'+ ProductID +'/' + 1,
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