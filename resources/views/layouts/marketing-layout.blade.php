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
    <link rel="stylesheet" href="{{ mix('/wp/css/styles.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Montserrat:wght@400;700&family=Raleway:wght@300;400&family=Rubik:wght@300;400;500">

    <title>Anchored Photography</title>
</head>

<body>
    <div>
        <a href="/">
            <img
                src="/images/site_images/anchored_photography_white_outline_logo.png"
                class="d-block d-md-none ml-10 mr-10 mx-auto"
                style="width: 180px"
            />
        </a>

        <div
            id="homepage-top-banner"
            class="text-center"
        >
            <span>
                <a 
                    href="/about"
                >ABOUT</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <span>
                <a 
                    href="/contact"
                >CONTACT</a>
                &nbsp;&nbsp;&nbsp;
            </span>
            
            <a href="/">
                <img
                    src="/images/site_images/anchored_photography_white_outline_logo.png"
                    class="d-none d-md-inline-block ml-20 mr-20"
                    style="width: 180px"
                />
            </a>

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

    @yield('content', 'Yield Content')

    <div 
        id="footer"
        class="text-center"
    >
        <div class="col-lg-12">
            <div class="mb-10">
                <a 
                    href="https://facebook.com/AnchoredPhotographybyRachel"
                    class="mr-10"
                >
                    <i class="fab fa-facebook-f"></i>
                </a>

                <a 
                    href="https://instagram.com/anchoredphotographyFL"
                >
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
            </div>

            <div><a 
                href="mailto:anchoredphotographyFL@gmail.com"
            >anchoredphotographyFL@gmail.com</a></div>

            <div><a 
                href="tel:561-502-9176"
            >561-502-9176</a></div>

            <p 
                class="mt-15 mb-0"
            >&copy; 2021 Anchored Photography FL. All rights Reserved</p>

            <p style="margin-bottom:0px">Design by <a href="https://www.linkedin.com/in/robertandersonfl/">Rob Anderson</a></p>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>