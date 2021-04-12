@extends('layouts.marketing-layout')

@section('head-unique')
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

    <div class="main-content-padding mx-auto">
        <div class="row">
            <br>
            <h2
                class="mb-20 text-center"
            >Hi, I’m Rachel Aubrey, the owner of Anchored Photography Florida</h2>
            <br>

            <p>I am a natural light photographer based on the Treasure Coast of Florida. I’m a native Floridian who grew up in South Florida, so I know the area well... which is always a plus! I love photographing everything from engagements to maternity, family lifestyle sessions to your babies graduating and everything in between! I have a passion for creating relationships with my clients and bringing their visions to life. There are so many amazing milestones in life, and I feel super grateful that my clients trust me to preserve those moments through photography.</p>
        </div>
    </div>

    <div class="mint-light-green-bg">
        <div class="main-content-padding mx-auto">
            <div>
                <h2 class="gallery-preview-title">Anniversaries</h2>

                <div
                    class="gallery-preview-image-div"
                    style="
                        background: center no-repeat url('https://res.cloudinary.com/lessondb/image/upload/f_auto,q_auto:eco,g_auto/v1615759785/anchoredphotographyfl/wedding_1.jpg');
                        background-size: cover;
                    "
                /></div>
            </div>

            <div>
                <h2 class="gallery-preview-title">Maternity</h2>

                <div
                    class="gallery-preview-image-div"
                    style="
                        background: center no-repeat url('https://res.cloudinary.com/lessondb/image/upload/f_auto,q_auto:eco,g_auto/v1615768165/anchoredphotographyfl/maternity_1.jpg');
                        background-size: cover;
                    "
                /></div>
            </div>

            <div>
                <h2 class="gallery-preview-title">Individuals & Couples</h2>

                <div
                    class="gallery-preview-image-div"
                    style="
                        background: center no-repeat url('https://res.cloudinary.com/lessondb/image/upload/f_auto,q_auto:eco,g_auto/v1615759769/anchoredphotographyfl/family_3.jpg');
                        background-size: cover;
                    "
                /></div>
            </div>

            <div>
                <h2 class="gallery-preview-title">Family Portraits</h2>

                <div
                    class="gallery-preview-image-div"
                    style="
                        background: center no-repeat url('https://res.cloudinary.com/lessondb/image/upload/f_auto,q_auto:eco,g_auto/v1615768144/anchoredphotographyfl/kids_1.jpg');
                        background-size: cover;
                    "
                /></div>
            </div>

            <div>
                <h2 class="gallery-preview-title">Engagement</h2>

                <div
                    class="gallery-preview-image-div"
                    style="
                        background: center no-repeat url('https://res.cloudinary.com/lessondb/image/upload/f_auto,q_auto:eco,g_auto/v1615759827/anchoredphotographyfl/ring_1.jpg');
                        background-size: cover;
                    "
                /></div>
            </div>
        </div>
    </div>

    <div class="rose-bg">
        <div class="main-content-padding mx-auto">
            <div class="row">
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
    <br><br>

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
                    @if($loop->first)
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