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

</body>
</html>