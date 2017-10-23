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

    <div class="container">
        <div class="row">
            <div class="col l4">
                <input type="text" id="myInput" class="right-align" onkeyup="SearchQAFunc()" placeholder="ابحث عن سؤال ...">
                <ul class="collection with-header" id="myUL-qs">
                    <li> <a href="#!" class="collection-item right-align"><span id="dots-coll-ques"> هاي </span><span class="left"><i class="material-icons tiny">comment</i>20</span></a></li>
                    <li> <a href="#!" class="collection-item right-align active"><span id="dots-coll-ques"> ماهي افضل الايقونات للتصميم ؟ </span><span class="left"><i class="material-icons tiny">comment</i>110</span></a></li>
                    <li> <a href="#!" class="collection-item right-align"><span id="dots-coll-ques"> كيف اند هاو تو سيف ايماج </span><span class="left"><i class="material-icons tiny">comment</i>63</span></a></li>
                    <li> <a href="#!" class="collection-item right-align"><span id="dots-coll-ques"> هاي </span><span class="left"><i class="material-icons tiny">comment</i>88</span></a></li>
                    <li> <a href="#!" class="collection-item right-align"><span id="dots-coll-ques"> كيف اند هاو تو سيف ايماج </span><span class="left"><i class="material-icons tiny">comment</i>7</span></a></li>
                </ul>
            </div>
            <div class="col l8">
                <input class="right-align white mar-pad-ques-form" type="text" placeholder="العنوان">
                <textarea class="right-align materialize-textarea white mar-pad-ques-textarea" type="text" placeholder="السؤال"></textarea>
                <a class="waves-effect waves-light btn pink lighten-2 right">اضافة سؤال</a>
                <a class="waves-effect waves-light btn grey lighten-1 grey-text text-darken-4">الغاء</a>

            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>

</body>
</html>