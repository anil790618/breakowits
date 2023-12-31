<!DOCTYPE html>
<html lang="zxx">

<?php include 'include/header.php' ?>

<body id="top-header">



    <?php include 'include/nav.php' ?>





    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8">
                    <div class="title-block">
                        <h1>Contact Us</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Contact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map section start -->
    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map section End -->

    <!-- Contact section start -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-xl-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">contact</span>
                        <h3>For more information about our courses, get in touch</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Email Us</p>
                                <h4>support@email.com</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Make a Call</p>
                                <h4>+45 234 345467</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Corporate Office</p>
                                <h4>Moon Street Light Avenue, 14/05
                                    Jupiter, JP 80630 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="contact__form form-row " method="post"
                        id="contactForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" cols="30" rows="6" class="form-control"
                                        placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mt-4 ">
                                <button class="btn btn-main" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section End -->



    <?php include 'include/footer.php' ?>


</body>

</html>