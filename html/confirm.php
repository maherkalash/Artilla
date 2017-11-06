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

    <form id="confirmForm" action="">

        <h3 class="right-align">تأكيد الشراء</h3>

        <!-- One "tab" for each step in the form: -->
        <div class="tab row">
            <h5 class="right-align">معلومات شخصية- </h5>
            <div class="input-field col s6">
                <input type="text" class="validate">
                <label for="last_name">First name</label>
            </div>
            <div class="input-field col s6">
                <input  type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" placeholder="@username" disabled>
            </div>
            <div class="input-field col s12">
                <input id="last_name" type="text" placeholder="Address">
            </div>
        </div>

        <div class="tab row">
            <h5 class="right-align">معلومات المنتج- </h5>
            <div class="col l6">
                <div class="card product-card">
                    <div class="card-image">
                        <img src="imgs/store/2.jpg"class="imgs-store">
                    </div>
                    <ul class="card-action-buttons">
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
            <div class="col l6">
                <table class="bordered highlight">
                    <tbody>
                    <tr>
                        <td><a href="#">canvas - 126</a></td>
                        <td class="right-align">اسم المنتج</td>
                    </tr>
                    <tr>
                        <td><a href="#">@adnan_99</a></td>
                        <td class="right-align">الرسام</td>
                    </tr>
                    <tr>
                        <td>A_5464ghf</td>
                        <td class="right-align">باركود</td>
                    </tr>
                    <tr>
                        <td>اعمال فنية</td>
                        <td class="right-align">الصنف</td>
                    </tr>
                    <tr>
                        <td>5 $</td>
                        <td class="right-align">السعر</td>
                    </tr>
                    <tr>
                        <td>blue</td>
                        <td class="right-align">اللون</td>
                    </tr>
                    <tr>
                        <td>small</td>
                        <td class="right-align">الحجم</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tab">

                <p>
                    <input name="group1" type="radio" id="test1" />
                    <label for="test1">كاش عن طريق مكتبنا في دمشق</label>
                </p>
                <p>
                    <input name="group1" type="radio" id="test2" />
                    <label for="test2">تحويل من محافظة لمجافظة</label>
                </p>
                <p>
                    <input class="with-gap" name="group1" type="radio" id="test3"  />
                    <label for="test3">التحويل الى مكتبنا في دمشق</label>
                </p>
                <p>
                    <input name="group1" type="radio" id="test4" disabled="disabled" />
                    <label for="test4">E-payment</label>
                </p>
        </div>

        <div class="tab">
            <h5 class="right-align">
                شكرا لك , سنقوم مراسلتك خلال مدة اقصاها 24 ساعة
            </h5>

        </div>

        <div class="row" style="overflow:auto;">
            <div style="float:right;">
                <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn wetAsphalt" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step-confirm"></span>
            <span class="step-confirm"></span>
            <span class="step-confirm"></span>
            <span class="step-confirm"></span>
        </div>

    </form>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/customjq.js"></script>
    <script type="text/javascript" src="js/customjs.js"></script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("confirmForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:

            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step-confirm")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step-conirm");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
</body>
</html>