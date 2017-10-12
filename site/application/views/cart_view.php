
<?php $this->load->view('common/header_view') ?>


<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-title">
        <h2><?php echo trans('cart') ?> (<?php echo $items->count ?> <?php echo trans('items') ?>)</h2>
      </div>
    </div>
  </div>
</div>
<div class="row clearfix f-space10"></div>

<form method="post" action="<?php echo base_url() ?>check_out">
<?php 
$total_cost = 0;
$total_discount = 0;
$total = 0; 

foreach ($items->res as $row): ?>
	<div class="container" id="item<?php echo $row->OrderID ?>">
	  <input type="text" name="order_<?php echo $row->OrderID ?>" hidden value="<?php echo $row->OrderID ?>" />
	  <div class="row">
	    <div class="product">
	      <div class="col-md-2 col-sm-3 hidden-xs p-wr">
	        <div class="product-attrb-wr">
	          <div class="product-attrb">
	            <div class="image"> 
	            	<a class="img" href="<?php echo base_url()."product/$row->ProductID" ?>">
	            		<img alt="product info" style="height: 100%" src="<?php echo $service."uploads/products/$row->ProductThumb" ?>">
	            	</a> 
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-5 col-sm-1  hidden-sm col-xs-9 p-wr">
	        <div class="product-attrb-wr" >
	          <div class="product-meta">
	            <div class="name">
	              <h3><a href="<?php echo base_url()."product/$row->ProductID" ?>"><?php echo LANG() == 'en' ? $row->ProductName_en : $row->ProductName ?></a></h3>
	            </div>
	            <div class="price"> 
	            	<span class="price-new"><span class="sym"><?php echo trans('AED') ?> </span><?php echo $row->ProductPrice - $row->discount ?></span> 
	            	<?php if ($row->discount) { ?>
						<span class="price-old"><span class="sym"><?php echo trans('AED') ?> </span><?php echo $row->ProductPrice ?></span> 
					<?php } ?>
					<input type="text" hidden id="dis<?php echo $row->OrderID ?>" value="<?php echo $row->discount; ?>" /> 
	            </div>
	           
	          </div>
	        </div>
	      </div>
	      
	      <div class="col-md-2 hidden-sm hidden-xs p-wr">
	        <div class="product-attrb-wr">
	          <div class="product-attrb">
	            <div class="qtyinput">
	              <div class="quantity-inp">
	                <input type="text" onchange="change_total(<?php echo $row->OrderID;?>, <?php echo $row->ProductPrice - $row->discount ?>)" name="p_quantity" class="quantity-input" id="qty<?php echo $row->OrderID ?>" value="<?php echo $row->OrderAmount ?>">
	                <input type="text" hidden id="count_<?php echo $row->OrderID;?>" name="count_<?php echo $row->OrderID;?>" value="<?php echo $row->OrderAmount ?>" />
	                <div class="quantity-txt minusbtn"><a href="#a" onclick="min_one(<?php echo $row->OrderID;?>, <?php echo $row->ProductPrice - $row->discount ?>)" class="qty qtyminus" ><i class="fa fa-minus fa-fw"></i></a></div>
	                <div class="quantity-txt plusbtn"><a href="#a" onclick="add_one(<?php echo $row->OrderID;?>, <?php echo $row->ProductPrice - $row->discount ?>)" class="qty qtyplus" ><i class="fa fa-plus fa-fw"></i></a></div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <?php 
	      $total_cost += $row->OrderAmount * $row->ProductPrice; 
		  $total_discount += $row->OrderAmount * $row->discount;
		  $total += $row->OrderAmount * ($row->ProductPrice - $row->discount); 
	      ?>
	      <div class="col-md-2 hidden-sm hidden-xs p-wr">
	        <div class="product-attrb-wr">
	          <div class="product-attrb">
	            <div class="price"> <span class="t-price"><span class="sym"><?php echo trans('AED') ?> </span>
	            	<span id="total<?php echo $row->OrderID ?>"><?php echo $row->OrderAmount * ($row->ProductPrice - $row->discount) ?></span></span>
	            	<input type="text" id="totalp<?php echo $row->OrderID ?>" hidden value="<?php echo $row->OrderAmount * ($row->ProductPrice - $row->discount) ?>" />
	            	<input type="text" id="totald<?php echo $row->OrderID ?>" hidden value="<?php echo $row->OrderAmount * $row->discount ?>" />
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-1 col-sm-2 col-xs-3 p-wr">
	        <div class="product-attrb-wr">
	          <div class="product-attrb">
	            <div class="remove"> <a onclick="confirm('<?php echo trans('u_sure') ?>')" href="<?php echo base_url()."del_item/$row->OrderID" ?>" class="color2" data-toggle="tooltip" data-original-title="Remove"><i class="fa fa-trash-o fa-fw color2"></i></a> </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end: product -->
	<div class="row clearfix f-space30"></div>
<?php endforeach ?>
<!-- product -->




<div class="container">
  <div class="row"> 
    
    <!-- 	Total amount -->
    
    <div class="col-md-4 col-sm-4 col-xs-12 cart-box-wr">
      <div class="box-content">
        <div class="cart-box-tm">
          <div class="tm1"><?php echo trans('total_cost') ?></div>
          <div class="tm2"><?php echo trans('AED') ?> <span id="tot"><?php echo $total_cost ?></span></div>
        </div>
        <div class="clearfix f-space10"></div>
        <div class="cart-box-tm">
          <div class="tm1"><?php echo trans('total_discount') ?> </div>
          <input type="text" id="discount" hidden value="<?php echo $total_discount; ?>" /> 
          <div class="tm2"><?php echo trans('AED') ?> <span id="newd"><?php echo $total_discount ?></span></div>
        </div>
        <div class="clearfix f-space10"></div>
        
        <div class="cart-box-tm">
          <div class="tm3 bgcolor2"><?php echo trans('total') ?> </div>
          <input type="text" id="alltotal" hidden value="<?php echo $total; ?>" /> 
          <div class="tm4 bgcolor2"><?php echo trans('AED') ?> <span id="newt"><?php echo $total ?></span></div>
        </div>
        <div class="clearfix f-space10"></div>
        <button type="submit" class="btn large color1 pull-right"><?php echo trans('check_out') ?></button>
        <div class="clearfix f-space30"></div>
      </div>
    </div>
    
    <!-- end: Total amount --> 
    
  </div>
</div>
</form>
<!-- Rectangle Banners -->


</div>
</div>
<div class="row clearfix f-space30"></div>
<!-- footer -->
<?php $this->load->view('common/footer_view') ?>
<script type="text/javascript">
	function change_total(id, price) {
		
		qty  = document.getElementById("qty" + id).value;
		oldp = document.getElementById("totalp" + id).value;
		oldt = document.getElementById("alltotal").value;
		dis  = document.getElementById("dis" + id).value;
		oldd = document.getElementById("discount").value;
		totald = document.getElementById("totald" + id).value;
		qty  = parseInt(qty);
		if (qty > 0) {
			oldd = parseInt(oldd);
			oldp = parseInt(oldp);
			oldt = parseInt(oldt);
			dis  = parseInt(dis);
			totald  = parseInt(totald);
			
			price = parseInt(price);
			new_price = price * qty;
			
			new_dis = dis * qty;
			dbet = new_dis - totald;
			
			bet = new_price - oldp;
			
			newt = oldt + bet;
			newd = oldd + dbet;
			 
			document.getElementById("total" + id).innerHTML = ' '+new_price;
			document.getElementById("newt").innerHTML = ' '+newt;
			document.getElementById("alltotal").value = newt;
			document.getElementById("newd").innerHTML = ' '+newd;
			document.getElementById("discount").value = newd;
			document.getElementById("tot").innerHTML = newt + newd;
			document.getElementById("totalp" + id).value = new_price;
			document.getElementById("discount").value = newd;
			document.getElementById("totald" + id).value = new_dis;
			document.getElementById("count_" + id).value = qty;
		};
	}
	
	function add_one (id, price) {
		qty  = document.getElementById("qty" + id).value;
		oldp = document.getElementById("totalp" + id).value;
		oldt = document.getElementById("alltotal").value;
		dis  = document.getElementById("dis" + id).value;
		oldd = document.getElementById("discount").value;
		totald = document.getElementById("totald" + id).value;
		qty = parseInt(qty);
		if (qty > 0) {	
			qty += 1;
			oldd = parseInt(oldd);
			oldp = parseInt(oldp);
			oldt = parseInt(oldt);
			dis  = parseInt(dis);
			totald  = parseInt(totald);
			
			price = parseInt(price);
			new_price = price * qty;
			
			new_dis = dis * qty;
			dbet = new_dis - totald;
			
			bet = new_price - oldp;
			
			newt = oldt + bet;
			newd = oldd + dbet;
			 
			document.getElementById("total" + id).innerHTML = ' '+new_price;
			document.getElementById("newt").innerHTML = ' '+newt;
			document.getElementById("alltotal").value = newt;
			document.getElementById("newd").innerHTML = ' '+newd;
			document.getElementById("discount").value = newd;
			document.getElementById("tot").innerHTML = newt + newd;
			document.getElementById("totalp" + id).value = new_price;
			document.getElementById("discount").value = newd;
			document.getElementById("totald" + id).value = new_dis;
			document.getElementById("count_" + id).value = qty;
		};
		
	}
	
	function min_one (id, price) {
		
		qty  = document.getElementById("qty" + id).value;
		oldp = document.getElementById("totalp" + id).value;
		oldt = document.getElementById("alltotal").value;
		dis  = document.getElementById("dis" + id).value;
		oldd = document.getElementById("discount").value;
		totald = document.getElementById("totald" + id).value;
		qty = parseInt(qty);
		if (qty > 1) {
			qty -= 1;
			oldd = parseInt(oldd);
			oldp = parseInt(oldp);
			oldt = parseInt(oldt)
			dis  = parseInt(dis);
			totald  = parseInt(totald);
			
			price = parseInt(price);
			new_price = price * qty;
			
			new_dis = dis * qty;
			dbet = new_dis - totald;
			
			bet = new_price - oldp;
			//alert(new_price+' '+oldp);
			newt = oldt + bet;
			newd = oldd + dbet;
			 
			document.getElementById("total" + id).innerHTML = ' '+new_price;
			document.getElementById("newt").innerHTML = ' '+newt;
			document.getElementById("alltotal").value = newt;
			document.getElementById("newd").innerHTML = ' '+newd;
			document.getElementById("totalp" + id).value = new_price;
			document.getElementById("discount").value = newd;
			document.getElementById("tot").innerHTML = newt + newd;
			document.getElementById("discount").value = newd;
			document.getElementById("totald" + id).value = new_dis;
			document.getElementById("count_" + id).value = qty;
		};
	}
</script>
