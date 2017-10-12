<?php $this->load->view('common/header');
print_r($main_active); exit;

?>




    <div class="row">
        <div class="col-md-12">
            <!-- START carousel-->
            <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">

                <div role="listbox" class="carousel-inner">
              		<?php $i =  0; foreach ($sliders as $one) { ?>
                        <div class="item <?php echo $i == 0 ? 'active' : ''; $i++; ?>">
                            <img src="<?php echo base_url()."uploads/sliders/$one->img" ?>" alt="">
                            <div class="carousel-caption">
                                <h3 class="text-white font-600"><?php echo LANG() == 'en' ? $one->title_en : $one->title_ar ?></h3>
                                <p>
                                    <?php echo LANG() == 'en' ? $one->desc_en : $one->desc_ar ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>




                </div>
                <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
            </div>
            <!-- END carousel-->
        </div>


    </div>

                <!-- end row -->




<div class="row">
    <div class="col-sm-12">
        <div class="card-box" style="padding: 0; background-color: #f1f1f1;">
            <center><h1>New courses</h1></center>
        </div>
    </div>
</div>
<?php $default = '<div class="card-box" style="padding: 0;">
                    <img src="assets/images/small/img-3.jpg" class="headimg img-responsive img-rounded">
                    <div class="middle-text">
                        <a href="#" class="headimg">
                            <div class="img-text"><i>
                                    <img class="thumb-md" src="'. base_url().'assets/images/play.png"/></i> Doe
                            </div>
                        </a>
                    </div>
                </div><!-- end col -->'; ?>

<div class="row">
        <div class="col-sm-6">
            <?php if (isset($main_active[0])) { ?>
                <div class="card-box" style="padding: 0;">
                    <img src="<?php echo base_url()."uploads/catigories/".$main_active[0]->thumb ?>" class="headimg img-responsive img-rounded">
                    <div class="middle-textone">
                        <a href="<?php echo base_url()."category/".$main_active[0]->CategoryID ?>" class="headimg">
                            <div class="img-textone"><i>

                                <?php echo LANG() == 'en' ? $main_active[0]->CategoryName_en : $main_active[0]->CategoryName; ?>
                            </div>
                        </a>
                    </div>
                      <div class="middle-text">
              		  <a href="<?php echo base_url()."category/".$main_active[0]->CategoryID ?>" class="headimg">

                    <div class="img-text"><i><img class="thumb-md" src="<?php echo base_url() ?>assets/images/play.png"/></i> preview
                    </div>
                </a>
            </div>
          </div>
          <!-- end col -->



            <?php } else { ?>
                <?php echo $default ?>
            <?php } ?>
</div>

    <div class="col-md-6">
        <div class="row">
              <?php  if (isset($main_active[1])) { ?>
                <div class="col-sm-6">
                    <div class="card-box" style="padding: 0;">
                        <img src="<?php echo base_url()."uploads/catigories/".$main_active[1]->thumb ?>" class="headimg img-responsive img-rounded">
                         <div class="middle-textone">
                        <a href="<?php echo base_url()."category/".$main_active[1]->CategoryID ?>" class="headimg">
                            <div class="img-textone"><i>

                                <?php echo LANG() == 'en' ? $main_active[1]->CategoryName_en : $main_active[1]->CategoryName; ?>
                            </div>
                        </a>
                    </div>
                        <div class="middle-text">
                            <a href="<?php echo base_url()."category/".$main_active[1]->CategoryID ?>" class="headimg">
                                <div class="img-text"><i>
                                    <img class="thumb-md" src="<?php echo base_url() ?>assets/images/play.png"/></i>
                                  Preview
                                </div>
                            </a>
                        </div>
                    </div><!-- end col -->
                </div>
            <?php } else { ?>
                  <div class="col-sm-6">
                      <?php echo $default ?>
                  </div>
            <?php } ?>
       <?php  if (isset($main_active[2])) { ?>
                <div class="col-sm-6">
                    <div class="card-box" style="padding: 0;">
                        <img src="<?php echo base_url()."uploads/catigories/".$main_active[2]->thumb ?>" class="headimg img-responsive img-rounded">
                         <div class="middle-textone">
                        <a href="<?php echo base_url()."category/".$main_active[2]->CategoryID ?>" class="headimg">
                            <div class="img-textone"><i>

                                <?php echo LANG() == 'en' ? $main_active[2]->CategoryName_en : $main_active[2]->CategoryName; ?>
                            </div>
                        </a>
                    </div>
                        <div class="middle-text">
                            <a href="<?php echo base_url()."category/".$main_active[2]->CategoryID ?>" class="headimg">
                                <div class="img-text"><i>
                                    <img class="thumb-md" src="<?php echo base_url() ?>assets/images/play.png"/></i>
                                  Preview
                                </div>
                            </a>
                        </div>
                    </div><!-- end col -->
                </div>
            <?php } else { ?>
                <div class="col-sm-6">
                    <?php echo $default ?>
                </div>
            <?php } ?><!-- end col -->


        </div>
        <!-- end row -->
        <div class="row">


              <?php  if (isset($main_active[3])) { ?>
                <div class="col-sm-6">
                    <div class="card-box" style="padding: 0;">
                        <img src="<?php echo base_url()."uploads/catigories/".$main_active[3]->thumb ?>" class="headimg img-responsive img-rounded">
                         <div class="middle-textone">
                        <a href="<?php echo base_url()."category/".$main_active[3]->CategoryID ?>" class="headimg">
                            <div class="img-textone"><i>

                                <?php echo LANG() == 'en' ? $main_active[3]->CategoryName_en : $main_active[3]->CategoryName; ?>
                            </div>
                        </a>
                    </div>
                        <div class="middle-text">
                            <a href="<?php echo base_url()."category/".$main_active[3]->CategoryID ?>" class="headimg">
                                <div class="img-text"><i>
                                    <img class="thumb-md" src="<?php echo base_url() ?>assets/images/play.png"/></i>
                                  Preview
                                </div>
                            </a>
                        </div>
                    </div><!-- end col -->
                </div>
            <?php } else { ?>
                  <div class="col-sm-6">
                      <?php echo $default ?>
                  </div>
            <?php } ?>
              <?php  if (isset($main_active[4])) { ?>
                <div class="col-sm-6">
                    <div class="card-box" style="padding: 0;">
                        <img src="<?php echo base_url()."uploads/catigories/".$main_active[4]->thumb ?>" class="headimg img-responsive img-rounded">
                         <div class="middle-textone">
                        <a href="<?php echo base_url()."category/".$main_active[4]->CategoryID ?>" class="headimg">
                            <div class="img-textone"><i>

                                <?php echo LANG() == 'en' ? $main_active[4]->CategoryName_en : $main_active[4]->CategoryName; ?>
                            </div>
                        </a>
                    </div>
                        <div class="middle-text">
                            <a href="<?php echo base_url()."category/".$main_active[4]->CategoryID ?>" class="headimg">
                                <div class="img-text"><i>
                                    <img class="thumb-md" src="<?php echo base_url() ?>assets/images/play.png"/></i>
                                  Preview
                                </div>
                            </a>
                        </div>
                    </div><!-- end col -->
                </div>
            <?php } else { ?>
                <div class="col-sm-6">
                    <?php echo $default ?>
                </div>
            <?php } ?>
        </div>


    </div>


    <!-- end col -->

</div>


<div class="card-box" style="padding: 0; background-color: #f1f1f1; border: 0;">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">


                <button type="button" class="btn btn-info waves-effect waves-light m-t-10">أنضم الأن وابدأ التعلم حالا
                </button>

            </div>
        </div><!-- end col -->
    </div><!-- end row -->

</div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">


            <div class="row m-t-50">
                <div class="col-sm-4">
                    <div class="faq-box">
                        <img src="assets/images/faq_icons/shield-1.png" alt="icon" class="img-responsive center-block">
                        <h4>من يمكنة الاستفادة من المنصة?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <!--/col-sm-4 -->

                <div class="col-sm-4">
                    <div class="faq-box">
                        <img src="assets/images/faq_icons/envelope.png" alt="icon" class="img-responsive center-block">
                        <h4>ماذا تحوي المنصة?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <!--/col-sm-4 -->

                <div class="col-sm-4">
                    <div class="faq-box">
                        <img src="assets/images/faq_icons/edit.png" alt="icon" class="img-responsive center-block">
                        <h4>Why use Lorem Ipsum?</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                </div>
                <!--/col-sm-4 -->
            </div>
            <!-- end row -->


            <!-- end row -->


        </div>
    </div><!-- end col -->
</div>

<div class="card-box">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">

                <p class="text-muted"> اشترك الأن للحصول على نشرتنا الاسبوعيه للمواد التليمية <br/>
                    في الفنون
                    !</p>
                <form class="form-horizontal" role="form" method="post"
                      action="<?php echo base_url() . "send_email" ?>">
                    <div class="form-group">
                        <label for="inputname" class="col-sm-3 control-label"><?php echo trans('your_name') ?></label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" id="inputname"
                                   placeholder="<?php echo trans('your_name') ?>">
                        </div>
                    </div>
                    <input type="text" hidden name="token" value="<?php echo $token ?>">
                    <div class="form-group">
                        <label for="inputEmail3"
                               class="col-sm-3 control-label"><?php echo trans('email_address') ?></label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="inputEmail3"
                                   placeholder="<?php echo trans('email_address') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"><?php echo trans('subject') ?></label>
                        <div class="col-sm-6">
                            <input type="text" name="subject" class="form-control" id="subject"
                                   placeholder="<?php echo trans('subject') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"><?php echo trans('message') ?></label>
                        <div class="col-sm-6">
                            <textarea class="form-control" id="inputMessage" name="message" style="height: 200px"
                                      placeholder="<?php echo trans('message') ?>"></textarea>
                        </div>
                    </div>

                    <div class="form-group m-b-0">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit"
                                    class="btn btn-info waves-effect waves-light m-t-10"><?php echo trans('send_mail') ?>
                            </button>

                        </div>
                    </div>
                </form>


            </div>
        </div><!-- end col -->
    </div><!-- end row -->

</div>


<?php $this->load->view('common/footer'); ?>
