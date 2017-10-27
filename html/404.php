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
    <!--Import Slider Css-->
    <link type="text/css" rel="stylesheet" href="slider/cssSlider.css"/>
    <!--Import Gallery Css-->
    <link type="text/css" rel="stylesheet" href="slider/cssSlider.css"/>
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>

    <style>
        .err-code {
            font-size: 16rem;
            color : #2c3e50;
        }
    </style>
</head>


<body class="white">
<div class="megaMenuAr z-depth-1">
    <div class="container">
        <div class="megaMenuAr-dropdown right ">
            <button class="dropbtn">الدورات
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="megaMenuAr-dropdown-content">
                <div id="art" class="megaMenuAr-tabcontent">
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
                    <button class="megaMenu-tablinks" onclick="openCourse(event, 'art')" id="defaultOpen">رسم</button>
                    <button class="megaMenu-tablinks" onclick="openCourse(event, 'photography')">تصوير فوتوغرافي</button>
                    <button class="megaMenu-tablinks" onclick="openCourse(event, 'video')">تحرير فيديو</button>
                </div>
            </div>
        </div>
        <a href="gallery.php" class="right">محتوى بصري</a>
        <a href="store.php" class="right">متجر</a>
        <a href="gallery.php" class="right">اعمال متدربين</a>
        <a href="#news" class="right">وظائف</a>
    </div>
</div>
   <div class="container">
       <div class="row mar-top">
           <div class="col l5 s12">
               <img src="imgs/404img.jpg" class="responsive-img">
           </div>
           <div class="col l7 s12">
               <h4 class="wetAsphalt-text err-code">404</h4>
               <h5>OPS ! Page Not Found , if You think You arrived To This page Please <a href="#">Contact Us</a> . </h5>
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
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>
    <script type="text/javascript" src="slider/jsSlider.js"></script>
    <script type="text/javascript" src="gallery/jsGallery.js"></script>

</body>
</html>