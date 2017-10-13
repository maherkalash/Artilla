<?php $this->load->view('common/header'); ?>

			<!--div class="row">
                    <div class="col-sm-12">
                    	        <div class="navbar-custom" style="background-color:#ffffff; ma" >
          <div class="container" >
  	 	   <ul class="nav nav-tabs tabs-bordered" >
           
             <?php foreach ($gallery_cat as $value) { ?>
                     
            <li class="" style="">
                <a href="#" onclick="to('<?php echo $value->cat_name?>')" data-toggle="tab" aria-expanded="<?php echo $id==$value->cat_id?'true' : 'false' ?>">
                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                    <span class="hidden-xs"><?php echo (lang()=='en')? $value->cat_name : $value->cat_name_ar ?></span>
                </a>
            </li>
              <?php } ?>
     
           </ul>
          </div>
        </div>
                        
                    </div>
                    
                    
                </div--> 
                
                <div class="col-md-12">
                        <div class="card-box">
                         
						 
                            <ul class="nav nav-tabs tabs-bordered">
                            	<li class="<?php echo $id==0?'active' : '' ?>" style="">
					                <a href="#" onclick="to('gallery')" data-toggle="tab" aria-expanded="<?php echo $id==0?'true' : 'false' ?>">
					                    <span class="visible-xs"><i class="fa fa-home"></i></span>
					                    <span class="hidden-xs"><?php echo (lang()=='en')? 'All' : 'الكل' ?></span>
					                </a>
					                
					            </li>
                            	
                            	
					              <?php foreach ($gallery_cat as $value) { ?>
					                     
					            <li class="<?php echo $id==$value->cat_id?'active' : '' ?>" style="">
					                <a href="#" onclick="to('<?php echo $value->cat_name?>')" data-toggle="tab" aria-expanded="<?php echo $id==$value->cat_id?'true' : 'false' ?>">
					                    <span class="visible-xs"><i class="fa fa-home"></i></span>
					                    <span class="hidden-xs"><?php echo (lang()=='en')? $value->cat_name : $value->cat_name_ar ?></span>
					                </a>
					                
					            </li>
		
					              <?php } ?>
                       
                            </ul>
                            <div class="tab-content">
                       
                                                   <div class="row">
                             	<?php 
				    	$pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>
				    		
							<?php $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>
                                    	
                                        <div class="col-md-3">
                               <div class="thumbnail blur">
                             
              <a href="#custom-modal-<?php echo $result->p_id ?>"  data-animation="blur" data-plugin="custommodal"
               data-overlaySpeed="150" data-overlayColor="#36404a">
                 <img style="height: 245px" src="<?php echo base_url(). 'uploads/gallery/'.$result->img ?>"  alt=""  class="img-responsive"/>
                    </a>
                    			
                           
                               	     
                          <center>     
                          	 <div class="star-rating">
      <div class="star-rating__wrap">
       <input class="star-rating__input" id="<?php echo $result->p_id ?>-5" onclick="rate(<?php echo $result->p_id?>,5)" type="radio" name="rating-<?php echo $result->p_id?>" value="5" <?php echo $result->rating==5? 'checked': ''?>>
        <label class="star-rating__ico fa fa-star-o fa-lg"  for="<?php echo $result->p_id ?>-5" title="5 out of 5 stars"></label>
        <input class="star-rating__input" id="<?php echo $result->p_id ?>-4" onclick="rate(<?php echo $result->p_id?>,4)" type="radio" name="rating-<?php echo $result->p_id?>" value="4" <?php echo $result->rating==4? 'checked': ''?>>
        <label class="star-rating__ico fa fa-star-o fa-lg" for="<?php echo $result->p_id ?>-4" title="4 out of 5 stars"></label>
        <input class="star-rating__input" id="<?php echo $result->p_id ?>-3" onclick="rate(<?php echo $result->p_id?>,3)" type="radio" name="rating-<?php echo $result->p_id?>" value="3" <?php echo $result->rating==3? 'checked': ''?>>
        <label class="star-rating__ico fa fa-star-o fa-lg" for="<?php echo $result->p_id ?>-3" title="3 out of 5 stars"></label>
        <input class="star-rating__input" id="<?php echo $result->p_id ?>-2" onclick="rate(<?php echo $result->p_id?>,2)" type="radio"  name="rating-<?php echo $result->p_id?>" value="2" <?php echo $result->rating==2? 'checked': ''?>>
        <label class="star-rating__ico fa fa-star-o fa-lg" for="<?php echo $result->p_id ?>-2" title="2 out of 5 stars"></label>
        <input class="star-rating__input" id="<?php echo $result->p_id ?>-1" onclick="rate(<?php echo $result->p_id?>,1)" type="radio" name="rating-<?php echo $result->p_id?>" value="1" <?php echo $result->rating==1? 'checked': ''?>>
        <label class="star-rating__ico fa fa-star-o fa-lg" for="<?php echo $result->p_id ?>-1" title="1 out of 5 stars"></label>
      					</div>
				</div>
   
                      <center> <div class="caption">
                   
                   
					            <!-- Modal -->
        <div id="custom-modal-<?php echo $result->p_id ?>" class="modal-demo ">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            
            <div class="custom-modal-text">
            	<div class="row">
            		 <div class="col-md-4">
           	<div class="row">
           	<img  src="<?php echo $result->photo?    base_url(). 'uploads/gallery/'.$result->photo : base_url().'assets/images/users/avatar-3.jpg'   ?>" class="img-rounded"/>
           </div>
           <div class="row">
           	<h3><?php echo $result->username .' '.$result->lastname  ?></h2>
          </div>
          <div class="row">
           	<p><?php echo $result->description ?></p>
           	
           </div>
           	</div>
            			<div class="col-md-8">
            				  <div id="player<?php echo $result->p_id ?>"></div>
           </div>
          
           
           <div class="row">
          	<div class="col-md-12">
           	<div class="col-md-6"><h4> Click to see on <a href='http://Instgram.com<?php echo $result->facebook ?>'>Facebook</a></h4></div>
           	<div class="col-md-6"><h4> Click to see on <a style="color: red" href='http://Instgram.com<?php echo $result->instagram ?>'>Instagram</a></h4></div>
           	</div>
           	</div>
           </div>
           
            </div>
        </div>
                        <a href="http://facebook.com/<?php echo $result->facebook ?>"
                           class="btn btn-primary waves-effect waves-light"
                           role="button">Facebook</a>
                        <a style="background-color: red;color: black;" href="http://instagram.com/<?php echo $result->instagram ?>"
                           class="btn btn-default waves-effect m-l-5"
                           role="button">Instgram</a>
                    </p>
                </div></center>
                                            </div>
                                        </div>
                                        

                                        
                                        <?php } ?>
                                        
                                       
                                    </div> 
                  <?php if ($num_rows > 8): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."/".$cat."/1"?>"><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page - 4)?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page + 3)?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."/".$cat."/".($page + 4)?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."/".$cat."/".($pages) ?>">></a></li>
							
						</ul>
					</div>
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo 'No data';//$this->lang->line('no_emps'); ?></center></b>
			<?php } ?>  
                       
                       
                       
                       
                            </div>
                        </div>
                    </div>
   		


	


	<?php $this->load->view('common/footer'); ?>	
	                   

<script src="https://content.jwplatform.com/libraries/LtJZ3pc8.js"></script>





	<script type="text/javascript">
	<?php foreach ($results as $result) { ?>
		var playerInstance = jwplayer("player<?php echo $result->p_id ?>");
	    playerInstance.setup({
	    	
	        file: "https://www.youtube.com/watch?v=ZibkJSwefdU",
	
	        width: '309px',
	        height: '290px',
	        image: '<?php echo  base_url().'assets/images/users/avatar-3.jpg' ?>'
	    });
	<?php } ?>
	    

</script>
	
	<script>
		function rate(p_id,id) {
		
			
			<?php if (!$this->session->userdata('user_id')) {?>
				
			var text = 'need login';
			swal({
		            title: '<?php echo 'Fail'; //trans('fail'); ?>',
		            text: text ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
				
			<?php }else {?>
				
			
				
        $.ajax({
        	
            url: '<?php echo base_url(); ?>rating/' + p_id +'/'+ id,
            success: function(data) {
                if (data==1) {
                	
                	
              var text = 'Done';
				swal({
		            title: '<?php echo 'rateing done'; //trans('fail'); ?>',
		            text: text ,
		            type: 'success',
		            
		            showConfirmButton:true
		        });
                   
                } else {
                	 
                	var text = 'you cant rete toice';
			swal({
		            title: '<?php echo 'Fail'; //trans('fail'); ?>',
		            text: text ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
               };
            }
        });
    
				
				<?php } ?>
			
			
    	
    	
    
    }
	
	
 
		
		$('.rating input').change(function () {
  	var $radio = $(this);
 	 $('.rating .selected').removeClass('selected');
	 $radio.closest('label').addClass('selected');
		});
		
		function to (to) {
		location.href = "<?php echo base_url()?>"+'student'+to
		  
		}
		
	</script>
		