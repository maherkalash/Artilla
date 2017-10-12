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

    <style>
        /*
        .hover-tab { margin: 5px 0; }

        .tab-titles {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
        }


        .tab-btn a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            text-align: right;
            transition: 0.3s;
        }

        .tab-btn a:hover {
            background-color: #555;
            color: white;
            border-right: 4px solid pink;

        }

        .tab-content{
            display: none;
        }*/

        /* Responsive layout Gallery */
        .layg { /* LAYG Mean : Layer Gallery :) */
            float: left;
            width: 25%;
            padding: 0;
        }


        @media (max-width: 800px) {
            .layg {
                width: 50%;
            }
        }

        @media (max-width: 600px) {
            .layg {
                width: 100%;
            }
        }


        .layg img {
            margin-top: 5px;
            width: 100%;
            padding: 10px 10px 2rem 10px;
            display: block;
            border-radius: 15px 15px  0 0 !important;
        }


        /* Image Hover Effect  */

        .container {
            position: relative;
            width: 100%;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: 0.3s ease;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 5px ;
        }

        .container:hover .overlay {
            opacity: 1;
        }

        /* Element Position in Image overlay */

        /* Top left text */
        .top-left {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        /* Top right text */
        .top-right {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        /* Bottom right text */
        .bottom-right {
            position: absolute;
            bottom: 5px;
            right: 20px;
        }

        /* Bottom left text */
        .bottom-left {
            position: absolute;
            bottom: 2px;
            left: 15px;
        }

        /* Bottom left text */
        .sections {
            position: absolute;
            bottom: 45px;
            left: 15px;
        }

        /* Centered text */
        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


        /* OVERLAY Component */

        /*** Spaces ***/
        .no-pad-sides { padding : 0 0 !important }

        /* Love button */

        .btn-love {
            background-color: #f06292 ;
            color: #fff !important;
            padding: 10px 20px;
            border-radius: 4px;
            border: 2px solid #f06292;
            text-decoration: none !important;
        }

        .btn-love:hover {
            background-color: #fff ;
            color: #f06292 !important;
            border: 2px solid #fff;
            transition: 0.3s;

        }

        /* Label */
        .label {
            color: white;
            padding: 0 15px;
            border-radius: 20px;
        }

        /*
        .success {background-color: #4CAF50;}
        .info {background-color: #2196F3;}
        .warning {background-color: #ff9800;}
        .danger {background-color: #f44336;}
        */
        .tag {
            background-color: transparent;
            color: white;
            border: 2px solid #fff ;
        }


        /* h2 and h5 image style */
        .artName-text {
            margin : 0 !important;
            color : #fff ;
        }

        /* Modal Design */
        /* The Modal (background) */
        .modal-artilla {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: hidden; /* Enable scroll if needed */
            background-color: #212121; /* Fallback color */
            -webkit-animation-name: fadeIn; /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s

        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 50px;
            font-weight: bold;
            transition: 0.4S;
        }

        .close:hover,
        .close:focus {
            color: #EEE;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 1px 15px;
            background-color: transparent;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
            background-color: black;
            height: auto;
        }


        .modal-footer {
            padding: 1px 15px;
            color: white;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }

        @keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }

        .imgwrapper {
            width: 80%;
        }
    </style>
</head>


<body class="grey lighten-4">

<div class="row-gallery">
    <div class="col-sm-3 layg">

        <div class="container no-pad-sides">
            <img src="imgs/gallery/2.jpg" class="image">
            <div class="overlay" id="myBtn">
                <div class="top-left text-white">
                    <h2 class="artName-text">Art Name </h2>
                    <h5 class="artName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o white-text" aria-hidden="true"></i><span class="white-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love" href="#modal1">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

        <div class="container no-pad-sides">
            <img src="imgs/gallery/14.jpg" class="image">
            <div class="centered">
                <i class="fa fa-play-circle-o fa-4x white-text" aria-hidden="true"></i>
            </div>
            <div class="overlay" id="myBtn">
                <div class="top-left text-white">
                    <h2 class="artName-text">Art Name </h2>
                    <h5 class="artName-text">By @Artist</h5>
                </div>
                <div class="sections">
                    <span class="label tag">Art</span>
                    <span class="label tag">Design</span>
                    <span class="label tag">illustartor</span>
                </div>
                <div class="bottom-left">
                    <i class="fa fa-smile-o white-text" aria-hidden="true"></i><span class="white-text"> 2,465 </span>
                </div>
                <div class="centered">
                    <a class="btn-love" href="#modal1">
                        <i class="fa fa-heart" aria-hidden="true"></i> 40,537
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="col-sm-3 layg">

    </div>

    <div class="col-sm-3 layg">


    </div>

    <div class="col-sm-3 layg">


    </div>
</div>


<!-- The Modal -->
<div id="myModal" class="modal-artilla">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h3>Project Name</h3>
        </div>
        <div class="modal-body">
           <div class="row">
               <div class="col l9">
                   <div class="imgwrapper">
                     <img class="responsive-img" src="imgs/gallery/2.jpg">
                   </div>
               </div>
               <div class="col l3">

               </div>
           </div>
        </div>
        <div class="modal-footer">
            <h3>Modal Footer</h3>

        </div>
    </div>

</div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>