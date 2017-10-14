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
    <!--Import Gallery Css-->
    <link type="text/css" rel="stylesheet" href="gallery/cssGallery.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>

    <style>
        /* Navbar container */
        .action-nav {
            overflow: hidden;
        }

        /* Links inside the navbar */
        .action-nav a {
            float: left;
            margin-right: 0 !important;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 15px;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.6);
            transition: 0.3s;
            width: 50% ;

        }

        .love-action-btn{
            color : #fff !important;
            background-color: #f06292 !important;
            width : 50px !important;
        }
        .share-action-btn{
            color : #f06292 !important;
            background-color: #fff !important;
        }

        .facebook-action-btn{
            color : #fff !important;
            background-color: #3b5998 !important;
        }
        .instagram-action-btn{
            color : #fff !important;
            background: #f09433;
            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
        }

        /* ---------- SHARE-BUTTON ---------- */

        .share-button {
            width: 6em;
            height: 2em;
            line-height: 2em;
        }

        .social-toggle {
            display: block;
            font-weight: bold;
            font-size: 90%;
            text-align: center;
            /* text-transform: uppercase; */
            transition: all 0.25s;
            color: rgb(200,200,200);
            background: rgba(200,200,200,.05);
            border: 2px solid rgb(200,200,200);
            width: 15rem;
            height: 3.4rem;
            line-height: 3rem;
        }

        .social-toggle:hover {
            background:rgb(200,200,200);
            color:#333;
        }

        .no-js .social-toggle, .no-js .social-toggle:hover {
            cursor: default;
            border:none;
            background:transparent;
            color:rgb(200,200,200);
            pointer-events:none;
        }

        .social-networks {
            -webkit-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            -webkit-transform: scale(0) translateY(-190px);
            transform: scale(0) translateY(-190px);
            opacity: 0;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            margin-left: -45%;
            /* stops flickering */
            -webkit-backface-visibility: hidden;
        }

        .social-gplus {
            background: #e34429;
        }

        .social-twitter {
            background: #6cdfea;
        }

        .social-networks.open-menu, .no-js .social-networks {
            -webkit-transform: scale(1) translateY(-90px);
            transform: scale(1) translateY(-90px);
            opacity:1;
        }


        .social-networks ul {
            position:relative;
            top:0;
            left:0;
            width: 180px;
            height: 40px;
            color: #fff;
            background: #3b5998;
            margin: auto;
            padding: 0;
            list-style: none;
        }

        .social-networks ul:after {
            content: '';
            display: block;
            width: 0;
            height: 0;
            position: absolute;
            left: 0;
            right: 0;
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
        }

        .social-networks.open-menu ul:after, .no-js .social-networks ul:after {
            margin: 35px auto;
            border-top: 12px solid #3b5998;
        }

        .social-networks li {
            font-size: 90%;
            width: 60px;
            margin: 0;
            text-align: center;
            float: left;
            display: block;
            height: 40px;
            line-height:40px;
            position: relative;
            z-index: 2;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            transition: all .3s ease;
        }

        .share-button a {
            text-decoration:none;
        }

        .social-networks a {
            display:block;
            color:white;
        }

        .social-networks a:hover {
            color:#222;
        }

    </style>

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

<nav class="grey lighten-2">
    <div class="nav-wrapper container">
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html" class="wetAsphalt-text">الوظائف</a></li>
            <li><a href="badges.html" class="wetAsphalt-text">أعمال المتدربين</a></li>
            <li><a href="sass.html" class="wetAsphalt-text">المتجر</a></li>
            <li><a href="badges.html" class="wetAsphalt-text">المحتوى البصري</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button wetAsphalt-text" href="#!" data-activates="dropdown1">الدورات<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>

<div class="col l12 center mar-top">
    <!-- Control buttons -->
    <a class="btn amber" onclick="filterSelection('rating')" name="category"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
    <a class="btn lighten-3 pink white-text" onclick="filterSelection('newest')" name="category">جديد</a>
    <a class="btn lighten-2 pink white-text" onclick="filterSelection('art')" name="category"> رسم</a>
    <a class="btn lighten-2 pink white-text" onclick="filterSelection('photography')" name="category"> تصوير</a>
    <a class="btn lighten-2 pink white-text" onclick="filterSelection('design')" name="category"> تصميم</a>
    <a class="btn lighten-2 pink white-text" onclick="filterSelection('vfx')" name="category"> مونتاج</a>
    <a class="btn lighten-2 pink white-text" onclick="filterSelection('vt')" name="category"> خدع بصرية</a>
    <a class="btn wetAsphalt white-text" onclick="filterSelection('all')" name="category" checked> الكل </a>

</div>

<div class="row-gallery row">
    <!-- make evrey item col l3 s12 -->
    <div class="col-sm-3 layg">

        <div class="container no-pad-sides design filter art">
            <img src="gallery/gallery-imgs/gallery/2.jpg" class="image">
            <div class="overlay" onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o midnightBlue-text" aria-hidden="true"></i><span class="midnightBlue-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

        <div class="container no-pad-sides filter vfx">
            <img src="gallery/gallery-imgs/gallery/3.jpg" class="image">
            <div class="centered">
                <i class="fa fa-play-circle-o fa-4x white-text" aria-hidden="true"></i>
            </div>
            <div class="overlay"  onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>



    </div>

    <div class="col-sm-3 layg">

        <div class="container no-pad-sides design filter art">
            <img src="gallery/gallery-imgs/gallery/4.jpg" class="image">
            <div class="overlay" onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o midnightBlue-text" aria-hidden="true"></i><span class="midnightBlue-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

        <div class="container no-pad-sides filter vfx">
            <img src="gallery/gallery-imgs/gallery/5.jpg" class="image">
            <div class="centered">
                <i class="fa fa-play-circle-o fa-4x white-text" aria-hidden="true"></i>
            </div>
            <div class="overlay"  onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 layg">

        <div class="container no-pad-sides design filter art">
            <img src="gallery/gallery-imgs/gallery/6.jpg" class="image">
            <div class="overlay" onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o midnightBlue-text" aria-hidden="true"></i><span class="midnightBlue-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

        <div class="container no-pad-sides filter vfx">
            <img src="gallery/gallery-imgs/gallery/7.jpg" class="image">
            <div class="centered">
                <i class="fa fa-play-circle-o fa-4x white-text" aria-hidden="true"></i>
            </div>
            <div class="overlay"  onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 layg">

        <div class="container no-pad-sides design filter art">
            <img src="gallery/gallery-imgs/gallery/8.jpg" class="image">
            <div class="overlay" onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o midnightBlue-text" aria-hidden="true"></i><span class="midnightBlue-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

        <div class="container no-pad-sides filter vfx">
            <img src="gallery/gallery-imgs/gallery/9.jpg" class="image">
            <div class="centered">
                <i class="fa fa-play-circle-o fa-4x white-text" aria-hidden="true"></i>
            </div>
            <div class="overlay"  onclick="openModal()">
                <div class="top-left text-white">
                    <h3 class="artName-text">Art Name </h3>
                    <h5 class="artistName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star rated"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <div class="centered">
                    <a class="btn-love">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="sideModalDetails" class="sideModal">
    <a href="javascript:void(0)" class="closebtn" onclick="closeModal()">&times;</a>
    <div class="row">
        <div class="col l9">
            <img src="imgs/1.jpg" class="responsive-img">
            <div class="bottom-action-gallery">

            </div>
        </div>
        <div class="col l3">
            <div class="card">
                <div class="card-content">
                    <img class="responsive-img" src="http://via.placeholder.com/100x100">
                    <span class="card-title">Artist Name</span>
                    <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action" style="padding: 0">
                    <div class="action-nav">
                        <a class="facebook-action-btn" href=""> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a class="instagram-action-btn" href=""> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0">
                <div class="col l3" style="padding:0;">
                    <div class="action-nav">
                        <a class="love-action-btn" href=""> <i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col l9">
                    <div class="share-button">
                        <a href="#" class="social-toggle">Share</a>
                        <div class="social-networks">
                            <ul>
                                <li class="social-twitter">
                                    <a href="https://www.twitter.com">T</a>
                                </li>
                                <li class="social-facebook">
                                    <a href="https://www.facebook.com">F</a>
                                </li>
                                <li class="social-gplus">
                                    <a href="http://www.gplus.com">G+</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="col l12 divider"></div>

<div class="row col center">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active wetAsphalt"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>
    <script type="text/javascript" src="gallery/jsGallery.js"></script>
<script>
   

</script>

</body>
</html>
