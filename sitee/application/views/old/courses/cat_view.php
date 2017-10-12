<?php $this->load->view('common/header'); ?>

<div class="card-box ribbon-box col-md-10">
    <div class="clearfix"></div>
    <div class="inbox-widget autohide-scroll" style="height: 400px;">

        <?php foreach ($sub_cats as $cat) { ?>

            <a href="<?php echo base_url() . "course/$cat->ID/0" ?>">
                <div class="col-md-12">
                    <div class="member-card-alt">
                        <div class="thumb-xl member-thumb m-b-10 pull-left">
                            <img src="<?php echo base_url() . "uploads/freecourses/$cat->thumb" ?>"
                                 class="img-thumbnail">
                        </div>

                        <div class="member-card-alt-info">
                            <h4 class="m-b-5 m-t-0" style="padding-top: 20px"><?php echo $cat->SubCategoryName ?></h4>

                            <p class="text-muted font-13">
                                <?php echo substr($cat->course_info, 0, 100)." ..." ?>
                            </p>
                        </div>

                    </div>
                </div>

            </a>
        <?php } ?>


    </div>
</div>




<?php $this->load->view('common/footer'); ?>
