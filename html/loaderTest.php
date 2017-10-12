<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="slider/cssSlider.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- FontAewsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--Social Button-->
    <link type="text/css" rel="stylesheet" href="css/bootstrap-social.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>

    <style>

        .welcome .splash {
            height: 0px;
            padding: 0px;
            border: 130em solid #2c3e50;
            position: fixed;
            left: 50%;
            top: 100%;
            display: block;
            box-sizing: initial;
            overflow: hidden;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
        }

        .welcome #welcome {
            background: #f06292 ;
            width: 56px;
            height: 56px;
            position: absolute;
            left: 50%;
            top: 50%;
            overflow: hidden;
            opacity: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards, hide 2s 2.9s ease forwards;

        }



        @keyframes init {
            0% {
                width: 0px;
                height: 0px;
            }
            100% {
                width: 56px;
                height: 56px;
                margin-top: 0px;
                opacity: 1;
            }
        }

        @keyframes puff {
            0% {
                top: 100%;
                height: 0px;
                padding: 0px;
            }
            100% {
                top: 50%;
                height: 100%;
                padding: 0px 100%;
            }
        }

        @keyframes borderRadius {
            0% {
                border-radius: 50%;
            }
            100% {
                border-radius: 0px;
            }
        }

        @keyframes moveDown {
            0% {
                top: 50%;
            }
            50% {
                top: 40%;
            }
            100% {
                top: 100%;
            }
        }

        @keyframes moveUp {
            0% {
                background: #d81b60;
                top: 100%;
            }
            50% {
                top: 40%;
            }
            100% {
                top: 50%;
                background: #34495e;
            }
        }

        @keyframes materia {
            0% {
                background: #34495e;
            }
            50% {
                background: #34495e;
                top: 26px;
            }
            100% {
                background: #34495e;
                width: 100%;
                height: 64px;
                border-radius: 0px;
                top: 26px;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes hide {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

        #myInput {
            width: 100%; /* Full-width */
            font-size: 18px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            margin-bottom: 12px; /* Add some space below the input */
        }

        #myUL {
            /* Remove default list styling */
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        #myUL li a {
            border: 1px solid #ddd; /* Add a border to all links */
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6; /* Grey background color */
            padding: 12px; /* Add some padding */
            text-decoration: none; /* Remove default text underline */
            font-size: 18px; /* Increase the font-size */
            color: black; /* Add a black text color */
            display: block; /* Make it into a block element to fill the whole list */
        }

        #myUL li a:hover:not(.header) {
            background-color: #eee; /* Add a hover effect to all links, except for headers */
        }


    </style>
</head>


<body class="welcomee">
<!--<span id="splash-overlay" class="splash"></span>
<span id="welcome" class="z-depth-4"></span> -->


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

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<ul id="myUL">
    <li><a href="#">Adele</a></li>
    <li><a href="#">Agnes</a></li>

    <li><a href="#">Billy</a></li>
    <li><a href="#">Bob</a></li>

    <li><a href="#">Calvin</a></li>
    <li><a href="#">Christina</a></li>
    <li><a href="#">Cindy</a></li>
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
    <script type="text/javascript" src="slider/jsSlider.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>

</body>
</html>