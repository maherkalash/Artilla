<?php $this->load->view('common/header_view') ?>
<!-- end: Header -->

<div class="row clearfix"></div>
<div class="container">
  <div class="row">
   
  </div>
</div>
<div class="row clearfix f-space10"></div>
<!-- Shop Page title -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="shop-page-title dark">
        <h2><?php echo LANG() == 'en' ? $sub_cats[0]->CategoryName_en : $sub_cats[0]->CategoryName ?></h2>
        <?php $i = 0; foreach ($sub_cats as $row) { ?>
            <?php if ($i % 4 == 0) { ?>
                <ul class="pull-left">
            <?php } ?>
            <li><a href="<?php echo base_url()."sub_cat/$row->ID" ?>"><?php echo LANG() == 'en' ? $row->SubCategoryName_en : $row->SubCategoryName ?></a></li>
            <?php if ($i > 0 && ($i % 4) == 3) { ?>
                </ul>
            <?php } ?>
        <?php $i++; } ?>
        
          
      </div>
    </div>
  </div>
</div>
<!-- end: Shop Page title -->
<div class="row clearfix f-space10"></div>
<div class="container"> 
  <!-- row -->
  <div class="row">
    <div class="col-md-9 col-sm-12 col-xs-12 box-block">
      <div class="box-heading category-heading"><span>
      	<?php
      	echo trans('show');  
      	echo ($page * 30) + 1 . '-' . ($page == $page_num - 1 ? $items_num : ($page * 30) + 30);
      	echo trans('of');
		echo $items_num;
		echo trans('products') 
		?></span>
        <ul class="nav nav-pills pull-right">
          <li class="view-list"> <a href="<?php echo $page == 0 ? '#' : base_url()."sub_cat/$subcat_id/".($page-1) ?>"> &lt</a> </li>
      
          <li class="view-grid">  <?php if ($page_num > 1): ?><a href="<?php echo $page == $page_num - 1 ? '#' : base_url()."sub_cat/$subcat_id/".($page_num - 1) ?>"> &gt</a><?php endif ?>
      	  <?php if ($page_num < 1): ?> <a href="#"> &gt</a><?php endif ?> </li>
         

        </ul>
      </div>
      <div class="row clearfix f-space20"></div>
      <div class="box-content">
        <div class="box-products"> 
          
        
          <!-- end: Products Row -->
          
          <div class="clearfix f-space30"></div>
          <!-- Products Row -->
          <div class="row box-product"> 
            <!-- Product -->
            <?php foreach ($products as $row): ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 20px">
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
	                      	<a  href="<?php echo base_url()."product/$row->ProductID" ?>">
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
<a class="btn btn-default btn-addtocart pull-right" onclick="add(<?php echo $row->ProductID ?>)">	                           <?php echo trans('addtocart') ?>
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
	                        <i class="fa fa-star-half-o"></i> 
	                        <i class="fa fa-star-o"></i> 
	                      </div>
	                      
	                    </div>
	                    <div class="meta-back"></div>
	                  </div>
	                </div>
                <?php endforeach ?>
            <!-- end: Product --> 
            <!-- Product -->
           
            <!-- end: Product --> 
            <!-- Product -->
            
            <!-- end: Product --> 
          </div>
          
          <!-- end: Products Row -->
          
          <div class="clearfix f-space30"></div>
          <!-- Products Row -->
          
          
          <!-- end: Products Row --> 
          
        </div>
      </div>
      <div class="clearfix f-space30"></div>
      <span class="pull-left">
      	<?php
      	echo trans('show');  
      	echo ($page * 30) + 1 . '-' . ($page == $page_num - 1 ? $items_num : ($page * 30) + 30);
      	echo trans('of');
		echo $items_num;
		echo trans('products') 
		?>
      </span>
      <?php if ($page_num > 1): ?>
          <div class="pull-right">
	        <ul class="pagination pagination-lg">
	          <li <?php echo $page == 0 ? 'class="disabled"' : '' ?>><a href="<?php echo $page == 0 ? '#' : base_url()."sub_cat/$subcat_id/0" ?>">&lt;&lt;</a></li>
	          <?php for ($i=0; $i < $page_num; $i++) { ?>
				  <li <?php echo $page == $i ? 'class="active"' : '' ?>>
				  	<a href="<?php echo $page == $i ? '#' : base_url()."sub_cat/$subcat_id/$i"; ?>"><?php echo $i + 1; ?></a>
				  </li>
			  <?php } ?>
	          <li <?php echo $page == $page_num - 1 ? 'class="disabled"' : '' ?>><a href="<?php echo $page == $page_num - 1 ? '#' : base_url()."sub_cat/$subcat_id/".($page_num - 1) ?>">&gt;&gt;</a></li>
	        </ul>
	      </div>
      <?php endif ?>
      
    </div>
    
    <!-- side bar -->
    <div class="col-md-3 col-sm-12 col-xs-12 box-block page-sidebar">
    
      
      <div class="box-heading"><span><?php echo trans('categories'); ?></span></div>
      <!-- Categories -->
      <div class="box-content">
      	<div class="panel-group" id="blogcategories">
          <div class="panel panel-default">
          	<?php $i = 0; foreach ($subcats as $row) { ?>
				<?php if ($i == 0 || $row->CategoryID != $subcats[$i - 1]->CategoryID) { ?>
					<div class="panel panel-default">
		              	<div class="panel-heading closed" data-parent="#blogcategories" data-target="#collapse<?php echo $row->CategoryID ?>" data-toggle="collapse">
		              		
			              <h4 class="panel-title"> <a href="#a"> <span class="fa fa-plus"></span> 
			              	<?php echo LANG() == 'en' ? $row->CategoryName_en : $row->CategoryName ?> </a>
			              </h4>
			            </div>
			            <div class="panel-collapse collapse" id="collapse<?php echo $row->CategoryID ?>">
			              <div class="panel-body">
			                <ul>
					<?php } ?>
					
						<li class="item"><a class="menu-title" href="<?php echo base_url()."sub_cat/$row->ID" ?>"><?php echo LANG() == 'en' ? $row->SubCategoryName_en : $row->SubCategoryName ?></a>
							 <!--<a href=""><?php echo LANG() == 'en' ? $row->SubCategoryName_en : $row->SubCategoryName ?></a>--></li>
						
					<?php if (!isset($subcats[$i + 1]) || ($row->CategoryID != $subcats[$i + 1]->CategoryID)) { ?>
						
								</ul>
             				 </div> 
             			</div>
             		</div>
					<?php } ?>
				<?php $i++; } ?>
        </div>
      </div>
      <!-- end: Blog Categories -->
      <div class="clearfix f-space30"></div>
      <!-- Get Updates Box -->
      <div class="box-content">
      <!--  <div class="subscribe">
          <div class="heading">
            <h3>Get updates</h3>
          </div>
          <div class="formbox">
            <form>
              <i class="fa fa-envelope fa-fw"></i>
              <input class="form-control" id="InputUserEmail" placeholder="Your e-mail..." type="text">
             <button class="btn color1 normal pull-right" type="submit">Sign
              up</button>
            </form>
          </div>
        </div>-->
      </div>
      <!-- end: Get Updates Box --> 
      
    </div>
    <!-- end:sidebar --> 
  </div>
  <!-- end:row --> 
  </div>
  </div>
  </div>
  </div>
<?php $this->load->view('common/footer_view') ?>
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

	function adds ($ProductID) {
		
		
		$.ajax({
              url: '<?php echo base_url(); ?>addtocart/'+ $ProductID +'/' + 1,
              success: function(data) {
                if (data != 0) {
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