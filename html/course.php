<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- FontAewsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Social Button-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap-social.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
</head>

<body>

    <nav class="midnightBlue">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">Artilla</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Adnan Diab</a></li>
            </ul>
        </div>
    </nav>
   
    <div class="col l12">
        <img src="http://via.placeholder.com/3000x800" class="responsive-img intro-course">
    </div>


    <nav class="wetAsphalt">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">الوظائف</a></li>
                <li><a href="badges.html">أعمال المتدربين</a></li>
                <li><a href="sass.html">المتجر</a></li>
                <li><a href="badges.html">المحتوى البصري</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">الدورات<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </nav>

    <nav class="grey lighten-2">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <li><a href="badges.html" class="grey-text text-darken-4">الشهادات</a></li>
                <li><a href="sass.html" class="grey-text text-darken-4">اسئلة متكررة</a></li>
                <li><a href="badges.html" class="grey-text text-darken-4">منتدى النقاش</a></li>
                <li><a href="#course__info" class="grey-text text-darken-4">معلومات الدورة</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <h3 class="right-align wetAsphalt-text">اسم الكورس </h3>
        <div class="row">
            <div class="col l4 s12">

                <div class="card">
                    <div class="card-content right-align">
                        <div class="sec-head">
                            <p>معلومات سريعة</p>
                        </div>

                        <ul class="collapsible z-depth-0 collapsible-border">
                            <li>
                                <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">attach_money</i>40,000 ل.س</div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">subscriptions</i>33</div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">sync</i>2/10/2017</div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">timer</i>65 ساعة</div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons pink-text text-lighten-2">translate</i>عربي</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content right-align">
                        <div class="sec-head">
                            <p>الفيديوهات</p>
                        </div>
                        <input type="text" class="right-align" id="myInput" onkeyup="myFunction()" placeholder="البحث بالكورس .."></textarea>

                        <ul id="myUL">
                            <li><a href="#">Adele</a></li>
                            <li><a href="#">Agnes</a></li>

                            <li><a href="#">Billy</a></li>
                            <li><a href="#">Bob</a></li>

                            <li><a href="#">Calvin</a></li>
                            <li><a href="#">Christina</a></li>
                            <li><a href="#">Cindy</a></li>
                            <li><a href="#">Adele</a></li>
                            <li><a href="#">Agnes</a></li>

                            <li><a href="#">Billy</a></li>
                            <li><a href="#">Bob</a></li>

                            <li><a href="#">Calvin</a></li>
                            <li><a href="#">Christina</a></li>
                            <li><a href="#">Cindy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col l8" style="margin-top: 8px;">
                <video class="responsive-video z-depth-2" controls>
                    <source src="video/git.mkv" type="video/mp4">
                </video>

                <div class="container-course">
                    <ul class="tabs midnightBlue tabs-fixed-width">
                        <li class="tab col s3"><a class="white-text active" href="#about">عن المحاضر </a></li>
                        <li class="tab col s3"><a class="white-text" href="#extra_resources">مصادر اضافية</a></li>
                    </ul>

                    <div id="about" class="col s12 white z-depth-2">
                        <div class="row">

                            <div class="col l3">
                                <img src="imgs/course-info.png" class="responsive-img" style="margin-top: 20px">
                            </div>

                            <div class="col l6">
                                <h4 class="right-align wetAsphalt-text">اسم المحاضر</h4>
                                <p class="right-align">
                                    Lorem ipsum dolor sit amet, te velit appareat his, te ius omnis iudicabit rationibus. Solet minimum omittantur eos te, quod mutat sea ut, qui ut fabellas mediocrem persequeris. Eius fabulas vocibus in vix. Vis ei quas referrentur.
                                </p>
                                <div class="right-align">
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
                                <img src="http://via.placeholder.com/100x100" class="responsive-img" style="margin-top: 20px">
                            </div>
                        </div>
                    </div>

                    <div id="extra_resources" class="col s12 white z-depth-2">
                        <div class="row">

                            <div class="col l12">
                                <ul class="collection no-border">
                                    <li class="collection-item avatar">
                                        <i class="material-icons circle">folder</i>
                                        <span class="title">PROJECT_FILES.zip</span>
                                        <p>33 mg</p>
                                        <a href="#!" class="secondary-content tooltipped" data-position="bottom" data-delay="50" data-tooltip="Download File"><i class="material-icons small grey-text text-darken-1">file_download</i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div><!-- end  -->
            </div>

            <div class="col l8">
                <div class="card" id="course__info">
                    <div class="card-content right-align">
                        <h4 class="right-align midnightBlue-text">معلومات الدورة </h4>
                        <p class="right-align wetAsphalt-text">
                            Lorem ipsum dolor sit amet, te velit appareat his, te ius omnis iudicabit rationibus. Solet minimum omittantur eos te, quod mutat sea ut, qui ut fabellas mediocrem persequeris. Eius fabulas vocibus in vix. Vis ei quas referrentur.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col l12">
                 <div class="row right-align">
                     <span class="label-course tag-course right">Art</span>
                     <span class="label-course tag-course right">Design</span>
                     <span class="label-course tag-course right">illustartor</span>
                     <span class="label-course tag-course right">Art</span>
                     <span class="label-course tag-course right">Design</span>
                     <span class="label-course tag-course right">illustartor</span>
                 </div>
            </div>

        </div>

    </div>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>