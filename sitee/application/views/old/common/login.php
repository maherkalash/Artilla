<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <div class="modal-body p-t-0">
                <h2 class="text-uppercase text-center m-b-30">
                    <a href="" class="text-success">
                        <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2>


                <form class="form-horizontal" onsubmit="return false" method="post" action="<?php echo base_url()."login" ?>">

                    <div class="form-group m-b-25" id="ldemail">
                        <div class="col-xs-12">
                            <label for="llemail" id="llemail"><?php echo trans('email') ?></label>
                            <input class="form-control" type="email" name="email" id="lemail" required="" placeholder="john@deo.com">
                        </div>
                    </div>

                    <div class="form-group m-b-25" id="ldpassword">
                        <div class="col-xs-12">
                            <a href="page-recoverpw.html" class="text-muted pull-right font-14">Forgot your password?</a>
                            <label for="llpassword" id="llpassword"><?php echo trans('password') ?></label>
                            <input class="form-control" name="lpassword" type="password" required="" id="lpassword" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="form-group account-btn text-center m-t-10 m-b-0">
                        <div class="col-xs-12">
                            <button onclick="login()" class="btn w-lg btn-rounded btn-lg btn-custom waves-effect waves-light" type="submit">Sign In</button>
                        </div>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php if (isset($add_post)) { ?>
    <div id="new_post-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                <div class="modal-body p-t-0">
                    <h2 class="text-uppercase text-center m-b-30">
                        <a href="" class="text-success">
                            <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                        </a>
                    </h2>


                    <form class="form-horizontal" method="post" onsubmit="return false;" action="<?php echo base_url()."add" ?>">
                        <div class="form-group m-b-25" id="dtitle">
                            <div class="col-xs-12">
                                <label for="emailaddress1" id="ltitle"><?php echo trans('post_title') ?></label>
                                <input class="form-control" type="text" name="title" id="title" required="" placeholder="">
                            </div>
                        </div>
                        <div class="form-group m-b-25" id="dpost_body">
                            <div class="col-xs-12">
                                <label for="summernote" id="lpost_body"><?php echo trans('post_body') ?></label>
                                <div class="summernote">
                            </div>
                        </div>
                        </div>

                        <div class="form-group account-btn text-center m-t-10 m-b-0">
                            <div class="col-xs-12">
                                <button class="btn w-lg btn-rounded btn-lg btn-custom waves-effect waves-light" onclick="add_post()" type="submit"><?php echo trans('post'); ?></button>
                            </div>
                        </div>

                    </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php } ?>


<!-- Signup modal content -->
<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            <div class="modal-body p-t-0 row">
                <h2 class="text-uppercase text-center m-b-30">
                    <a href="index.html" class="text-success">
                        <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                    </a>
                </h2>


                <form  method="post" onsubmit="return false" action="<?php echo base_url()."signup" ?>">

                    <div class="col-xs-6 form-group" id="dfirstname">
                        <label for="username" id="lfirstname"><?php echo trans('firstname') ?></label>
                        <input class="form-control" name="firstname" type="text" id="firstname" placeholder="">
                    </div>

                    <div class="col-xs-6 form-group" id="dlastname">
                        <label for="username" id="llastname"><?php echo trans('lastname') ?></label>
                        <input class="form-control" name="lastname" type="text" id="lastname" placeholder="">
                    </div>

                    <div class="form-group m-b-25" id="demail">
                        <div class="col-md-12">
                            <label for="emailaddress" id="lemail"><?php echo trans('email') ?></label>
                            <input class="form-control" type="text" name="email" id="email" placeholder="">
                        </div>
                    </div>

                    <div class="form-group m-b-25" id="dpassword">
                        <div class="col-md-12">
                            <label for="password" id="lpassword"><?php echo trans('password') ?></label>
                            <input class="form-control" type="password" name="password" required="" id="password" placeholder="">
                        </div>
                    </div>

                    <div class="form-group m-b-20">
                        <div class="col-md-12">
                            <div class="radio radio-success col-md-2">
                                <input type="radio" name="gender" id="radio14" value="m">
                                <label for="radio14">
                                    <?php echo trans('male') ?>
                                </label>
                            </div>
                            <div class=" col-md-4">
                                <div class="radio radio-success">
                                    <input type="radio" name="gender" id="radio15" value="f">
                                    <label for="radio15">
                                        <?php echo trans('female') ?>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button onclick="signup()" class="btn w-lg btn-rounded btn-lg btn-primary waves-effect waves-light" type="submit"><?php echo trans('signup') ?></button>
                        </div>
                    </div>

                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    function signup() {
        //e.preventDefault();
        firstname = document.getElementById("firstname").value ? document.getElementById("firstname").value : '';
        lastname = document.getElementById('lastname').value ? document.getElementById("lastname").value : '';
        email = document.getElementById('email').value ? document.getElementById("email").value : '';
        password = document.getElementById('password').value ? document.getElementById("password").value : '';
        male = document.getElementById('radio14').value ? document.getElementById("radio14").value : '';
        female = document.getElementById('radio15').value ? document.getElementById("radio15").value : '';
        gender = male ? male : female;


        $.post(
            '<?php echo base_url('signup') ?>',
            {
                firstname: firstname,
                lastname: lastname,
                email: email,
                password: password,
                gender: gender
            },
            function (data) {
                //console.log(data);
                res = JSON.parse(data);

                console.log(res);
                if (res[0]) {
                    document.getElementById("lfirstname").innerHTML = '<?php echo trans('firstname') ?>';
                    document.getElementById("llastname").innerHTML = '<?php echo trans('lastname') ?>';
                    document.getElementById("lemail").innerHTML = '<?php echo trans('email') ?>';
                    document.getElementById("lpassword").innerHTML = '<?php echo trans('password') ?>';
                    document.getElementById("lgender").innerHTML = '<?php echo trans('gender') ?>';

                    document.getElementById("firstname").value = '';
                    document.getElementById("lastname").value = '';
                    document.getElementById("email").value = '';
                    document.getElementById("password").value = '';
                    document.getElementById("gender").value = '';

                    window.location = '<?php echo base_url() ?>';
                }
                ;

                if (!res[0] && res[1]['error']) {

                    title = '<?php echo trans('fail'); ?>';
                    text = '<?php echo trans('user_not_created'); ?>';
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
                    if (errors['firstname']) {
                        d = document.getElementById("dfirstname");
                        d.className += " has-error";
                        document.getElementById("lfirstname").innerHTML = errors['firstname'];
                    };

                    if (errors['lastname']) {
                        d = document.getElementById("dlastname");
                        d.className += " has-error";
                        document.getElementById("llastname").innerHTML = errors['lastname'];
                    };

                    if (errors['email']) {
                        d = document.getElementById("demail");
                        d.className += " has-error";
                        document.getElementById("lemail").innerHTML = errors['email'];
                    };

                    if (errors['password']) {
                        d = document.getElementById("dpassword");
                        d.className += " has-error";
                        document.getElementById("lpassword").innerHTML = errors['password'];
                    };

                    if (errors['gender']) {
                        d = document.getElementById("dgender");
                        d.className += " has-error";
                        document.getElementById("lgender").innerHTML = errors['gender'];
                    };
                }
                ;
            }
        );
    }

    function login() {
        //e.preventDefault();
        email = document.getElementById('lemail').value ? document.getElementById("lemail").value : '';
        password = document.getElementById('lpassword').value ? document.getElementById("lpassword").value : '';


        $.post(
            '<?php echo base_url('login') ?>',
            {
                email: email,
                password: password
            },
            function (data) {
                //console.log(data);
                res = JSON.parse(data);
                document.getElementById("llemail").innerHTML = '<?php echo trans('email') ?>';
                d = document.getElementById("ldemail");
                d.className = "form-group";

                document.getElementById("llpassword").innerHTML = '<?php echo trans('password') ?>';
                d = document.getElementById("ldpassword");
                d.className = "form-group";

                console.log(res);
                if (res[0]) {
                    document.getElementById("llemail").innerHTML = '<?php echo trans('email') ?>';
                    document.getElementById("llpassword").innerHTML = '<?php echo trans('password') ?>';

                    document.getElementById("lemail").value = '';
                    document.getElementById("lpassword").value = '';

                    window.location= '<?php echo $this->session->userdata('this_url') ?>';
                };

                if (!res[0] && res[1]['error']) {
                    if (res[1]['type'] == 0) {
                        d = document.getElementById("ldpassword");
                        d.className += " has-error";
                        document.getElementById("llpassword").innerHTML = res[1]['message'];
                    }
                    if (res[1]['type'] == 1) {
                        d = document.getElementById("ldemail");
                        d.className += " has-error";
                        document.getElementById("llemail").innerHTML = res[1]['message'];
                    }
                };

                if (!res[0] && !res[1]['error']) {
                    errors = res[1];
                    if (errors['email']) {
                        d = document.getElementById("ldemail");
                        d.className += " has-error";
                        document.getElementById("llemail").innerHTML = errors['email'];
                    };

                    if (errors['password']) {
                        d = document.getElementById("ldpassword");
                        d.className += " has-error";
                        document.getElementById("llpassword").innerHTML = errors['password'];
                    };
                }
                ;
            }
        );
    }

</script>