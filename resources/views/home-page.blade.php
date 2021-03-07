<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ mix('/wp/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/wp/css/homepage.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Montserrat:wght@400;700&family=Raleway:wght@300;400&family=Rubik:wght@300;400;500">

    <title>Anchored Photography</title>
</head>

<body>
    <div>
        <img
            src="/images/site_images/anchored_photography_white_outline_logo.png"
            class="d-block d-md-none ml-10 mr-10 mx-auto"
            style="width: 180px"
        />

        <div
            id="homepage-top-banner"
            class="text-center"
        >
            <span>
                <a 
                    href="#about-us"
                >ABOUT</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <span>
                <a 
                    href="#contact"
                >CONTACT</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <img
                src="/images/site_images/anchored_photography_white_outline_logo.png"
                class="d-none d-md-inline-block ml-20 mr-20"
                style="width: 180px"
            />

            <span>
                <a 
                    href="#news"
                >NEWS</a>
                &nbsp;&nbsp;&nbsp;
            </span>

            <span>
                <a 
                    href="#portfolio"
                >PORTFOLIO</a>
                &nbsp;&nbsp;&nbsp;
            </span>
        </div>
    </div>

    <div style="padding:50px">
        <div id="about-us">
            <div class="row">
                <div>
                    <br>
                    <h2 
                        class="heading"
                        style="margin-bottom:20px"
                    >ABOUT ME</h2>

                    <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
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
                </div>
            </div>
        </div>

        <div id="contact">
            <div>
                <h2
                    class="heading"
                >LET'S CHAT!</h2>
                
                <p>
                    <span>
                        <img 
                            src="/images/site_images/email.png"
                            alt="email icon"
                        />
                    </span>

                    <b>
                        <a 
                            href="mailto:anchoredphotographyFL@gmail.com"
                            class="text-info"
                        >
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

                    <b>
                        <a 
                            href="tel:561-502-9176"
                            class="text-info"
                        >
                            561-502-9176
                        </a>
                    </b>
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

            <div class="clearfix"></div>
            <br>

            <div>
                <div 
                    class="form-box"
                    style="max-width:300px"
                >
                    <form
                        action="/contact-form"
                        method="POST"
                    >
                        @csrf

                        <h4>Contact Me</h4>

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
                                rows="5"
                                maxlength="255"
                            /></textarea>
                        </div>
                        <br>

                        <div class="row">
                            <button 
                                type="submit"
                                class="btn btn-info"
                                style="width:100%"
                            >SUBMIT</button>
                        </div>
                    </form>                            
                </div>
            </div>
        </div>
    </div>

    <div 
        id="footer"
        class="text-center"
    >
        <div class="col-lg-12">
            <p style="margin-bottom:5px">&copy; 2021 Anchored Photography FL. All rights Reserved.</p>

            <p style="margin-bottom:0px">Design by <a href="https://www.linkedin.com/in/robertandersonfl/" class="text-info">Rob Anderson</a> and <a href="https://freehtml5.co" class="text-info" target="_blank">FreeHTML5.co</a>.</p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>