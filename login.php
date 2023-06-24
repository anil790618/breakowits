<!DOCTYPE html>
<html lang="zxx">

<?php include 'include/header.php' ?>

<body id="top-header">

    
    <?php include 'include/nav.php' ?>

        




<main class="site-main page-wrapper woocommerce single single-product">
    <section class="space-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-div m-auto">
                        <div class="woocommerce-notices-wrapper"></div>
                        <h2 class="font-weight-bold mb-4 text-center">Login</h2>
                        <form class="woocommerce-form woocommerce-form-login login" method="post">
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="username" id="username" autocomplete="username" value="" placeholder="Username or Email">
                            </p>
                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="password">Password&nbsp;<span class="required">*</span></label>
                                <input class="woocommerce-Input woocommerce-Input--text input-text form-control" type="password" name="password" id="password" autocomplete="current-password" placeholder="password">
                            </p>
                            <p class="form-row">
                                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                                <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                            </p>
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--shop category end-->
</main>
<!-- Footer section start -->
<?php include 'include/footer.php' ?>
<!-- Footer section End -->

<div class="fixed-btm-top">
	<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
</div>




    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 4.5 -->
    <script src="assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendors/jquery.isotope.js"></script>
    <script src="assets/vendors/imagesloaded.html"></script>
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <script src="assets/vendors/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&amp;callback=initMap"></script>    
    <script src="assets/js/script.js"></script>


  </body>
  
<!-- Mirrored from themeturn.com/tf-db/berkowits/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:35:04 GMT -->
</html>