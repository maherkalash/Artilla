<?php $this->load->view('common/header'); ?>
<div class="col l12 center mar-top">
    <!-- Control buttons -->

    <?php foreach ($gallery_cat as $value) { ?>
    <a class="btn lighten-2 pink white-text" onclick="to('<?php echo $value->cat_name?>')" name="'<?php echo $value->cat_name?>" <?php echo $id==$value->cat_id?'checked' : '' ?>> <?php echo (lang()=='en')? $value->cat_name : $value->cat_name_ar ?></a>
    <?php } ?>
    <a class="btn amber" onclick="filterSelection('rating')" name="category"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
    <a class="btn lighten-3 pink white-text" onclick="filterSelection('newest')" name="category">جديد</a>
</div>


<div class="row-gallery row">
    <!-- make evrey item col l3 s12 -->



 	          <?php
				    	$pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>

							<?php $l=0; $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>

                <div class="col-sm-3 layg">

                    <div class="containerg no-pad-sides design filter art">
                        <img src="<?php echo base_url(). 'uploads/gallery/'.$result->img ?>" class="image">
                        <div class="overlay" onclick="openModal(<?php echo $result->p_id ?>)">
                            <div class="top-left text-white">
                                <h3 class="artName-text">Art Name </h3>
                                <h5 class="artistName-text">By @Artist</h5>
                            </div>
                            <div class="sections">
                                <span class="label tag">Art</span>
                                <span class="label tag">Design</span>
                                <span class="label tag">illustartor</span>
                            </div>
                            <div class="bottom-left">
                                <i class="fa fa-smile-o midnightBlue-text" aria-hidden="true"></i><span class="midnightBlue-text"> 2,465 </span>
                            </div>
                            <div class="centered">
                                <a class="btn-love">
                                    <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                                </a>
                            </div>
                        </div>
                    </div>

                  </div>





                                        <?php $l++; } ?>

  </div>

              <div id="sideModalDetails" class="sideModal">

              </div>

              <div class="col l12 divider"></div>




                  <?php if ($num_rows > 8): ?>
					<div class="row col center">
						<ul class="pagination ">
							<li class="waves-effect"><a href="<?php echo base_url()."/".$cat."/1"?>"><i class="material-icons">chevron_left</i></a></li>
							<?php if ($page - 4 >= 1): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page - 4)?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active wetAsphalt"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page + 3)?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($page + 4)?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li  class="waves-effect"><a href="<?php echo base_url()."/".$cat."/".($pages) ?>"><i class="material-icons">chevron_right</i></a></li>

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





	<script>
  function show_reply(id) {
          var htmlContent = '<div class="media-body">' +
              '                                <form method="post" onsubmit="return false;">' +
              '                                    <h5 class="media-heading"><?php echo trans('insert_reply') ?></h5>'+
              '                                    <div class="summernote'+id+'"></div>' +
              '                                    <div class="form-group account-btn text-center m-t-10 m-b-0">' +
              '                                        <div class="col-xs-12">' +
              '                                            <button onclick="insert_reply(' + id + ')" class="btn w-lg btn-rounded btn-lg btn-custom waves-effect waves-light" onclick="add_post()" type="submit">Post</button>' +
              '                                        </div>' +
              '                                    </div>' +
              '                                </form>' +
              '                            </div>';
          $("#comment_"+id).html(htmlContent);
          $("#reply_ref_"+id).hide();

          $('.summernote'+id).summernote({
              height: 150,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: false,             // set focus to editable area after initializing summernote
              toolbar: [
                  ['font', ['bold', 'italic', 'underline', 'clear']],
                  ['para', ['ul', 'ol', 'paragraph']],
              ],
          });
      }





  function openModal() {


    document.getElementById(text).style.width = "100%";
}
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
		location.href = "<?php echo base_url()?>"+ to

		}
	</script>
