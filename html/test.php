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
            z-index: 1;
            padding-top: 10px;
            right: 0;
        }
        /* dropdown arrow */
        .megaMenuAr-dropdown-content::after{
            content: "";
            position: absolute;
            top: -10px;
            right: 8%;
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
        }

        /* Create an active/current "tab button" class */
        div.megaMenuAr-tab button.active {
            background-color: #34495e;
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

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdowno {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdowno-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdowno-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdowno-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu on hover */
        .dropdowno:hover .dropdowno-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdowno:hover .dropbtn {
            background-color: #3e8e41;
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


        /* share style  */

        .share-btn {
            width: 6rem;
            line-height: 2em;
            padding: 1.5rem 6rem;
            position: relative;
            font-size: 25px;
            text-align: center;
            transition: all 0.25s;
            color: #333 ;
            background: transparent;
            border: 2px solid #ddd;

        }
        .share-btn:hover {
            color: rgb(200,200,200);
            background: #333;
            border: 2px solid #eee;

        }

        .shareBoard {
            width: 6rem;
            padding: 1.5rem 6rem;
            position: absolute;
            top:0;
            right: 0;

        }

        .activeshare {
            z-index: 5;
        }

        .large-share-btn {
            /* width: 6rem; */
            padding: 1rem 6rem;
            line-height: 1rem;
        }




    </style>
</head>


<body>
    <div class="megaMenuAr">

        <div class="megaMenuAr-dropdown right ">
            <button class="dropbtn">الدورات
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="megaMenuAr-dropdown-content">
                <div id="art" class="megaMenuAr-tabcontent activate-tab">
                    <h3>Hello , world</h3>
                    <p>هذا النص تجربة من اجل معرفة المشاكل المتعلقة باللغة العرية .</p>
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
        <a href="#home" class="right">محتوى بصري</a>
        <a href="#news" class="right">متجر</a>
        <a href="#home" class="right">اعمال متدربين</a>
        <a href="#news" class="right">وظائف</a>
    </div>

    <!-- Facebook Reaction Code -->
    <div class="center-align" style="margin-top: 25%">
        <div class="feed">
            <a class="love-btn">
                <i class="material-icons">favorite</i>

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
        <div class="share-btn activeshare">
            <div class="shareBoard row">
                <a class="btn  btn-facebook large-share-btn">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="btn  btn-facebook large-share-btn">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="btn  btn-facebook large-share-btn">
                    <span class="fa fa-facebook"></span>
                </a>
                <a class="btn  btn-facebook large-share-btn">
                    <span class="fa fa-facebook"></span>
                </a>
            </div>
        </div>
    </div>


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




</body>
</html>