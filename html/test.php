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
        /* Arabic css Mega Menu*/
        .megaMenuAr {
            overflow: hidden;
            background-color: #34495e;
            color: #fff;
            height: 64px;
        }

        .megaMenuAr a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;

        }

        .megaMenuAr-dropdown {
            float: left;
            overflow: hidden;
        }

        .megaMenuAr-dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 20px 20px;
            background-color: inherit;

        }

        .megaMenuAr a:hover, .megaMenuAr-dropdown:hover .dropbtn {
            background-color: rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .megaMenuAr-dropdown-content {
            display: none;
            position: absolute;
            background-color: transparent;
            width: 50%;
            z-index: 1000;
            padding-top: 10px;
            right: 0;
        }

        /* dropdown arrow */
        .megaMenu-parent-arrow{
            position: relative;
        }
        .megaMenu-arrow{
            position: absolute;
            top: -20px;
            right: 40px;
            margin-left: -5px;
            border-width: 10px;
            border-style: solid;
            border-color: transparent transparent #2c3e50 transparent;
        }

        .megaMenuAr-dropdown:hover .megaMenuAr-dropdown-content {
            display: block;
        }

        /* Style the tab */
        div.megaMenuAr-tab {
            float: left;
            background-color: #2c3e50;
            width: 30%;
            height: 300px;
        }

        /* Style the buttons inside the tab */
        div.megaMenuAr-tab button {
            display: block;
            border: none;
            background-color: inherit;
            color: white;
            padding: 10px 15px;
            width: 100%;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            text-align: right;
        }

        /* Change background color of buttons on hover */
        div.megaMenuAr-tab button:hover {
            background-color: #34495e;
            border-right: 4px solid #f06292;
        }

        /* Create an active/current "tab button" class */
        div.megaMenuAr-tab button.active {
            background-color: #34495e;
            border-right: 4px solid #f06292;
        }

        /* Style the tab content */
        .megaMenuAr-tabcontent {
            float: left;
            text-align: right;
            padding: 0 12px;
            background-color: rgba(52, 73, 94,0.9);
            width: 70%;
            border-left: none;
            height: 300px;
        }

        /* Dropdown Button */

        /* The dropdown container */
        .dropdowno {
            float: left;
            overflow: hidden;
        }

        /* Dropdown button */
        .dropdowno .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 20px 20px;
            background-color: inherit;
        }

        /* Add a red background color to navbar links on hover */
        .dropdowno:hover .dropbtn {
            background-color: rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        /* Dropdown content (hidden by default) */
        .dropdowno-content {
            display: none;
            position: absolute;
            background-color: #34495e;
            min-width: 160px;
            z-index: 1000;
        }

        /* Links inside the dropdown */
        .dropdowno-content a {
            float: none;
            color: #fefefe;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdowno-content a:hover {
            background-color: #fefefe;
            color : #34495e ;
        }

        /* Show the dropdown menu on hover */
        .dropdowno:hover .dropdowno-content {
            display: block;
        }






















        /* facebook reaction style */

        .feed .love-btn {
            background: #f06292;
            color : #fff;
            display: inline-block;
            position: relative;
            padding: 12px 12px 6px 12px;
            cursor: pointer;
            border-radius: 4px ;
            transition: 0.2s;
        }
        .feed .love-btn::before {
            content: ".";
            opacity: 0;
            display: block;
            width: 44px;
            height: 10px;
            position: absolute;
            top: -10px;
            left: 0;
        }
        .feed .love-btn .reaction-box {
            position: absolute;
            width: 280px; /*donr forget edit when add like button*/
            height: 55px;
            background: #FFF;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            border-radius: 28px;
            left: -25px;
            bottom: 3.5rem;
            display: none;
        }
        .feed .love-btn .reaction-box .reaction-icon.angry {
            animation: fadeInLoad-angry 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px 0px;
        }
        .feed .love-btn .reaction-box .reaction-icon.flower {
            animation: fadeInLoad-flower 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -40px;
        }
        .feed .love-btn .reaction-box .reaction-icon.haha {
            animation: fadeInLoad-haha 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -80px;
        }
        .feed .love-btn .reaction-box .reaction-icon.like {
            animation: fadeInLoad-like 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -120px;
        }
        .feed .love-btn .reaction-box .reaction-icon.love {
            animation: fadeInLoad-love 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -160px;
        }
        .feed .love-btn .reaction-box .reaction-icon.sad {
            animation: fadeInLoad-sad 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -200px;
        }
        .feed .love-btn .reaction-box .reaction-icon.wow {
            animation: fadeInLoad-wow 0.3s;
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            background-position: 0px -240px;
        }
        .feed .love-btn .reaction-box .reaction-icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: url(imgs/react.png);
            background-size: cover;
            border-radius: 20px;
            margin: 8px 4px 0 4px;
            text-align: center;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            opacity: 0;
            transform: translate(0, 100px) scale(0);
        }
        .feed .love-btn .reaction-box .reaction-icon label {
            padding: 4px 8px;
            position: relative;
            top: -30px;
            border-radius: 4px;
            font-size: 11px;
            color: #FFF;
            background: #333;
            visibility: hidden;
        }
        .feed .love-btn .reaction-box .reaction-icon.show {
            opacity: 1;
            transform: translate(0, 0) scale(1);
            pointer-events: auto;
        }
        .feed .love-btn .reaction-box .reaction-icon:hover {
            transform: scale(1.4);
            transform-origin: bottom;
        }
        .feed .love-btn .reaction-box .reaction-icon:hover label {
            visibility: visible;
        }
        .feed .love-btn:hover {
            background: #34495e;
        }

        .lovebtn-clicked {
            background-color: green !important;
            color : #f06292 !important;
        }


        /* login and register */

        /* container-signCard */
        .container-signCard {
            position: relative;
            max-width: 460px;
            width: 100%;
            margin: 0 auto 100px;
        }
        .container-signCard.active .signCard:first-child {
            background: #f2f2f2;
            margin: 0 15px;
        }
        .container-signCard.active .signCard:nth-child(2) {
            background: #fafafa;
            margin: 0 10px;
        }
        .container-signCard.active .signCard.alt {
            top: 20px;
            right: 0;
            width: 100%;
            min-width: 100%;
            height: auto;
            border-radius: 5px;
            padding: 60px 0 40px;
            overflow: hidden;
        }
        .container-signCard.active .signCard.alt .toggle {
            position: absolute;
            top: 40px;
            right: -70px;
            box-shadow: none;
            -webkit-transform: scale(10);
            transform: scale(10);
            -webkit-transition: -webkit-transform .3s ease;
            transition: -webkit-transform .3s ease;
            transition: transform .3s ease;
            transition: transform .3s ease, -webkit-transform .3s ease;
        }
        .container-signCard.active .signCard.alt .toggle:before {
            content: '';
        }
        .container-signCard.active .signCard.alt .signCard-title,
        .container-signCard.active .signCard.alt .input-container-signCard,
        .container-signCard.active .signCard.alt .button-container-signCard {
            left: 0;
            opacity: 1;
            visibility: visible;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        .container-signCard.active .signCard.alt .signCard-title {
            -webkit-transition-delay: .3s;
            transition-delay: .3s;
        }
        .container-signCard.active .signCard.alt .input-container-signCard {
            -webkit-transition-delay: .4s;
            transition-delay: .4s;
        }
        .container-signCard.active .signCard.alt .input-container-signCard:nth-child(2) {
            -webkit-transition-delay: .5s;
            transition-delay: .5s;
        }
        .container-signCard.active .signCard.alt .input-container-signCard:nth-child(3) {
            -webkit-transition-delay: .6s;
            transition-delay: .6s;
        }
        .container-signCard.active .signCard.alt .button-container-signCard {
            -webkit-transition-delay: .7s;
            transition-delay: .7s;
        }

        /* signCard */
        .signCard {
            position: relative;
            background: #f5f5f5;
            border-radius: 5px;
            padding: 60px 0 40px 0;
            box-sizing: border-box;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            -webkit-transition: .3s ease;
            transition: .3s ease;
            /* signCard-title */
            /* Inputs */
            /* Button */
            /* signCard-forget */
            /* Alt signCard */
        }
        .signCard:first-child {
            padding: 0;
        }
        .signCard .signCard-title {
            position: relative;
            z-index: 1;
            border-left: 5px solid #34495e;
            margin: 0 0 35px;
            padding: 10px 0 10px 50px;
            color: #34495e;
            font-size: 32px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .signCard .input-container-signCard {
            position: relative;
            margin: 0 60px 50px;
        }
        .signCard .input-container-signCard input {
            outline: none;
            z-index: 1;
            position: relative;
            background: none;
            width: 100%;
            height: 60px;
            border: 0;
            color: #212121;
            font-size: 24px;
            font-weight: 400;
        }
        .signCard .input-container-signCard input:focus ~ label {
            color: #9d9d9d;
            -webkit-transform: translate(-12%, -50%) scale(0.75);
            transform: translate(-12%, -50%) scale(0.75);
        }
        .signCard .input-container-signCard input:focus ~ .bar:before, .signCard .input-container-signCard input:focus ~ .bar:after {
            width: 50%;
        }
        .signCard .input-container-signCard input:valid ~ label {
            color: #9d9d9d;
            -webkit-transform: translate(-12%, -50%) scale(0.75);
            transform: translate(-12%, -50%) scale(0.75);
        }
        .signCard .input-container-signCard label {
            position: absolute;
            top: 0;
            left: 0;
            color: #757575;
            font-size: 24px;
            font-weight: 300;
            line-height: 60px;
            -webkit-transition: 0.2s ease;
            transition: 0.2s ease;
        }
        .signCard .input-container-signCard .bar {
            position: absolute;
            left: 0;
            bottom: 0;
            background: #757575;
            width: 100%;
            height: 1px;
        }
        .signCard .input-container-signCard .bar:before, .signCard .input-container-signCard .bar:after {
            content: '';
            position: absolute;
            background: #34495e;
            width: 0;
            height: 2px;
            -webkit-transition: .2s ease;
            transition: .2s ease;
        }
        .signCard .input-container-signCard .bar:before {
            left: 50%;
        }
        .signCard .input-container-signCard .bar:after {
            right: 50%;
        }
        .signCard .button-container-signCard {
            margin: 0 60px;
            text-align: center;
        }
        .signCard .button-container-signCard button {
            outline: 0;
            cursor: pointer;
            position: relative;
            display: inline-block;
            background: 0;
            width: 200px;
            border: 2px solid #2c3e50;
            padding: 15px 0;
            font-size: 24px;
            font-weight: 600;
            line-height: 1;

            overflow: hidden;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        .signCard .button-container-signCard button span {
            position: relative;
            z-index: 1;
            color: #2c3e50;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        .signCard .button-container-signCard button:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            background: #34495e;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            margin: -15px 0 0 -15px;
            opacity: 0;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        .signCard .button-container-signCard button:hover, .signCard .button-container-signCard button:active, .signCard .button-container-signCard button:focus {
            border-color: #34495e;
        }
        .signCard .button-container-signCard button:hover span, .signCard .button-container-signCard button:active span, .signCard .button-container-signCard button:focus span {
            color: #34495e;
        }
        .signCard .button-container-signCard button:active span, .signCard .button-container-signCard button:focus span {
            color: #ffffff;
        }
        .signCard .button-container-signCard button:active:before, .signCard .button-container-signCard button:focus:before {
            opacity: 1;
            -webkit-transform: scale(10);
            transform: scale(10);
        }
        .signCard .signCard-forget {
            margin: 40px 0 0;
            color: #bababa;
            font-size: 24px;
            font-weight: 300;
            text-align: center;
        }
        .signCard .signCard-forget a {
            color: inherit;
            text-decoration: none;
            -webkit-transition: .3s ease;
            transition: .3s ease;
        }
        .signCard .signCard-forget a:hover {
            color: #757575;
        }
        .signCard.alt {
            position: absolute;
            top: 40px;
            right: -70px;
            z-index: 10;
            width: 140px;
            height: 140px;
            background: none;
            border-radius: 100%;
            box-shadow: none;
            padding: 0;
            -webkit-transition: .3s ease;
            transition: .3s ease;
            /* Toggle */
            /* signCard-title */
            /* Input */
            /* Button */
        }
        .signCard.alt .toggle {
            position: relative;
            background: #34495e;
            width: 140px;
            height: 140px;
            border-radius: 100%;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            color: #ffffff;
            font-size: 58px;
            line-height: 140px;
            text-align: center;
            cursor: pointer;
        }
        .signCard.alt .toggle:before {
            content:"\f234";
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
        }
        .signCard.alt .signCard-title,
        .signCard.alt .input-container-signCard,
        .signCard.alt .button-container-signCard {
            left: 100px;
            opacity: 0;
            visibility: hidden;
        }
        .signCard.alt .signCard-title {
            position: relative;
            border-color: #ffffff;
            color: #ffffff;
        }
        .signCard.alt .signCard-title .close {
            cursor: pointer;
            position: absolute;
            top: 0;
            right: 60px;
            display: inline;
            color: #ffffff;
            font-size: 58px;
            font-weight: 400;
        }
        .signCard.alt .signCard-title .close:before {
            content: '\00d7';
        }
        .signCard.alt .input-container-signCard input {
            color: #ffffff;
        }
        .signCard.alt .input-container-signCard input:focus ~ label {
            color: #ffffff;
        }
        .signCard.alt .input-container-signCard input:focus ~ .bar:before, .signCard.alt .input-container-signCard input:focus ~ .bar:after {
            background: #ffffff;
        }
        .signCard.alt .input-container-signCard input:valid ~ label {
            color: #ffffff;
        }
        .signCard.alt .input-container-signCard label {
            color: rgba(255, 255, 255, 0.8);
        }
        .signCard.alt .input-container-signCard .bar {
            background: rgba(255, 255, 255, 0.8);
        }
        .signCard.alt .button-container-signCard button {
            width: 100%;
            background: #ffffff;
            border-color: #ffffff;
        }
        .signCard.alt .button-container-signCard button span {
            color: #34495e;
        }
        .signCard.alt .button-container-signCard button:hover {
            background: rgba(255, 255, 255, 0.9);
        }
        .signCard.alt .button-container-signCard button:active:before, .signCard.alt .button-container-signCard button:focus:before {
            display: none;
        }

        /* Keyframes */
        @-webkit-keyframes buttonFadeInUp {
            0% {
                bottom: 30px;
                opacity: 0;
            }
        }
        @keyframes buttonFadeInUp {
            0% {
                bottom: 30px;
                opacity: 0;
            }
        }

        /* button groups */
        .btn-group button {
            color: white;
            padding: 13px;
            cursor: pointer;
            float: left;
            width: 50%;
        }

        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            background-color: rgba(0,0,0,0.1);
        }


        /*share dropdown*/

        /* Dropdown Button */
        .dropsharebtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropsharebtn:hover, .dropshare-btn:focus {
            background-color: #3e8e41;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropshare {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropshare-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropshare-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropshare-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}

    </style>
</head>


<body>
    <div class="megaMenuAr">

        <div class="megaMenuAr-dropdown right ">
            <button class="dropbtn">الدورات
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="megaMenuAr-dropdown-content">
                <div class="megaMenu-parent-arrow">
                    <div class="megaMenu-arrow"></div>
                    <div id="art" class="megaMenuAr-tabcontent activate-tab">
                        <div class="row">
                            <div class="col l6">
                                <h5 class="center-align" style="font-weight: bold">Free</h5>
                                <p class="center-align">Course 1</p>
                                <p class="center-align">Iam BIG title Course name for test something (VFX)</p>
                                <p class="center-align">Course 1</p>
                                <p class="center-align">Course 1</p>
                            </div>
                            <div class="col l6">
                                <h5 class="center-align" style="font-weight: bold">Paid</h5>
                                <p class="center-align">Course 1</p>
                                <p class="center-align">Course 1</p>
                                <p class="center-align">Course 1</p>
                                <p class="center-align">Course 1</p>
                            </div>
                        </div>
                    </div>

                    <div id="photography" class="megaMenuAr-tabcontent">
                        <h3>Hello , world</h3>
                        <p>هذا نص اخر</p>
                    </div>

                    <div id="video" class="megaMenuAr-tabcontent">
                        <h3>Hello , world</h3>
                        <p>وهذا ايضا نص مختلف عن النصوص السابقة</p>
                    </div>

                    <div class="megaMenuAr-tab">
                        <button class="megaMenu-tablinks active" href="#" onclick="openCourse(event, 'art')" id="defaultOpen">رسم</button>
                        <button class="megaMenu-tablinks" href="#" onclick="openCourse(event, 'photography')">تصوير فوتوغرافي</button>
                        <button class="megaMenu-tablinks" href="#" onclick="openCourse(event, 'video')">تحرير فيديو</button>
                    </div>
                </div>
            </div>
        </div>

        <a href="#home" class="right">محتوى بصري</a>
        <a href="#news" class="right">متجر</a>
        <a href="#home" class="right">اعمال متدربين</a>
        <a href="#news" class="right">وظائف</a>
        <div class="dropdowno">
            <button class="dropbtn">Dropdown
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdowno-content z-depth-2">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
    </div>

    <!-- Facebook Reaction Code
    <div class="center-align" style="margin-top: 25%">
        <div class="feed">
            <button class="love-btn" style="width:50%">
                <i class="material-icons">favorite</i>

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
            </button>
        </div>
    </div>
    -->

    <div class="center-align col l4" style="margin-top: 25%">
        <!-- button Group  -->
        <!-- Three buttons in a group -->



<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="slider/jsSlider.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        function openCourse(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("megaMenuAr-tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("megaMenu-tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        jQuery(document).ready(function($) {
            $(".megaMenu-tablinks").hover(function() {

            });
        });

    </script>

    <script>
        $(function(){
            $(".love-btn").hover(function() {
                $(".reaction-box").fadeIn(100, function() {
                    $(".reaction-icon").each(function(i, e) {
                        setTimeout(function(){
                            $(e).addClass("show");
                        }, i * 100);
                    });
                });
            }, function() {
                setTimeout(function(){
                    $(".reaction-box").fadeOut(300, function(){
                        $(".reaction-icon").removeClass("show")
                    })
                }, 500);
            });
        })
    </script>
    <script>
        //love reaction function
        $(document).ready(function(){
            $(".love").click(function(){
                $(".love-btn").toggleClass("lovebtn-clicked");
            });
        });
    </script>

    <script>
        $(".share-btn").click(function(){
            $(this).removeClass("activeshare");
            $("shareBoard").addClass("activeshare");
        });
    </script>

<script>
    $('.toggle').on('click', function() {
        $('.container-signCard').stop().addClass('active');
    });

    $('.close').on('click', function() {
        $('.container-signCard').stop().removeClass('active');
    });

</script>

    <script>
        /* When the user clicks on the button,
 toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropsharebtn')) {

                var dropdowns = document.getElementsByClassName("dropshare-content");
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