<?php $this->load->view('common/header'); ?>
    <link href="<?php echo base_url() ?>assets/plugins/summernote/summernote.css" rel="stylesheet"/>
<div class="row">
    <div class="col-md-8">
        <div class="card-box" style="padding: 0;">

            <!-- 16:9 aspect ratio -->
            <div id="player"></div>
            <div id="fb-root"> </div>

        </div>
        <div class="fb-share-button"
             data-href="<?php echo base_url().'course/'.$id; ?>"
             data-layout="button_count">
        </div>
        <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30"></h4>

            <ul class="nav nav-tabs tabs-bordered">
                <li class="active" id="lect-tab">
                    <a href="#lect-b1" data-toggle="tab" aria-expanded="true">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs"><?php echo trans('lecturer') ?></span>
                    </a>
                </li>
                <li class="" id="extra-tab">
                    <a href="#extra-b1" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-user"></i></span>
                        <span class="hidden-xs"><?php echo trans('extra_sources')?></span>
                    </a>
                </li>
                <li class=""  id="desc-tab">
                    <a href="#desc-b1" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                        <span class="hidden-xs"><?php echo trans('description') ?></span>
                    </a>
                </li>
                <li class="" id="course-tab">
                    <a href="#course-b1" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                        <span class="hidden-xs"><?php echo trans('course_info') ?></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="lect-b1">

                    <div class="row">
                        <div class="section-module">
                            <div class="col-sm-2 col-md-3 col-lg-2 course-meta">
                                <div class="thumb-xl member-thumb m-b-10 pull-left">
                                    <img  class="img-thumbnail" src="<?php echo base_url("uploads/freecourses/$list_row->lec_thumb") ?>">
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-8 course-description" role="contentinfo">
                                <?php echo $about_lec ?>
                            </div>

                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="thumb-xl member-thumb m-b-10 pull-right" >
                                    <img src="<?php echo base_url("uploads/freecourses/$list_row->lec_thumb") ?>" class="img-thumbnail">
                                </div>
                            </div>

                        </div>
                            <?php /*<div class="member-card-alt">
                                <div class="thumb-xl member-thumb m-b-10 pull-left">
                                    <img src="<?php echo base_url("uploads/freecourses/$list_row->lecture") ?>" class="img-thumbnail">
                                </div>

                                <div class="member-card-alt-info">
                                    <h5 class="m-b-0 m-t-0"><?php echo $about_lec ?></h5>

                                </div>

                            </div> */ ?>

                    </div>
                </div>
                <div class="tab-pane" id="extra-b1">
                    <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-7">
                           <?php echo $list_row->attach ?>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-5 pull-right">
                            <div class="file-man-box" style="border: 0;">
                                <div class="file-img-box">
                                    <img src="<?php echo base_url() ?>assets/images/file_icons/zip.svg" alt="icon">
                                </div>
                                <a href="<?php echo base_url("download_attach/$id") ?>" class="file-download"><i class="mdi mdi-download"></i> </a>
                                <div class="file-man-title">
                                    <h5 class="m-b-0 text-overflow"><?php echo $list_row->attach ?></h5>
                                    <p class="m-b-0"><small></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo $extra_source ?>
                </div>
                <div class="tab-pane" id="desc-b1">
                    <?php echo $video['description'] ?>
                </div>
                <div class="tab-pane" id="course-b1">
                    <?php echo $course_info ?>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h4 class="m-t-0 header-title"><b><?php echo trans('comments') ?></b></h4>
            <div>
                <?php foreach ($comments as $comment) { ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="#"> <img class="media-object img-circle"
                                              src="<?php echo $comment['poster_img'] ?>" style="width: 64px; height: 64px;">
                            </a>
                        </div>
                        <div class="media-body">
                            <h5 class="media-heading"><?php echo $comment['poster'] ?></h5>
                            <?php echo $comment['comment'] ?>
                        </div>
                    </div>
                <?php }  ?>

                <div class="media">
                    <div class="media-left">
                        <a href="#"> <img class="media-object img-circle" alt="64x64"
                                          src="assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Media heading</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                        ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at,
                        tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                        fringilla. Donec lacinia congue felis in faucibus.
                        <div class="media">
                            <div class="media-left">
                                <a href="#"> <img class="media-object img-circle" alt="64x64"
                                                  src="assets/images/users/avatar-3.jpg"
                                                  style="width: 64px; height: 64px;"> </a>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading">Nested media heading</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                scelerisque ante sollicitudin commodo. Cras purus odio,
                                vestibulum in vulputate at, tempus viverra turpis. Fusce
                                condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                congue felis in faucibus.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-md-4">
        <div class="card-box ribbon-box">
            <div class="ribbon ribbon-primary"><?php echo trans('course_dets') ?></div>
            <div class="clearfix"></div>
            <div class="inbox-widget">
                <div class="mail-list  m-t-20">
                    <a href="#" class="list-group-item b-0">
                        <i class="mdi mdi-currency-usd font-18 vertical-middle m-r-10 success"></i>
                        <b><?php echo $price ? $price." S.P" : trans('free_course') ?></b>
                    </a>
                    <a href="#" class="list-group-item b-0">
                        <i class="mdi mdi mdi-filmstrip font-18 vertical-middle m-r-10"></i>
                        <?php echo $res_num." ".trans('videos') ?>
                    </a>
                    <a href="#" class="list-group-item b-0">
                        <i class="mdi mdi mdi-translate font-18 vertical-middle m-r-10"></i>
                        <?php echo $lang; ?>
                    </a>
                    <a href="#" class="list-group-item b-0">
                        <i class="mdi mdi mdi mdi-clock-fast font-18 vertical-middle m-r-10"></i>
                        <?php echo substr($updated, 0, 10); ?>
                    </a>
                    <a href="#" class="list-group-item b-0">
                        <i class="mdi mdi mdi mdi-clock font-18 vertical-middle m-r-10"></i>
                        <?php echo $duration; ?>
                    </a>
                </div>

            </div>
        </div>
        <div class="card-box ribbon-box">
            <div class="ribbon ribbon-primary"><?php echo trans('list_items') ?></div>
            <div class="clearfix"></div>
            <div class="inbox-widget autohide-scroll" style="height: 400px;">

                <?php foreach ($list as $vid) { ?>

                    <a href="<?php echo base_url() . "course/$id/" . $vid['vid_id'] ?>">
                        <div class="col-md-12">
                            <div class="member-card-alt">
                                <div class="thumb-xl member-thumb m-b-10 pull-left">
                                    <img src="<?php echo $vid['thumbnails'] ?>" class="img-thumbnail">
                                </div>

                                <div class="member-card-alt-info">
                                    <h4 class="m-b-5 m-t-0"><?php echo $vid['title'] ?></h4>

                                    <p class="text-muted font-13">

                                    </p>
                                </div>

                            </div>
                        </div>

                    </a>
                <?php } ?>


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
<script src="<?php echo base_url() ?>assets/pages/jquery.scrollbar.js" type="text/javascript"></script>
<?php $this->load->view('common/logsources'); ?>