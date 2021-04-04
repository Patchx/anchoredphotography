@extends('layouts.marketing-layout')

@section('head-unique')

    <style>
        .testimonial {
            text-align: center;
            padding: 45px 50px 45px 70px;
            margin: 30px 15px 35px;
            background: #f9f9f9;
            position: relative;
        }
        .testimonial .description {
            font-size: 20px;
            color: #757575;
            line-height: 27px;
            margin-bottom: 20px;
            position: relative;
        }
        .testimonial .title {
            display: inline-block;
            font-size: 18px;
            color: #4a5184;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0;
        }
    </style>
@endsection

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
            >Hi, I’m Rachel Aubrey, the owner of Anchored Photography Florida</h2>
            <br>

            <p>I am a natural light photographer based on the Treasure Coast of Florida. I’m a native Floridian who grew up in South Florida, so I know the area well... which is always a plus! I love photographing everything from engagements to maternity, family lifestyle sessions to your babies graduating and everything in between! I have a passion for creating relationships with my clients and bringing their visions to life. There are so many amazing milestones in life, and I feel super grateful that my clients trust me to preserve those moments through photography.</p>
        </div>

        <div class="row">
            <div id="testimonial-slider">
                <div class="testimonial">
                    <p class="description">
                        Rachel is great! But this is just example text!
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">John Doe</h3>
                    </div>
                </div>
 
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi dolorum earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis saepe velit.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Kristina</h3>
                    </div>
                </div>
 
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto commodi dolorum earum fugiat, fugit hic id, ipsum laborum minus nostrum numquam perspiciatis saepe velit.
                    </p>
                    <div class="testimonial-profile">
                        <h3 class="title">Steve Thomas</h3>
                    </div>
                </div>
            </div>
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