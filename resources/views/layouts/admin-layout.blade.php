<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ mix('/wp/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/wp/css/styles.css') }}">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&family=Montserrat:wght@400;700&family=Raleway:wght@300;400&family=Rubik:wght@300;400;500">

    <title>Anchored Photography</title>
</head>

<body>
    <style>
        .content-section {
            padding: 50px;
        }

        .content-section p {
            font-size: 20px;
        }

        .header {
            background-color: #17a2b8;
            padding: 20px;
        }

        .header * {
            color: white;
            font-size: 20px;
        }
    </style>

    <div style="min-height: 80vh">
        <div>
            <div class="header">
                <div class="col-12">
                    <a 
                        @guest
                            href="/"
                        @else
                            href="/dashboard"
                        @endguest
                    >Anchored Photography</a>

                    <div class="float-right">
                        @guest
                            <a href="/login">Log In</a>
                        @else
                            <button 
                                type="submit"
                                form="logout-form"
                                class="btn btn-link"
                                style="padding:0px"
                            >Log Out</button>
                        @endif
                    </div>
                </div>
            </div>

            <form
                id="logout-form"
                method="POST"
                action="/logout"
            >
                @csrf
            </form>
        </div>
        
        <div class="content-section">
            @yield('content', 'Yield Content')
        </div>
    </div>

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
            >&copy; 2021 Anchored Photography FL. All rights Reserved.</p>
        </div>
    </div>
</body>
</html>