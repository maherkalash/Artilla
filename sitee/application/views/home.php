


<?php $this->load->view('common/header');
//echo "<pre>";
//print_r($main_active); exit;
 ?>

<div class="container">

    <div class="row mar-top ">
      <?php
      $default='<div class="col l3 container-text">
            <img class="responsive-img introThumbnail brightness radius-img" src="http://127.0.0.1/final/sitee/assets/imgs/editing.png">
            <div class="centered introThumbnail-text">Editing</div>
        </div>';

      $defaulta='<div class="col l6 container-text">
          <img class="responsive-img brightness radius-img" src="http://127.0.0.1/final/sitee/assets/imgs/design.jpg">
          <div class="centered" style="font-size: 5rem">Design</div>
      </div>';

       if (isset($main_active[0])) { ?>
        <div class="col l6 container-text">
            <a style="color: #ffffff;" href="<?php echo base_url()."category/".$main_active[4]->CategoryID ?>">
            <img class="responsive-img brightness radius-img" src="<?php echo base_url()."uploads/catigories/".$main_active[0]->thumb ?>">
            <div class="centered" style="font-size: 5rem"><?php echo LANG() == 'en' ? $main_active[0]->CategoryName_en : $main_active[0]->CategoryName; ?></div>
            </a>
        </div>
      <?php } else { ?>
          <?php echo $defaulta ?>
      <?php } ?>
      <?php  if (isset($main_active[1])) { ?>
        <div class="col l3 container-text">
            <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url()."uploads/catigories/".$main_active[1]->thumb ?>">
            <div class="centered introThumbnail-text"><?php echo LANG() == 'en' ? $main_active[1]->CategoryName_en : $main_active[1]->CategoryName; ?></div>
        </div>


        <?php } else { ?>

                  <?php echo $default ?>

        <?php } ?>
        <?php  if (isset($main_active[2])) { ?>
          <div class="col l3 container-text">
              <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url()."uploads/catigories/".$main_active[2]->thumb ?>">
              <div class="centered introThumbnail-text"><?php echo LANG() == 'en' ? $main_active[2]->CategoryName_en : $main_active[2]->CategoryName; ?></div>
          </div>


          <?php } else { ?>

                    <?php echo $default ?>

          <?php } ?>

          <?php  if (isset($main_active[3])) { ?>
            <div class="col l3 container-text">
                <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url()."uploads/catigories/".$main_active[3]->thumb ?>">
                <div class="centered introThumbnail-text"><?php echo LANG() == 'en' ? $main_active[3]->CategoryName_en : $main_active[3]->CategoryName; ?></div>
            </div>


            <?php } else { ?>

                      <?php echo $default ?>

            <?php } ?>
            <?php  if (isset($main_active[1])) { ?>
              <div class="col l3 container-text">
                  <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url()."uploads/catigories/".$main_active[4]->thumb ?>">
                  <div class="centered introThumbnail-text"><?php echo LANG() == 'en' ? $main_active[4]->CategoryName_en : $main_active[4]->CategoryName; ?></div>
              </div>


              <?php } else { ?>

                        <?php echo $default ?>

              <?php } ?>
    </div>
    <div class="row">
      <?php if(lang()=='en'){ ?>

        <div class="card-panel wetAsphalt col l10" style="height: 54px;">
            <h5 class="white-text <?php echo lang()=='en'? '' : ' right-align' ?>"><?php echo trans('join') ?></h5>
        </div>
        <div class="col l2">
            <a class="waves-effect waves-light btn pink lighten-2 btn-large" style="margin-top: 8px;"><?php echo trans('create') ?></a>
        </div>
      <?php  }else {?>
        <div class="col l2">
            <a class="waves-effect waves-light btn pink lighten-2 btn-large" style="margin-top: 8px;"><?php echo trans('create') ?></a>
        </div>
        <div class="card-panel wetAsphalt col l10" style="height: 54px;">
            <h5 class="white-text <?php echo lang()=='en'? '' : ' right-align' ?>"><?php echo trans('join') ?></h5>
        </div>
    <?php   }?>
    </div>

    <div class="row">
        <h4 class=" col l12 <?php echo lang()=='en'? 'left' : 'right' ?>-align ques-intro wetAsphalt-text">
          <?php echo lang()=='en'? trans('how_can') : '' ?>
            <i class="fa fa-question-circle-o pink-text text-lighten-2" aria-hidden="true"></i>
            <?php echo lang()=='en'?'' : trans('how_can') ?>

        </h4>
        <div class="col l3">
            <div class="card-panel center-align">
                <i class="fa fa-apple fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">الطلاب</>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-bitbucket fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">الطلاب</h4>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-bluetooth fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">الطلاب</h4>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-amazon fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">الطلاب</h4>
            </div>
        </div>

    </div>

    <div class="row">
        <h4 class=" col l12 <?php echo lang()=='en'? 'left' : 'right' ?>-align ques-intro wetAsphalt-text">
          <?php echo lang()=='en'? trans('what_in') : '' ?>
            <i class="fa fa-question-circle-o pink-text text-lighten-2" aria-hidden="true"></i>
            <?php echo lang()=='en'?'' : trans('what_in') ?>
        </h4>
        <div class="col l3">
            <div class="card-panel center-align">
                <i class="fa fa-android fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">تصميم</h4>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-btc fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">مونتاج</h4>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-codepen fa-5x wetAsphalt-text " aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">تعديل</h4>
            </div>
        </div>
        <div class="col l3 center-align">
            <div class="card-panel">
                <i class="fa fa-edge fa-5x wetAsphalt-text" aria-hidden="true"></i>
                <h4 class="pink-text text-lighten-2">رسم</h4>
            </div>
        </div>

    </div>

</div>

<div class="col l12">
    <div class="card-panel">
        <div class="container">
            <h5 class="center-align wetAsphalt-text"><?php echo trans('subscribee'); ?>  </h5>
            <div class="row">

                <div class="row">
                  <form class="form-horizontal" role="form" method="post"
                        action="<?php echo base_url() . "send_email" ?>">
                    <div class="input-field col s6">
                        <input  type="text" placeholder="Name">
                    </div>
                    <div class="input-field col s6">
                        <input  type="tel" class="validate" placeholder="Email">
                    </div>
                </div>
                <div class="col l12">
                    <a class="waves-effect waves-light btn pink lighten-2 btn-large <?php echo lang()=='en'? 'right' : '' ?>" style="margin-top: 8px;"><?php echo trans('subscribe'); ?></a>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $this->load->view('common/footer'); ?>
