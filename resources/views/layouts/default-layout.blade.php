<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

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
            background-color: #0069D9;
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
                    <a href="/1">Anchored Photography</a>

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

    <div class="container-fluid copy">
        <div class="col-12">
            <p style="margin-bottom:5px">&copy; 2020 Anchored Photography FL. All rights Reserved.</p>

            <p>Design by <a href="https://www.linkedin.com/in/robertandersonfl/">Rob Anderson</a> and <a href="https://freehtml5.co" target="_blank">FreeHTML5.co</a>.</p>
        </div>
    </div>
</body>
</html>