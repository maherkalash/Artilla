<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- FontAewsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Social Button-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-social.css"/>
    <!--Import Slider Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/slider/cssSlider.css"/>
    <!--Import Gallery Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/slider/cssSlider.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css"/>
</head>


<body>

    <nav class="transparent z-depth-0">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo white-text" style="z-index: 100">Artilla</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn account-btn">تسجيل الدخول</a></li>
                <li><a class="waves-effect waves-light btn account-btn">انشاء حساب</a></li>
            </ul>
        </div>
    </nav>

    <div class="main-screen">
        <ul class="slideshow">
            <li class="image active"> <h1 class="slider-text centered">...Scroll Down To Reveal Content</h1></li>
            <li class="image"><h1 class="slider-text bottom-right">...Scroll Down To Reveal Content</h1></li>
            <li class="image"><h1 class="slider-text bottom-left">...Scroll Down To Reveal Content</h1></li>
            <li class="image"><h1 class="slider-text centered">...Scroll Down To Reveal Content</h1></li>
            <li class="image"><h1 class="slider-text bottom-left">...Scroll Down To Reveal Content</h1></li>
        </ul>
    </div>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content dropart-menu">
        <div class="hover-tab">
            <div class="container-tab">
                <div id="tab1" class="tab-content left" style="display:block;">

                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="tab-content left">
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                </div>

                <div id="tab3" class="tab-content left">
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                        <div class="col">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-titles right">
                <div class="active tab-btn"><a href="#tab1"> الرسم </a></div>
                <div class="tab-btn"><a href="#tab2">Tab 2</a></div>
                <div class="tab-btn"><a href="#tab3">Tab 3</a></div>
            </div>

        </div>
    </ul>

    <nav class="wetAsphalt" style="margin-top: -64px ;">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html" class="white-text">الوظائف</a></li>
                <li><a href="badges.html" class="white-text">أعمال المتدربين</a></li>
                <li><a href="sass.html" class="white-text">المتجر</a></li>
                <li><a href="badges.html" class="white-text">المحتوى البصري</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button white-text" href="#!" data-activates="dropdown1">الدورات<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row mar-top ">
            <div class="col l6 container-text">
                <img class="responsive-img brightness radius-img" src="<?php echo base_url() ?>assets/imgs/design.jpg">
                <div class="centered" style="font-size: 5rem">Design</div>
            </div>

            <div class="col l3 container-text">
                <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url() ?>assets/imgs/photography.jpg">
                <div class="centered introThumbnail-text">Photography</div>
            </div>

            <div class="col l3 container-text">
                <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url() ?>assets/imgs/editing.png">
                <div class="centered introThumbnail-text">Editing</div>
            </div>

            <div class="col l3 container-text">
                <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url() ?>assets/imgs/drawing.jpg">
                <div class="centered introThumbnail-text">Drawing</div>
            </div>
            <div class="col l3 container-text">
                <img class="responsive-img introThumbnail brightness radius-img" src="<?php echo base_url() ?>assets/imgs/vfx.jpg">
                <div class="centered introThumbnail-text">VFX</div>
            </div>
        </div>
        <div class="row">
            <div class="col l2">
                <a class="waves-effect waves-light btn pink lighten-2 btn-large" style="margin-top: 8px;">انشاء حساب</a>
            </div>
            <div class="card-panel wetAsphalt col l10" style="height: 54px;">
                <h5 class="white-text right-align"> انضم الان وأبدأ التعلم حالاََ </h5>
            </div>
        </div>

        <div class="row">
            <h4 class=" col l12 right-align ques-intro wetAsphalt-text">
                <i class="fa fa-question-circle-o pink-text text-lighten-2" aria-hidden="true"></i> من يمكنه الاستفادة من المنصة
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
            <h4 class=" col l12 right-align ques-intro wetAsphalt-text">
                <i class="fa fa-question-circle-o pink-text text-lighten-2" aria-hidden="true"></i> ماذا تحوي المنصة
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
                <h5 class="center-align wetAsphalt-text">أشترك الان للحصول على نشرتنا الاسبوعية للمواد القلمية في الفنون البصرية , عروضنا ومنتجاتنا أكثر من ذلك بكثير</h5>
                <div class="row">

                    <div class="row">
                        <div class="input-field col s6">
                            <input  type="text" placeholder="Name">
                        </div>
                        <div class="input-field col s6">
                            <input  type="tel" class="validate" placeholder="Email">
                        </div>
                    </div>
                    <div class="col l12">
                        <a class="waves-effect waves-light btn pink lighten-2 btn-large right" style="margin-top: 8px;">اشتراك  </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <footer class="page-footer wetAsphalt">
        <div class="container ">
            <div class="row">
                <div class="col l6 s12">
                    <a class="btn btn-social-icon btn-facebook btn-socialMedia">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a class="btn btn-social-icon btn-twitter btn-socialMedia">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a class="btn btn-social-icon btn-google btn-socialMedia">
                        <span class="fa fa-google-plus"></span>
                    </a>
                    <a class="btn btn-social-icon btn-linkedin btn-socialMedia">
                        <span class="fa fa-linkedin"></span>
                    </a>
                </div>
                <div class="col l6 right-align">
                    <a class="waves-effect waves-teal btn-flat footer-linkss">أسئلة شائعة</a>
                    <a class="waves-effect waves-teal btn-flat footer-linkss">اتصل بنا</a>
                    <a class="waves-effect waves-teal btn-flat footer-linkss">رسالتنا</a>
                    <a class="waves-effect waves-teal btn-flat footer-linkss">حول ارتيلا</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright midnightBlue">
            <div class="container">
                © All Rights Reserved | <?php echo date('Y')?>
                <a class="grey-text text-lighten-4 right" href="/">Artilla</a>
            </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/slider/jsSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/gallery/jsGallery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>
</html>
