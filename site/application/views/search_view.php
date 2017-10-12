
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
        <h2><?php echo trans('search_results') ?></h2>
        
          
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
      	echo ($page * 30) + 1 . '-' . ($page == $page_num - 1 ? $items : ($page * 30) + 30);
      	echo trans('of');
		echo $items;
		echo trans('products') 
		?></span>
        <ul class="nav nav-pills pull-right">
          <li class="view-list"> <a href="<?php echo $page == 0 ? '#' : base_url()."search/".($page-1)."?search_cat=$id&search_s=$string" ?>"> &lt</a> </li>
          <li class="view-grid"> <a href="<?php echo $page == $page_num - 1 ? '#' : base_url()."search/".($page+1)."?search_cat=$id&search_s=$string" ?>"> &gt</a> </li>
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
	                      	<img style="height: 212px" alt="product info" src="<?php echo $service."uploads/products/$row->ProductThumb" ?>" title="product title">
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
	                      	<a class="btn btn-default btn-addtocart pull-right" onclick="add()">
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
      	echo ($page * 30) + 1 . '-' . ($page == $page_num - 1 ? $items : ($page * 30) + 30);
      	echo trans('of');
		echo $items;
		echo trans('products') 
		?>
      </span>
      <?php if ($page_num > 1): ?>
          <div class="pull-right">
	        <ul class="pagination pagination-lg">
	          <li <?php echo $page == 0 ? 'class="disabled"' : '' ?>><a href="<?php echo $page == 0 ? '#' : base_url()."sub_cat/0" ?>">&lt;&lt;</a></li>
	          <?php for ($i=0; $i < $page_num; $i++) { ?>
				  <li <?php echo $page == $i ? 'class="active"' : '' ?>>
				  	<a href="<?php echo $page == $i ? '#' : base_url()."sub_cat/$i"; ?>"><?php echo $i + 1; ?></a>
				  </li>
			  <?php } ?>
	          <li <?php echo $page == $page_num - 1 ? 'class="disabled"' : '' ?>><a href="<?php echo $page == $page_num - 1 ? '#' : base_url()."sub_cat/".($page_num - 1) ?>">&gt;&gt;</a></li>
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
        <div class="subscribe">
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
        </div>
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