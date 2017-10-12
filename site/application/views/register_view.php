
<?php $this->load->view('common/header_view') ?>
<div class="contactform col-md-12" style="margin-top: 120px; <?php echo LANG() == 'en' ? '' : 'text-align: right' ?>">
	<h2 class="title"><?php echo trans('register') ?></h2>
	<p><?php echo trans('register_desc') ?></p>
	<form method="post" action="<?php echo base_url()."register" ?>">
	  <div class="row">
	    <div class="col-md-6">
	      <?php echo form_error('name') ? "<label for='name' style='color: red'>".form_error('name')."</label>" : '' ?>
	      <input class="input4" name="name" id="name" value="" placeholder="<?php echo trans('name') ?>*" data-validation="required">
	      <?php echo form_error('l_name') ? "<label for='l_name' style='color: red'>".form_error('l_name')."</label>" : '' ?>
	      <input class="input4" name="l_name" id="l_name" value="" placeholder="<?php echo trans('l_name') ?>*" data-validation="required">
	      <?php echo form_error('phone') ? "<label for='phone' style='color: red'>".form_error('phone')."</label>" : '' ?>
	      <input class="input4" name="phone" id="phone" value="" placeholder="<?php echo trans('phone') ?>*" data-validation="required">
	      <?php echo form_error('email') ? "<label for='email' style='color: red'>".form_error('email')."</label>" : '' ?>
	      <input class="input4" name="email" id="email" value="" placeholder="<?php echo trans('email') ?>*" data-validation="email">
	      <?php echo form_error('gender') ? "<label for='gender' style='color: red'>".form_error('gender')."</label>" : '' ?>
	      <select class="input4" name="gender" id="gender" value="" placeholder="<?php echo trans('gender') ?>*" data-validation="required">
	      	<option selected=""><?php echo trans('choose_gender') ?></option>
	      	<option value="m"><?php echo trans('male') ?></option>
	      	<option value="f"><?php echo trans('female') ?></option>
	      </select>
	      
	    </div>
	    
	    <div class="col-md-6">
	      <?php echo form_error('username') ? "<label for='username' style='color: red'>".form_error('username')."</label>" : '' ?>
	      <input class="input4" name="username" id="username" value="" placeholder="<?php echo trans('username') ?>*">
	      <?php echo form_error('password') ? "<label for='password' style='color: red'>".form_error('password')."</label>" : '' ?>
	      <input class="input4" name="password" id="password" value="" placeholder="<?php echo trans('password') ?>*" data-validation="required">
	      <?php echo form_error('pass_conf') ? "<label for='pass_conf' style='color: red'>".form_error('pass_conf')."</label>" : '' ?>
	      <input class="input4" name="pass_conf" id="pass_conf" value="" placeholder="<?php echo trans('pass_conf') ?>*" data-validation="required">
	      <?php echo form_error('address') ? "<label for='address' style='color: red'>".form_error('address')."</label>" : '' ?>
	      <input class="input4" name="address" id="address" value="" placeholder="<?php echo trans('address') ?>*" data-validation="required">
	     <!-- <?php echo form_error('zip') ? "<label for='zip' style='color: red'>".form_error('zip')."</label>" : '' ?>
	      <input class="input4" name="zip" id="zip" value="" placeholder="<?php echo trans('zipcode') ?>*" data-validation="required">-->
	    </div>
	  </div>
	  <div class="row">
	    <div class="col-md-12">
	      <button class="btn large color2 pull-right" type="submit"><?php echo trans('register') ?></button>
	    </div>
	  </div>
	</form>
</div>

</div>
  </div>
  </div>
  </div>
<?php $this->load->view('common/footer_view') ?>