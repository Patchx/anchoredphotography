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
    <link rel="stylesheet" href="{{ mix('/wp/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ mix('/wp/css/homepage.css') }}">

    <title>Anchored Photography</title>
</head>

<body>
    <div>
        <div
            id="homepage-top-banner"
            class="text-center"
        >
            <span>
                <a 
                    href="#about-us"
                >About</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <span>
                <a 
                    href="#contact"
                >Contact</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <img
                src="/images/site_images/anchored_photography_white_outline_logo.png"
                class="d-inline-block"
                style="width: 180px"
            />

            <span>
                <a 
                    href="#news"
                >News</a>
                &nbsp;&nbsp;&nbsp;
            </span>

            <span>
                <a 
                    href="#portfolio"
                >Portfolio</a>
                &nbsp;&nbsp;&nbsp;
            </span>
        </div>
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
    </div>

    <div style="padding:50px">
        <div id="about-us">
            <div class="row">
                <div>
                    <br>
                    <h2 style="margin-bottom:20px">ABOUT ME</h2>

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

        <div id="portfolio">
            <div class="row">
                <h2 style="margin-bottom:20px">PORTFOLIO</h2>
            </div>

            <div class="row">
                <h5>FILTER BY:</h5>
                
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
            </div>

            <div class="row">
                <div class="portfolioContainer">
                    <div class="gallary building nature green">
                        <img src="/images/site_images/img1.png">
                    </div>

                    <div class="gallary center-img wedding">
                        <img src="/images/site_images/img2.png" class="half-height">
                    </div>

                    <div class="gallary building">
                        <img src="/images/site_images/img4.png" alt="">
                    </div>

                    <div class="gallary center-img landscape nature">
                        <img src="/images/site_images/img3.png" class="half-height" alt="">
                    </div>

                    <div class="gallary">
                        <img src="/images/site_images/img5.png" alt="">
                    </div>

                    <div class="gallary center-img landscape">
                        <img src="/images/site_images/img6.png" alt="">
                    </div>


                    <div class="gallary building nature">
                        <img src="/images/site_images/img4.png" alt="">
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

        <div 
            id="news"
            class="container-fluid fh5co-news" 
        >
            <h2>NEWS</h2>

            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div>
                        <div class="card text-center">
                            <img 
                                class="card-img-top" 
                                src="/images/site_images/news1.png" 
                                alt=""
                            />
                            
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Article #1</h5>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center">
                            <img 
                                class="card-img-top" 
                                src="/images/site_images/news2.png" 
                                alt=""
                            />
                            
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Article #2</h5>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center">
                            <img 
                                class="card-img-top" 
                                src="/images/site_images/news3.png" 
                                alt=""
                            />

                            <div class="card-body text-left pr-0 pl-0">
                                <h5>Article #3</h5>

                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid fh5co-footer">
            <div id="contact">
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
                            <form
                                action="/contact-form"
                                method="POST"
                            >
                                @csrf

                                <h4>Contact Me</h4>
                                <hr>

                                <div class="row">
                                    <input 
                                        type="text" 
                                        name="name"
                                        class="form-control" 
                                        placeholder="Name..."
                                        maxlength="100" 
                                        required
                                    />
                                </div>
                                <br>

                                <div class="row">
                                    <input
                                        type="email" 
                                        name="email"
                                        class="form-control" 
                                        placeholder="Email address"
                                        maxlength="100" 
                                        required
                                    />
                                </div>
                                <br>

                                <div class="row">
                                    <textarea 
                                        name="message"
                                        class="form-control" 
                                        placeholder="You Message"
                                        required
                                        maxlength="255" 
                                    /></textarea>
                                </div>
                                <br>

                                <div class="row">
                                    <button 
                                        type="submit"
                                        class="btn btn-primary"
                                    >SUBMIT NOW</button>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="container-fluid copy">
        <div class="col-lg-12">
            <p style="margin-bottom:5px">&copy; 2020 Anchored Photography FL. All rights Reserved.</p>

            <p>Design by <a href="https://www.linkedin.com/in/robertandersonfl/">Rob Anderson</a> and <a href="https://freehtml5.co" target="_blank">FreeHTML5.co</a>.</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>
</body>
</html>