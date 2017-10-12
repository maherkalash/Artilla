<?php $this->load->view('common/header'); ?>







    <div class="container">
      <?php foreach ($sub_cats as $cat) { ?>


        <div class="container-fluid">
            <div class="card horizontal">
                <div class="card-image">
                  <a href="<?php echo base_url() . "course/$cat->ID/0" ?>">
                    <img src="<?php echo base_url() . "uploads/freecourses/$cat->thumb"?>" alt="" class="responsive-img"/>
                    </a>
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <span class="card-title wetAsphalt-text"><?php echo LANG()=='en'? $cat->SubCategoryName_en :  $cat->SubCategoryName ?></span>
                        <p class="grey-text">
                        <?php echo substr($cat->course_info, 0, 100)." ..." ?>
                        </p>
                    </div>
                    <div class="card-action">
                        <a class="btn pink lighten-2 right" href="<?php echo base_url() . "course/$cat->ID/0" ?>">التسجيل في الدورة</a>
                        <a class="btn-flat midnightBlue-text left " href="#"><?php echo LANG()=='en'? $cat->lecture :  $cat->lecture ?></a>
                    </div>
                </div>
            </div>
        </div>
          <?php } ?>
    </div>




<?php $this->load->view('common/footer'); ?>
