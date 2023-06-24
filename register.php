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
                    <h2 class="font-weight-bold mb-4 text-center">Register</h2>
                    <form method="post" class="woocommerce-form woocommerce-form-register register">

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>User Name&nbsp;<span class="required">*</span></label>
                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="user-name" id="" autocomplete="user-name" value="" placeholder="Username">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Email address&nbsp;<span class="required">*</span></label>
                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="email" id="" autocomplete="email" value="" placeholder="Email">
                        </p>
                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                            <label>Password&nbsp;<span class="required">*</span></label>
                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="password" id="" autocomplete="password" value="" placeholder="Password">
                        </p>
                        <p class="woocommerce-FormRow form-row">
                            <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="b1c661ab82"><input type="hidden" name="_wp_http_referer" value="/my-account/">
                            <button type="submit" class="woocommerce-Button button" name="register" value="Register">Register</button>
                        </p>
                    </form>
                </div></div>
            </div>
        </div>
    </section>
    <!--shop category end-->
</main>
<!-- Footer section start -->
<?php include 'include/footer.php' ?>
<!-- Footer section End -->



  </body>
  

</html>