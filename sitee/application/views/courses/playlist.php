<?php $this->load->view('common/header'); ?>


<nav class="grey lighten-2">
    <div class="nav-wrapper container">
        <ul class="<?php echo lang()=='en'? '' : 'right' ?> hide-on-med-and-down">
            <li><a href="<?php echo base_url("quiz/$id") ?>" class="grey-text text-darken-4"><?php echo trans('licenses') ?></a></li>
            <li><a href="<?php echo base_url("repeated_questions/$id") ?>" class="grey-text text-darken-4"><?php echo trans('repeated_questios') ?></a></li>
            <li><a href="<?php echo base_url("discussion/$id") ?>" class="grey-text text-darken-4"><?php echo trans('discuss_area') ?></a></li>
            <li><a href="#course__info" class="grey-text text-darken-4"><?php echo trans('course_content') ?></a></li>
        </ul>
    </div>
</nav>

<div class="container">

    <h3 class="<?php echo lang()=='en'? '' : 'right' ?>-align wetAsphalt-text"><?php echo LANG()=='en'? $courcename_en : $courcename  ?> </h3>
    <div class="row">
        <div class="col l4 s12 <?php echo lang()=='en'? 'right' : '' ?>">

            <div class="card">
                <div class="card-content <?php echo lang()=='en'? '' : 'right' ?>-align">
                    <div class="sec-head">
                  <p><?php echo trans('course_dets') ?></p>
                    </div>

                    <ul class="collapsible z-depth-0 collapsible-border">
                        <li>

                            <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">attach_money</i><?php echo $price ? $price." S.P" : trans('free_course') ?></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">subscriptions</i><?php echo $res_num." ".trans('videos') ?></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">sync</i><?php echo substr($updated, 0, 10); ?></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">timer</i><?php echo $duration; ?></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">translate</i><?php echo $lang; ?></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-content <?php echo lang()=='en'? '' : 'right' ?>-align">
                    <div class="sec-head">
                      <p><?php echo trans('list_items') ?></p>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for lecture.."></textarea>
                    </div>


                    <ul id="myUL">
                      <?php foreach ($list as $vid) { ?>

                          <li>  <a href="<?php echo base_url() . "course/$id/" . $vid['vid_id'] ?>">
                            <?php echo $vid['title'] ?>
                          </a></li>
                      <?php } ?>


                    </ul>
                </div>
            </div>
        </div>

        <div class="col l8" style="margin-top: 8px;">

          <div id="player"></div>



            <div class="container-course">
                <ul class="tabs midnightBlue tabs-fixed-width">
                    <li class="tab col s3"><a class="white-text active" href="#about"><?php echo trans('lecturer') ?></a></li>
                    <li class="tab col s3"><a class="white-text" href="#extra_resources"><?php echo trans('extra_sources')?></a></li>
                </ul>

                <div id="about" class="col s12 white z-depth-2">
                    <div class="row">

                        <div class="col l3">
                            <img src="<?php echo base_url("uploads/freecourses/$list_row->lec_thumb") ?>" class="responsive-img" style="margin-top: 20px">
                        </div>

                        <div class="col l6">
                            <h4 class="<?php echo lang()=='en'? '' : 'right' ?>-align wetAsphalt-text"><?php echo trans('lecturer') ?></h4>
                            <p class="<?php echo lang()=='en'? '' : 'right' ?>-align">
                                <?php echo $about_lec ?>
                            </p>
                            <div class="<?php echo lang()=='en'? '' : 'right' ?>-align">
                                <a class="btn btn-social-icon btn-facebook">
                                    <span class="fa fa-facebook"></span>
                                </a>
                                <a class="btn btn-social-icon btn-twitter">
                                    <span class="fa fa-twitter"></span>
                                </a>
                                <a class="btn btn-social-icon btn-google">
                                    <span class="fa fa-google-plus"></span>
                                </a>
                                <a class="btn btn-social-icon btn-linkedin">
                                    <span class="fa fa-linkedin"></span>
                                </a>
                            </div>
                        </div>

                        <div class="col l3">
                            <img src="<?php echo base_url("uploads/freecourses/$list_row->lec_thumb") ?>" class="responsive-img" style="margin-top: 20px">
                        </div>
                    </div>
                </div>

                <div id="extra_resources" class="col s12 white z-depth-2">
                    <div class="row">

                        <div class="col l12">
                            <ul class="collection no-border">
                                <li class="collection-item avatar">
                                    <i class="material-icons circle">folder</i>
                                    <span class="title"><?php echo $list_row->attach ?></span>
                                    <p>33 mg</p>

                                    <a href="<?php echo base_url("download_attach/$id") ?>" class="secondary-content tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download File"><i class="material-icons small grey-text text-darken-1">file_download</i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div><!-- end  -->
        </div>


        <div class="col l8">
            <div class="card" id="course__info">
                <div class="card-content <?php echo lang()=='en'? '' : 'right' ?>-align">
                    <h4 class="<?php echo lang()=='en'? '' : 'right' ?>-align midnightBlue-text"><?php echo trans('description') ?></h4>
                    <p class="<?php echo lang()=='en'? '' : 'right' ?>-align wetAsphalt-text">
                        <?php echo $video['description'] ?>
                   </p>
                </div>
            </div>
        </div>
        <div class="col l8">
            <div class="card" id="course__info">
                <div class="card-content <?php echo lang()=='en'? '' : 'right' ?>-align">
                    <h4 class="<?php echo lang()=='en'? '' : 'right' ?>-align midnightBlue-text"><?php echo trans('course_info') ?></h4>
                    <p class="<?php echo lang()=='en'? '' : 'right' ?>-align wetAsphalt-text">
                         <?php echo $course_info ?>
                   </p>
                </div>
            </div>
        </div>


        <div class="col l12">
             <div class="row <?php echo lang()=='en'? '' : 'right' ?>-align">
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">Art</span>
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">Design</span>
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">illustartor</span>
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">Art</span>
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">Design</span>
                 <span class="label-course tag-course <?php echo lang()=='en'? '' : 'right' ?>">illustartor</span>
             </div>
        </div>

    </div>

</div>


<script src="https://content.jwplatform.com/libraries/LtJZ3pc8.js"></script>

<script type="text/javascript">
    var playerInstance = jwplayer("player");
    playerInstance.setup({
        file: "https://www.youtube.com/watch?v=<?php echo $vid_id ?>",
        width: '100%',
        height: '100%',
        image: '<?php echo $video['img'] ?>'
    });

</script>


<?php $this->load->view('common/footer'); ?>
<script src="<?//php echo base_url() ?>/pages/jquery.scrollbar.js" type="text/javascript"></script>
<?php //$this->load->view('common/logsources'); ?>
