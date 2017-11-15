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

        /* Dropdown Button */
        .dropshare-btn{
            padding: 14px 48px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropshare-btn:hover, .dropbtn:focus {
            background-color: rgba(0, 0, 0, 0.1);
        }

        /* The container <div> - needed to position the dropdown content */
        .dropsharedown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropsharedown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropsharedown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropsharedown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}
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
                        <div class="feed">
                            <a class="love-btn">
                                <i class="material-icons" style="line-height: 2;">favorite</i>

                                <div class="reaction-box">
                                    <!--  <div class="reaction-icon like">
                                          <label>Like</label>
                                      </div>  -->
                                    <div class="reaction-icon love">
                                        <label>Love</label>
                                    </div>
                                    <div class="reaction-icon haha">
                                        <label>Haha</label>
                                    </div>
                                    <div class="reaction-icon wow">
                                        <label>Wow</label>
                                    </div>
                                    <div class="reaction-icon sad">
                                        <label>Sad</label>
                                    </div>
                                    <div class="reaction-icon angry">
                                        <label>Angry</label>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="dropsharedown">
                            <button onclick="myFunction()" class="dropshare-btn share-action-btn"><i class="fa fa-share" aria-hidden="true"></i> Share</button>
                            <div id="myDropdown" class="dropsharedown-content">
                                <a href="#">Link 1</a>
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action" style="padding: 0">
                    <div class="action-nav">
                        <a class="facebook-action-btn" href=""> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a class="instagram-action-btn" href=""> <i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
                    </div>
                </div>
            </div>
            <!--
            <div class="row" style="padding: 0">
                <div class="col l6" style="padding:0;">

                    <div class="center-align" style="margin-top: 25%">
                        <div class="feed">
                            <a class="love-btn">
                                <i class="material-icons" style="line-height: 2;">favorite</i>

                                <div class="reaction-box">

                                    <div class="reaction-icon love">
                                        <label>Love</label>
                                    </div>
                                    <div class="reaction-icon haha">
                                        <label>Haha</label>
                                    </div>
                                    <div class="reaction-icon wow">
                                        <label>Wow</label>
                                    </div>
                                    <div class="reaction-icon sad">
                                        <label>Sad</label>
                                    </div>
                                    <div class="reaction-icon angry">
                                        <label>Angry</label>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col l6" style="margin-top: 10px; ">
                    <div class="dropshare">
                        <a style="width:100%" onclick="myFunction()" class="dropshare-btn">Dropdown</a>
                        <div id="share-dropdown" class="dropshare-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>

                    <a class="btn  btn-facebook butnz-share">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a class="btn  btn-twitter butnz-share">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a class="btn  btn-google butnz-share">
                        <span class="fa fa-google"></span>
                    </a>
                    <a class="btn  btn-linkedin butnz-share">
                        <span class="fa fa-linkedin"></span>
                    </a>
                    <a class="btn  btn-instagram butnz-share">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a class="btn  btn-pinterest butnz-share">
                        <span class="fa fa-pinterest"></span>
                    </a>
                </div>

            </div> -->
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
<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropshare-btn')) {

            var dropdowns = document.getElementsByClassName("dropsharedown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

</body>
</html>
