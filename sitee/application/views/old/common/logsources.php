
<script src="<?php echo base_url() ?>assets/plugins/summernote/summernote.min.js"></script>
<script src="<?php echo base_url() ?>assets/pages/jquery.scrollbar.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 150,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false,             // set focus to editable area after initializing summernote
            toolbar: [
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
            ],
        });

        $('.summernote1').summernote({
            height: 100,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false,             // set focus to editable area after initializing summernote
            toolbar: [
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
            ],
        });

        $('.inline-editor').summernote({
            airMode: true
        });

        $(".note-codable").attr("id", "post_body");

        $(".panel-body").blur(function () {
            $(".note-codable").val($(".panel-body").html());
            // alert($(".panel-body").html());
        });
    });

    function insert_comment() {
        var comment = $('.summernote1').summernote('code');
        $.post(
            '<?php echo base_url('insert_comment/' . $post_id) ?>',
            { comment: comment },
            function (data) {
                if (data) {
                    swal({
                        title: '<?php echo trans('success'); ?>',
                        text: '<?php echo trans('comment_added'); ?>',
                        type: 'success',
                        timer: 6000,
                        showConfirmButton: true
                    });
                    $('.summernote1').summernote('reset');
                    var con = '<div class="media">' +
                        '<div class="media-left">' +
                        '<a href="#"> <img class="media-object img-circle" src="assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;"></a>'+
                        '</div>'+
                        '<div class="media-body">'+
                        '<h5 class="media-heading"><?php echo $this->session->userdata('username') ?></h5>'+
                        comment+
                        '</div>'+
                        '</div>';
                    /*<div class="media">
                     <div class="media-left">
                     <a href="#"> <img class="media-object img-circle" src="" style="width: 64px; height: 64px;">
                     </a>
                     </div>
                     <div class="media-body">
                     <h5 class="media-heading"><?php echo $this->session->userdata('username') ?></h5>
                     '+comment+'
                     </div>
                     </div>*/
                    $("#comments_con").append(con);
                } else {
                    swal({
                        title: '<?php echo trans('fail'); ?>',
                        text: '<?php echo trans('comment_not_added'); ?>',
                        type: 'error',
                        timer: 6000,
                        showConfirmButton: true
                    });
                };
            }
        );

    }

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

    function insert_reply(id) {
        var comment = $('.summernote' + id).summernote('code');
        $.post(
            '<?php echo base_url('insert_reply/') ?>' + id,
            { comment: comment },
            function (data) {
                if (data) {
                    swal({
                        title: '<?php echo trans('success'); ?>',
                        text: '<?php echo trans('comment_added'); ?>',
                        type: 'success',
                        timer: 6000,
                        showConfirmButton: true
                    });
                    $('.summernote1').summernote('reset');
                    var con = '<div class="media">' +
                        '<div class="media-left">' +
                        '<a href="#"> <img class="media-object img-circle" src="assets/images/users/avatar-2.jpg" style="width: 64px; height: 64px;"></a>'+
                        '</div>'+
                        '<div class="media-body">'+
                        '<h5 class="media-heading"><?php echo $this->session->userdata('username') ?></h5>'+
                        comment+
                        '</div>'+
                        '</div>';
                    $("#comm_" + id).append(con);
                } else {
                    swal({
                        title: '<?php echo trans('fail'); ?>',
                        text: '<?php echo trans('comment_not_added'); ?>',
                        type: 'error',
                        timer: 6000,
                        showConfirmButton: true
                    });
                };
            }
        );

    }

    function add_post() {
        //e.preventDefault();
        title = document.getElementById("title").value;
        post = document.getElementById('post_body').value;
        console.log(post);
        $.post(
            '<?php echo base_url('insert_post/' . $id) ?>',
            {
                title: title,
                post_body: post
            },
            function (data) {
                res = JSON.parse(data);
                console.log(res);
                if (res[0]) {
                    document.getElementById("ltitle").innerHTML = '<?php echo trans('post_title') ?>';
                    document.getElementById("lpost_body").innerHTML = '<?php echo trans('post_body') ?>';

                    document.getElementById("title").value = '';
                    document.getElementById("post_body").value = '';

                    d = document.getElementById("dtitle");
                    d.className = "form-group has-success";

                    d = document.getElementById("dpost_body");
                    d.className = "form-group has-success";

                    title = '<?php echo trans('success'); ?>';
                    text = '<?php echo trans('post_added'); ?>';
                    type = 'success';
                    swal({
                        title: title,
                        text: text,
                        type: type,
                        timer: 6000,
                        showConfirmButton: true
                    });
                    $('#new_post-modal').modal('hide');
                }
                ;

                if (!res[0] && res[1]['error']) {

                    title = '<?php echo trans('fail'); ?>';
                    text = '<?php echo trans('post_not_added'); ?>';
                    type = 'success';
                    swal({
                        title: title,
                        text: text,
                        type: error,
                        timer: 6000,
                        showConfirmButton: true
                    });
                }
                ;

                if (!res[0] && !res[1]['error']) {
                    errors = res[1];
                    if (errors['title']) {
                        d = document.getElementById("dpost_body");
                        d.className += " has-error";
                        document.getElementById("lpost_body").innerHTML = errors['post_body'];
                    } else {
                        d = document.getElementById("dpost_body");
                        d.className = "form-group has-success";
                        document.getElementById("lpost_body").innerHTML = '<?php echo trans('post_body') ?>';
                    }
                    ;
                    if (errors['post_body']) {
                        d = document.getElementById("dpost_body");
                        d.className += " has-error";
                        document.getElementById("lpost_body").innerHTML = errors['post_body'];
                    } else {
                        d = document.getElementById("dpost_body");
                        d.className = "form-group has-success";
                        document.getElementById("lpost_body").innerHTML = '<?php echo trans('post_body') ?>';
                    }
                    ;
                }
                ;
            }
        );
    }

</script>