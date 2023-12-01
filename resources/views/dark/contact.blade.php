<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
    <meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Geekfolio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="gogosprockets/assets/css/plugins.css">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="gogosprockets/assets/css/style.css">


</head>

<body class="main-bg">



    <!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg static main-bg">
        <div class="container">

            <!-- Logo -->
            <a href="#">
                <label class="title font-weight-bold" style="font-family: 'Racing Sans One',cursive; font-size: 30px;white-space: nowrap; cursor: pointer;" onclick="scroll_to_top()"><strong>GoGoSpr<i class="fa fa-cog fa-spin"></i>ckets!</strong></label>
                <h3 class="subtitle" style="font-size: 17px; font-weight: 400; margin-top: -5px; cursor: pointer;
                white-space: nowrap;" onclick="scroll_to_top()">Entertainment Production Services</h3>
            </a>
            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="{{ route('index') }}" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Home</span></a>
                        
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link " data-toggle="dropdown" href="{{ route('gallery') }}" role="button"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="rolling-text">Gallery</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="{{ route('contact') }}" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">
                                Booking And Contact</span></a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">Contact Us</h6>
                            <h1 class="fz-55">Let's make <br> your brand brilliant!</h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>We help our clients create events with the identity they want so people remember the product, party or ceremony long after the lights go out.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                            <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                            <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                                touch, we’d love to hear from you!</p>
                            <div class="phone fz-30 fw-600 mt-30 underline">
                                <a href="#0">626-379-6943</a>
                            </div>
                            <ul class="rest social-text d-flex mt-60">
                                <li class="mr-30">
                                    <a href="#0">Facebook</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                                required="required"></textarea>
                                        </div>
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-md butn-bord radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->

    </main>

    <!-- ==================== Start Footer ==================== -->

    <footer class="sub-bg">
        <div class="sub-footer pt-40 pb-40 bord-thin-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="#0">
                                <h4>GoGoSprockets!</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright d-flex">
                            <div class="ml-auto">
                                <p class="fz-13">© 2023 Geekfolio is Proudly Powered by <span class="underline"><a
                                            href="https://themeforest.net/user/ui-themez"
                                            target="_blank">Ui-ThemeZ</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== End Footer ==================== -->










    <!-- jQuery -->
    <script src="gogosprockets/assets/js/jquery-3.6.0.min.js"></script>
    <script src="gogosprockets/assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="gogosprockets/assets/js/plugins.js"></script>

    <script src="gogosprockets/assets/js/ScrollTrigger.min.js"></script>

    <!-- custom scripts -->
    <script src="gogosprockets/assets/js/scripts.js"></script>

</body>

</html>