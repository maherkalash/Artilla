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
    <!--Import Custom Css-->
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
</head>


<body>

    <nav class="wetAsphalt">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo white-text" style="z-index: 100">Artilla</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="collapsible.html">حول ارتيلا</a></li>
                    <li><a href="badges.html">أتصل بنا</a></li>
                    <li><a href="sass.html">الرئيسية</a></li>
                </ul>
            </ul>
        </div>
    </nav>

    <!--
    <div class="container-signForm-mob white z-depth-3 col s12 hide-on-large-only">
        <ul class="tabs midnightBlue tabs-fixed-width">
            <li class="tab col s3"><a class="white-text active" href="#login">تسجيل الدخول</a></li>
            <li class="tab col s3"><a class="white-text" href="#register">انشاء حساب</a></li>
        </ul>
        <div id="login" class="col s12">
            <form class="col s12">
                <div class="form-container">
                    <h4 class="wetAsphalt-text right-align">تسجيل الدخول لأرتيلا </h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" placeholder="E-mail Or Username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <br>
                    <center>
                        <button class="btn waves-effect waves-light midnightBlue" type="submit" name="action">تسجيل الدخول</button>
                        <br>
                        <br>
                        <a href="#" class="grey-text text-darken-1">نسيت كلمة السر ؟</a>
                    </center>
                </div>
            </form>
        </div>
        <div id="register" class="col s12">
            <form class="col s12">
                <div class="form-container">
                    <h4 class="wetAsphalt-text right-align">مرحبا بك في أرتيلا</h4>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" placeholder="Firstname">
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" class="validate" placeholder="Repeat Password">
                        </div>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light pink lighten-2" type="submit" name="action">انشاء حساب</button>
                    </center>
                </div>
            </form>
        </div>
    </div> -->


    <div class="container-signForm white z-depth-3 col s12">
        <ul class="tabs midnightBlue tabs-fixed-width">
            <li class="tab col s3"><a class="white-text active" href="#login">تسجيل الدخول</a></li>
            <li class="tab col s3"><a class="white-text" href="#register">انشاء حساب</a></li>
        </ul>
        <div id="login" class="col s12">
            <form class="col s12">
                <div class="form-container">
                    <h4 class="wetAsphalt-text right-align">تسجيل الدخول لأرتيلا </h4>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" placeholder="E-mail Or Username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <br>
                    <center>
                        <button class="btn waves-effect waves-light midnightBlue" type="submit" name="action">تسجيل الدخول</button>
                        <br>
                        <br>
                        <a href="#" class="grey-text text-darken-1">نسيت كلمة السر ؟</a>
                    </center>
                </div>
            </form>
        </div>
        <div id="register" class="col s12">
            <form class="col s12">
                <div class="form-container">
                    <h4 class="wetAsphalt-text right-align">مرحبا بك في أرتيلا</h4>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" placeholder="Firstname">
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" class="validate" placeholder="Repeat Password">
                        </div>
                    </div>
                    <center>
                        <button class="btn waves-effect waves-light pink lighten-2" type="submit" name="action">انشاء حساب</button>
                    </center>
                </div>
            </form>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>

</body>
</html>