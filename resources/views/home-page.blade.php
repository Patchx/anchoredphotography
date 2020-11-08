<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Anchored Photography</title>
</head>

<body>
    <div style="position:relative">
        <img
            class="d-none d-sm-block"
            src="/images/site_images/transparent_site_logo.png"
            style="
                position: absolute;
                z-index: 2;
                width: 420px;
                top: 40px;
                left: 31%;
            "
        />

        <img
            class="d-block d-sm-none"
            src="/images/site_images/transparent_site_logo.png"
            style="
                position: absolute;
                z-index: 2;
                width: 380px;
                top: 40px;
                left: 10%;
            "
        />

        <div
            class="text-center"
            style="
                position: absolute;
                top: 280px;
                width: 100%;
                z-index: 2;
                color: white;
                text-shadow: 1px 1px #124562;
                font-family: 'Times New Roman', Times, serif;
                font-weight: 100;
                font-size: 20px;
                padding: 20px;
            "
        >
            <span>
                <a 
                    href="#about-us"
                    style="color:white; text-shadow:1px 1px #124562;"
                >About</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <span>
                <a 
                    href="#contact"
                    style="color:white; text-shadow:1px 1px #124562;"
                >Contact</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <span>
                <a 
                    href="#news"
                    style="color:white; text-shadow:1px 1px #124562;"
                >News</a>
                &nbsp;&nbsp;&nbsp;
            </span>

            <span>
                <a 
                    href="#portfolio"
                    style="color:white; text-shadow:1px 1px #124562;"
                >Portfolio</a>
                &nbsp;&nbsp;&nbsp;
            </span>
        </div>

        <div 
            id="fh5co-hero-carousel" 
            class="carousel slide header" 
            style="position:relative;"
            data-ride="carousel"
        >
            <div class="carousel-inner">
                <div 
                    class="carousel-item active"
                >
                    <img 
                        class="d-block w-100 home-bg" 
                        src="/images/site_images/home-bg.png"
                    />
                </div>

                <div class="carousel-item">
                    <img 
                        class="d-block w-100 home-bg" 
                        src="/images/site_images/img2.png"
                    />
                </div>

                <div class="carousel-item">
                    <img 
                        class="d-block w-100 home-bg" 
                        src="/images/site_images/img3.png"
                    />
                </div>
            </div>

            <ul class="carousel-indicators">
                <li 
                    class="active" 
                    data-target="#fh5co-hero-carousel" 
                    data-slide-to="0" 
                    aria-current="location"
                ></li>
                
                <li 
                    data-target="#fh5co-hero-carousel" 
                    data-slide-to="1"
                ></li>
                
                <li 
                    data-target="#fh5co-hero-carousel" 
                    data-slide-to="2"
                ></li>
            </ul>
        </div>
    </div>

    <div 
        id="about-us"
        class="container-fluid fh5co-about-us" 
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <svg class="back-bg" viewBox="0 0 535 618">
                        <defs>
                            <linearGradient 
                                id="PSgrad_0" 
                                x1="0%" 
                                x2="100%" 
                                y1="0%" 
                                y2="0%"
                            >
                                <stop 
                                    offset="0%" 
                                    stop-color="rgb(88,192,255)" 
                                    stop-opacity="1"
                                />
                                
                                <stop 
                                    offset="100%" 
                                    stop-color="rgb(18,112,228)" 
                                    stop-opacity="1"
                                />
                            </linearGradient>
                        </defs>

                        <path fill-rule="evenodd" fill="rgb(18, 112, 228)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                        
                        <path fill="url(#PSgrad_0)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                    </svg>

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img 
                                src="/images/site_images/slide.png" 
                                alt="" 
                                class="img-fluid"
                            />
                        </div>

                        <div>
                            <img 
                                src="/images/site_images/slide.png" 
                                alt="" 
                                class="img-fluid"
                            />
                        </div>

                        <div>
                            <img 
                                src="/images/site_images/slide.png" 
                                alt="" 
                                class="img-fluid"
                            />
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>ABOUT US</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.</p>

                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fh5co-portfolio" id="portfolio">
        <div class="container">
            <h2>OUR PORTFOLIO</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad </p>
            <h3>FILTER BY:</h3>
            <div class="portfolio-tab portfolioFilter">
                <ul>
                    <li><a href="#" data-filter="*" class="active">ALL</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="portfolioContainer">
                    <div class="gallary building nature green">
                        <img src="/images/site_images/img1.png" alt="">

                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary center-img wedding">
                        <img src="/images/site_images/img2.png" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary building">

                        <img src="/images/site_images/img4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary center-img landscape nature">
                        <img src="/images/site_images/img3.png" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary">
                        <img src="/images/site_images/img5.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary center-img landscape">
                        <img src="/images/site_images/img6.png" alt="">

                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>


                    <div class="gallary building nature">
                        <img src="/images/site_images/img4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/images/site_images/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/images/site_images/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row portfolioFilter">
                <ul class="indicators">
                    <li><a href="#" data-filter=".landscape" class="active"></a>
                    </li>
                    <li><a href="#" data-filter=".green"></a>
                    </li>
                    <li><a href="#" data-filter=".building"></a>
                    </li>
                    <li><a href="#" data-filter=".wedding"></a>
                    </li>
                    <li><a href="#" data-filter=".nature"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container-fluid fh5co-news" id="news">
        <div class="container">
            <h2>OUR NEWS</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/images/site_images/news1.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/images/site_images/news2.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/images/site_images/news3.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid fh5co-footer">
        <div class="container" id="contact">
            <div class="row">
                <div class="col-lg-5">
                    <h2>LET'S CHAT!</h2>
                    
                    <p>
                        <span class="email">
                            <img 
                                src="/images/site_images/email.png"
                                alt="email icon"
                            />
                        </span>

                        <b><a href="mailto:anchoredphotographyFL@gmail.com">
                                anchoredphotographyFL@gmail.com
                            </a>
                        </b>
                    </p>
                    
                    <p>
                        <span class="phone">
                            <img 
                                src="/images/site_images/phone.png" 
                                alt="phone icon"
                            />
                        </span>

                        <b><a href="tel:561-502-9176">
                            561-502-9176
                        </a></b>
                    </p>
                                        
                    <ul class="navbar-nav float-left social-links footer-social">
                        <li class="nav-item">
                            <a 
                                class="nav-link" 
                                href="https://facebook.com/AnchoredPhotographybyRachel"
                            >
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a 
                                class="nav-link" 
                                href="https://instagram.com/anchoredphotographyFL"
                            >
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-7">
                    <div class="form-box">
                        <h4 style="margin-left:20px">Contact Me</h4>
                        <hr />

                        <table class="table table-light table-borderless">
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Name...">
                                </td>

                                <td><input type="text" class="form-control" placeholder="Email address">
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2"><textarea class="form-control" placeholder="You Message"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button type="submit">
                                        SUBMIT NOW
                                    </button>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p>&copy; 2018 Photogenic. All rights Reserved. Design by <a href="https://freehtml5.co" target="_blank">FreeHTML5.co</a>.</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>
</body>
</html>