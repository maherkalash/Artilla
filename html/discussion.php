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
            <!-- Question related -->
            <div class="col l4">
                <a class="btn btn-block pink lighten-2">اضافة سؤال</a>
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
                <!-- Question Here -->
                <div class="card">
                    <div class="card-content wetAsphalt-text">
                        <div class="row">
                            <div class="col l2 right">
                                <img src="http://via.placeholder.com/100x100" class="responsive-img">
                                <h4 class="left"><i class="material-icons ">comment</i>30</h4>
                            </div>
                            <div class="col l10 right">
                                <span class="card-title right-align">ما هي افضل ايقونات للتصميم ؟</span>
                                <p class="right-align">
                                    اثناء تصفحي للانترنت وجدت عدة مواقع تتيح تحميل ايقونات بجودات مختلفة وبلواحق مختلفة كالــ SVG وال PNG , JPG , PSD وغيرها ماهي المواقع المجانية التي تتيح هذه الخدمة ؟
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#" class="midnightBlue-text">@username</a>
                    </div>
                </div>
                <!-- Users Comments here -->
                <div class="card">
                    <div class="card-content wetAsphalt-text">
                        <div class="row">
                            <div class="col l2 right">
                                <img src="http://via.placeholder.com/100x100" class="responsive-img">
                            </div>
                            <div class="col l10 right">
                                <span class="card-title right-align">Adnan Diab</span>
                                <p class="right-align">
                                    هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                </p>
                                <!-- Reply  -->
                                <div class="row mar-top">
                                    <div class="col l2 right">
                                        <img src="http://via.placeholder.com/100x100" class="responsive-img">
                                    </div>
                                    <div class="col l10 right">
                                        <span class="card-title right-align">Maher Kalash <span style="font-size: 15px ;">@username_replyuser</span></span>
                                        <p class="right-align">
                                            هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                        </p>
                                    </div>
                                </div>
                                <div class="row mar-top">
                                    <div class="col l2 right">
                                        <img src="http://via.placeholder.com/100x100" class="responsive-img">
                                    </div>
                                    <div class="col l10 right">
                                        <span class="card-title right-align">Maher Kalash <span style="font-size: 15px ;">@username_replyuser</span></span>
                                        <p class="right-align">
                                            هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                        </p>
                                    </div>
                                </div>
                                <!-- Reply Box -->
                                <div class="card z-depth-0 " id="reply-box" style="display: none;">
                                    <div class="card-content wetAsphalt-text">
                                        <textarea id="textarea1" class="materialize-textarea right-align" placeholder="اترك رد ...."></textarea>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="wetAsphalt btn waves-effect waves-light">رد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="midnightBlue-text pointer" id="reply-button" onclick="document.getElementById('reply-box').style.visibility='visible'">رد</a>
                        <a href="#" class="right wetAsphalt-text">@username_commenter</a>
                    </div>
                </div>

                <!-- Another Users Comments here -->
                <div class="card">
                    <div class="card-content wetAsphalt-text">
                        <div class="row">
                            <div class="col l2 right">
                                <img src="http://via.placeholder.com/100x100" class="responsive-img">
                            </div>
                            <div class="col l10 right">
                                <span class="card-title right-align">Adnan Diab</span>
                                <p class="right-align">
                                    هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                </p>
                                <!-- Reply  -->
                                <div class="row mar-top">
                                    <div class="col l2 right">
                                        <img src="http://via.placeholder.com/100x100" class="responsive-img">
                                    </div>
                                    <div class="col l10 right">
                                        <span class="card-title right-align">Maher Kalash <span style="font-size: 15px ;">@username_replyuser</span></span>
                                        <p class="right-align">
                                            هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                        </p>
                                    </div>
                                </div>
                                <div class="row mar-top">
                                    <div class="col l2 right">
                                        <img src="http://via.placeholder.com/100x100" class="responsive-img">
                                    </div>
                                    <div class="col l10 right">
                                        <span class="card-title right-align">Maher Kalash <span style="font-size: 15px ;">@username_replyuser</span></span>
                                        <p class="right-align">
                                            هذا نص تجريبي لمحاكاة الاجابة التي ستوضع في هذه المنطقة لاعادة تصميم هذه القسم في حال وجود خطا بالتصميم او اذا كان يحوي بعض الاخطاء على الاجهزة المحمولة والخليوية
                                        </p>
                                    </div>
                                </div>
                                <!-- Reply Box -->
                                <div class="card z-depth-0 " id="reply-box" style="display: none;">
                                    <div class="card-content wetAsphalt-text">
                                        <textarea id="textarea1" class="materialize-textarea right-align" placeholder="اترك رد ...."></textarea>
                                    </div>
                                    <div class="card-action">
                                        <a href="#" class="wetAsphalt btn waves-effect waves-light">رد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <a class="midnightBlue-text pointer" id="reply-button" onclick="document.getElementById('reply-box').style.visibility='visible'">رد</a>
                        <a href="#" class="right wetAsphalt-text">@username_commenter</a>
                    </div>
                </div>


                <!-- Add Comment Box -->
                <div class="card">
                    <div class="card-content wetAsphalt-text">
                        <textarea id="textarea1" class="materialize-textarea right-align" placeholder="اترك تعليقا ...."></textarea>
                    </div>
                    <div class="card-action">
                        <a href="#" class="midnightBlue btn waves-effect waves-light">تعليق</a>
                    </div>
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