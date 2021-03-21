@extends('layouts.marketing-layout')

@section('content')
    <div class="full-images-banner">
        @foreach($top_image_urls as $url)
            <div
                class="image-div"
                style="
                    background: center no-repeat url({{ $url }});
                    background-size: cover;
                "
            /></div>
        @endforeach
    </div>

    <div 
        class="mx-auto"
        style="
            padding: 40px;
            max-width: 700px;
        "
    >
        <div class="row">
            <br>
            <h2
                class="mb-20 text-center"
            >Title here</h2>

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
        </div>
    </div>

    <div 
        id="carouselExampleControls" 
        class="carousel slide mx-auto"
        data-ride="carousel"
        data-interval="3000"
        style="max-width:400px"
    >
        <div class="carousel-inner">
            @foreach($bottom_image_urls as $url)
                <div 
                    @if ($loop->first)
                        class="carousel-item active"
                    @else
                        class="carousel-item"
                    @endif
                >
                    <div
                        style="
                            background: center no-repeat url({{ $url }});
                            background-size: cover;
                            width: 100%;
                            height: 400px;
                        "
                    /></div>
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div style="height:40px"></div>
@endsection