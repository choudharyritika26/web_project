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
                        <a class="nav-link" data-toggle="dropdown" href="{{route ('contact') }}" role="button"
                            aria-haspopup="true" aria-expanded="false"><span class="rolling-text">
                                Booking And Contact</span></a>
                        
                    </li>
                </ul>
            </div>

            {{-- <div class="search-form">
                <div class="form-group">
                    <input type="text" name="search" placeholder="Search">
                    <button><span class="pe-7s-search"></span></button>
                </div>
                <div class="search-icon">
                    <span class="pe-7s-search open-search"></span>
                    <span class="pe-7s-close close-search"></span>
                </div>
            </div> --}}
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="gogosprockets/assets/imgs/slider/slid3.jpg" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="project-details1.html">
                                                <span data-swiper-parallax="-2000">Wedding</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="gogosprockets/assets/imgs/slider/slid6.jpg" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="project-details1.html">
                                                <span data-swiper-parallax="-2000">Event Lighting</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="gogosprockets/assets/imgs/slider/slid11.jpg" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="project-details1.html">
                                                <span data-swiper-parallax="-2000">Production</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="gogosprockets/assets/imgs/slider/slid10.jpg" data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">© 2023 <br>
                                            Branding</h6>
                                        <h1>
                                            <a href="project-details1.html">
                                                <span data-swiper-parallax="-2000"></span> <br> <span
                                                    data-swiper-parallax="-3000">Entertainment</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- slider setting -->
            <div class="slider-contro">
                <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                    <div>
                        <span>Next Slide</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span>Prev Slide</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination dots"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->


    <main>

        <!-- ==================== Start About==================== -->

        <header class="crev-slider position-re sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="gogosprockets/assets/imgs/slider/slid2.jpg" style="height: 350px" alt="">
                    </div>

                    <div class="col-lg-8">  
                        <h1>About Us</h1>
                        <h6>GoGoSprockets! is a full-service, in-house production 
                            company committed to making your special event as completely 
                            unique and memorable as possible. This challenge is met with 
                            our valuable years of experience, large inventory of equipment,
                            our versatility and reliability, and most of all, our 
                            creative production staff! Some of our photos look 
                            familiar to you?? That's because... Yes! OUR pictures 
                            appear on others' websites. 'Cuz after you call them, who
                            do you think they call to do the job!</h6>
                    </div>
                </div>                   
            </div>   
        </header>
        
        <!-- ==================== End About ==================== -->

            <!-- ==================== Start Slider ==================== -->

            <header class="work-header section-padding pb-0">
                <div class="container mt-80">
                    <div class="row">
                        <div class="col-12">
                            <div class="caption">
                                {{-- <h6 class="sub-title">Our Works</h6> --}}
                                {{-- <h2 style="text-align: center">Gallery...</h2> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
            <!-- ==================== End Slider ==================== -->
    
    
    
                    <!-- ==================== Start brands ==================== -->
    
                    <div class="clients-carso2">
                        <div class="container">
                            <div class="row">
                                <h2 style="text-align: center">Some of our Clients...</h2>
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img1.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img2.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img3.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img4.jpg" style="height:200px; width:200px;" alt="">
                                </div>
                            </div>                   
                        </div>
    
                        <div class="container mt-4">
                            <div class="row">
                                
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img5.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img6.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img7.jpg" style="height:200px; width:200px;" alt="">
                                </div>
    
                                <div class="col-lg-3">
                                    <img src="gogosprockets/assets/imgs/client/img8.jpg" style="height:200px; width:200px;" alt="">
                                </div>
                            </div>                   
                        </div>
    
                    </div>
    
                    <!-- ==================== End brands ==================== -->
    


        <!-- ==================== Start Slider ==================== -->

        <header class="work-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-12">
                        <div class="caption">
                            {{-- <h6 class="sub-title">Our Works</h6> --}}
                            <h2 style="text-align: center">Gallery...</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="portfolio section-padding pb-100">
            <div class="container-xxl">

                <div class="row">
                    
                    <!-- filter links -->
                    <div class="filtering col-12 mb-80 text-center">
                        <div class="filter">
                            <span class="text">Filter By :</span>
                            <span data-filter='*' class='active' data-count="08">All</span>
                            <span data-filter='.brand' data-count="03">Wedding</span>
                            <span data-filter='.app' data-count="02">Event Lighting</span>
                            <span data-filter='.pro' data-count="03">Production</span>
                            <span data-filter='.web' data-count="04">Entertainment</span>
                            
                        </div>
                    </div>
                </div>

                <div class="gallery metro text-center">

                    <div class="row">

                        <div class="col-lg-3 col-md-6 items web info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img7.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items app info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img4.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        

                        <div class="col-lg-6 col-md-6 items brand info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img1.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        

                        <div class="col-lg-3 col-md-6 items web info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img8.jpg" alt="image">
                                    </div>
                                </a>

                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 items brand info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img2.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 items app info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img5.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items pro info-overlay height-1 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img11.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-6 items web info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img6.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items brand info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img3.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 items pro info-overlay height-2 mb-30">
                            <div class="item-img o-hidden">
                                <a href="project-details1.html" class="imago wow">
                                    <div class="inner wow">
                                        <img src="gogosprockets/assets/imgs/gallery/img10.jpg" alt="image">
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        

                    </div>

                </div>

            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->


    </main>


    <!-- ==================== Start Footer ==================== -->

    <footer class="pt-80 sub-bg">
        <div class="container pb-80">
            <div class="row">
                <div class="col-lg-3">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Address</h6>
                        </div>
                        <div class="text">
                            <p>Germany — 785 15h Street, Office 478 Berlin, De 81566</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Say Hello</h6>
                        </div>
                        <div class="text">
                            <p class="mb-10">
                                <a href="#0">hello@design.com</a>
                            </p>
                            <h5>
                                <a href="#">+1 840 841 25 69</a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 md-mb50">
                    <div class="tit mb-20">
                        <h6>Social</h6>
                    </div>
                    <ul class="rest social-text">
                        <li>
                            <a href="#0">Facebook</a>
                        </li>
                        <li>
                            <a href="#0">Twitter</a>
                        </li>
                        <li>
                            <a href="#0">LinkedIn</a>
                        </li>
                        <li>
                            <a href="#0">Instagram</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="tit mb-20">
                        <h6>Newsletter</h6>
                    </div>
                    <div class="subscribe">
                        <form action="contact.php">
                            <div class="form-group rest">
                                <input type="email" placeholder="Type Your Email">
                                <button type="submit">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer pt-40 pb-40 bord-thin-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="#0">
                                <img src="assets/imgs/logo-light.png" alt="">
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

    <!-- ==================== Start Slider ==================== -->

    <header class="work-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row">
                <div class="col-12">
                    <div class="caption">
                        {{-- <h6 class="sub-title">Our Works</h6> --}}
                        {{-- <h2 style="text-align: center">Gallery...</h2> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->











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