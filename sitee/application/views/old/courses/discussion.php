<?php $this->load->view('common/header'); ?>
<!-- Summernote css -->
<link href="<?php echo base_url() ?>assets/plugins/summernote/summernote.css" rel="stylesheet"/>


<div class="row">
    <div class="col-md-8">
        <div class="card-box">
            <h3><?php echo $post->title ?></h3>
            <p><?php echo trans('posted_by')." ".$post->poster ?></p>
            <p><?php echo $post->post ?></p>
        </div>

        <div class="card-box">
            <h4 class="m-t-0 header-title"><b><?php echo trans('comments') ?></b></h4>
            <div id="comments_con">
                <?php for ($i = 0; $i < $comments->num_rows(); $i++) { ?>
                    <?php $results = $comments->result();
                    if ($i == 0 || $results[$i]->comment_id != $results[$i - 1]->comment_id) { ?>
                    <div class="media">
                       <div class="media-left">
                            <a href="#"> <img class="media-object img-circle" alt="64x64"
                                              src="assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;">
                            </a>
                        </div>

                        <div class="media-body" id="comm_<?php echo $results[$i]->comment_id ?>">
                            <h5 class="media-heading"><?php echo $results[$i]->poster ?></h5>
                            <?php echo $results[$i]->comment ?>
                        <?php }  ?>
                        <?php if ($results[$i]->reply) { ?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"> <img class="media-object img-circle" alt="64x64"
                                                      src="assets/images/users/avatar-3.jpg"
                                                      style="width: 64px; height: 64px;"> </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading"><?php echo $results[$i]->poster ?></h5>
                                    <?php echo $results[$i]->reply ?>
                                </div>
                            </div>
                        <?php }  ?>
                        <?php if (isset($results[$i + 1]) && $results[$i]->comment_id != $results[$i + 1]->comment_id || $i == $comments->num_rows - 1) { ?>

                            <a id="reply_ref_<?php echo $results[$i]->comment_id ?>" href="#comment_<?php echo $results[$i]->comment_id ?>" onclick="show_reply(<?php echo $results[$i]->comment_id ?>)"><?php echo trans('reply') ?></a>
                            <div class="media" id="comment_<?php echo $results[$i]->comment_id ?>"></div>
                        </div>

                    </div>
                <?php } ?>
            <?php } ?>




            </div>
            <div class="media">

                <div class="media-body">
                    <form method="post" onsubmit="return false;">
                        <h5 class="media-heading"><?php echo trans('insert_comment') ?></h5>
                        <div class="summernote1"></div>
                        <div class="form-group account-btn text-center m-t-10 m-b-0">
                            <div class="col-xs-12">
                                <button onclick="insert_comment()" class="btn w-lg btn-rounded btn-lg btn-custom waves-effect waves-light" onclick="add_post()" type="submit">Post</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div> <!-- end col -->
    <div class="col-md-4">
        <div class="card-box ribbon-box">
            <div class="ribbon ribbon-primary"><?php echo trans('question_list') ?></div>
            <div class="clearfix"></div>
            <div class="inbox-widget autohide-scroll" style="height: 400px;">
                <?php foreach ($questions->result() as $row) { ?>
                    <a href="<?php echo base_url("discussion/$id/$row->post_id") ?>">
                        <div class="inbox-item">
                            <p class="inbox-item-author"><?php echo $row->title ?></p>
                            <p class="inbox-item-text"><i class="mdi mdi-account"></i> <?php echo $row->poster ?></p>
                            <p class="inbox-item-date m-t-10">
                                <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-success">
                                    <?php echo $row->comments_count ?>
                                </button>
                            </p>
                        </div>
                    </a>
                <?php } ?>

                <?php /*foreach ($list as $vid) { ?>

                    <a href="<?php echo base_url() . "course/$id/" . $vid['vid_id'] ?>">
                        <div class="col-md-12">
                            <div class="member-card-alt">
                                <div class="thumb-xl member-thumb m-b-10 pull-left">
                                    <img src="<?php echo $vid['thumbnails'] ?>" class="img-thumbnail">
                                </div>

                                <div class="member-card-alt-info">
                                    <h4 class="m-b-5 m-t-0"><?php echo $vid['title'] ?></h4>

                                    <p class="text-muted font-13">
                                        test
                                    </p>
                                </div>

                            </div>
                        </div>

                    </a>
                <?php }*/ ?>


            </div>
        </div>

    </div>


</div>


<?php $this->load->view('common/footer'); ?>
<?php $this->load->view('common/logsources'); ?>
