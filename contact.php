<!DOCTYPE html>
<html lang="en">
<head><title>Edugate | Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css" id="color-skins">
    <!--link(type="text/css", rel='stylesheet', href='#', id="color-skins")-->
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/color-1.css');--><!--    }--></head>
<body>
<?php
//include header
include('_includes/header.php');
include('_includes/menu_contact.php');
?>
            </div>
        </div>
    </div>
</header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
            <div class="section background-opacity page-title set-height-top contactSlide">
                </div>
                <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <form class="bg-w-form contact-form noTopPadding">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">NAME <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">EMAIL <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">PURPOSE</label><select class="form-control form-input selectbox">
                                            <option value="">Please Select</option>
                                            <option value="">example 1</option>
                                            <option value="">example 2</option>
                                            <option value="">example 3</option>
                                        </select><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label">SUBJECT</label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label">HOW CAN WE HELP? <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span>SUBMIT CONTACT</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<?php
//include footer
include('_includes/footer.php');
?>
<!-- THEME SETTING-->
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div>
<!-- LOADING--><!-- JAVASCRIPT LIBS--><!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');--><!--    }-->
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING SCRIPTS FOR PAGE-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="assets/js/pages/contact.js"></script>
</body>
</html>