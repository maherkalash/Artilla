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
        <div class="col l12 center mar-top">
            <!-- Control buttons -->
            <a class="btn green" onclick="filterSelection('rating')" name="category"><i class="fa fa-money" aria-hidden="true"></i></a>
            <a class="btn lighten-3 pink white-text" onclick="filterSelection('newest')" name="category">جديد</a>
            <a class="btn lighten-2 pink white-text" onclick="filterSelection('')" name="category"> اضافات</a>
            <a class="btn lighten-2 pink white-text" onclick="filterSelection('')" name="category"> لوازم فنية</a>
            <a class="btn lighten-2 pink white-text" onclick="filterSelection('')" name="category"> هدايا وتصاميم</a>
            <a class="btn lighten-2 pink white-text" onclick="filterSelection('')" name="category"> لوحات فنية</a>
            <a class="btn lighten-2 pink white-text" onclick="filterSelection('')" name="category">أعمال فنية</a>
            <a class="btn wetAsphalt white-text" onclick="filterSelection('all')" name="category" checked> الكل </a>
        </div>

        <div class="row">

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/1.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/2.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/3.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/4.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/5.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/6.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
                        <li class="popup-price"><a class="btn-floating waves-effect waves-light blue-grey darken-4" href="product_details.php"><i class="material-icons">add_shopping_cart</i></a><span class="popuptext">5 $</span></li>
                        <li><a class="btn-floating waves-effect waves-light grey lighten-3 activator"><i class="material-icons grey-text text-darken-3">more_vert</i></a></li>
                    </ul>
                    <div class="card-content row">
                        <div class="col l10">
                            <span class="card-title">Canvas - 126</span>
                            <p>By : <a href="#">@adnan_99</a></p>
                        </div>
                        <div class="right-align col l2">
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating rated"></span>
                            <span class="fa fa-star rating"></span>
                            <span class="fa fa-star rating"></span>
                        </div>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
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