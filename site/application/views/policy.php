<?php $this->load->view('common/header_view') ?>
<div class="row clearfix f-space10"></div>
<div class="container">
  <div class="row">
  	<?php $i=0; foreach ($policy as $row) {
  		//echo "$policy[title_ar]" ?>
  <div class="col-md-12">
      <div class="page-title">
        <h2><?php echo LANG() == 'en' ? $row->title : $row->title_ar ?></h2>
      </div>
    </div>
    <?php  } ?>
</div>
</div>
<div class="row clearfix f-space10"></div>
<div class="container">
    
	<div class="about-company-container col-lg-12">
		<p style="direction: inherit; "><?php   echo LANG() == 'en' ? $row->content :$row->contan_ar?> </p>
	</div>
</div>
<div class="row clearfix f-space20"></div>
   <?php $this->load->view('common/footer_view') ?>
   
