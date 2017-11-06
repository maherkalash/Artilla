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
    <a class="btn amber mar-top" onclick="filterSelection('rating')" name="category"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
    <a class="btn lighten-3 pink white-text mar-top" onclick="filterSelection('newest')" name="category">جديد</a>
    <a class="btn lighten-2 pink white-text mar-top" onclick="filterSelection('art')" name="category"> رسم</a>
    <a class="btn lighten-2 pink white-text mar-top" onclick="filterSelection('photography')" name="category"> تصوير</a>
    <a class="btn lighten-2 pink white-text mar-top" onclick="filterSelection('design')" name="category"> تصميم</a>
    <a class="btn lighten-2 pink white-text mar-top" onclick="filterSelection('vfx')" name="category"> مونتاج</a>
    <a class="btn lighten-2 pink white-text mar-top" onclick="filterSelection('vt')" name="category"> خدع بصرية</a>
    <a class="btn wetAsphalt white-text mar-top" onclick="filterSelection('all')" name="category" checked> الكل </a>

</div>

<div class="row-gallery row">
    <!-- make evrey item col l3 s12 -->
    <div class="col-sm-3 layg">

        <div class="container-image no-pad-sides design filter art">
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

        <div class="container-image no-pad-sides filter vfx">
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

        <div class="container-image no-pad-sides design filter art">
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

        <div class="container-image no-pad-sides filter vfx">
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

        <div class="container-image no-pad-sides design filter art">
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

        <div class="container-image no-pad-sides filter vfx">
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

        <div class="container-image no-pad-sides design filter art">
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

        <div class="container-image no-pad-sides filter vfx">
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


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>
    <script type="text/javascript" src="gallery/jsGallery.js"></script>

</body>
</html>
