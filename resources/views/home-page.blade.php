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
            >Hi, I’m Rachel the owner of Anchored Photography Florida</h2>

            <p>I am a natural light photographer based on the Treasure Coast of Florida. I’m a native Floridian who grew up in South Florida, so I know the area well... which is always a plus! I love photographing everything from engagements to maternity, family lifestyle sessions to your babies graduating and everything in between! I have a passion for creating relationships with my clients and bringing their visions to life. There are so many amazing milestones in life, and I feel super grateful that my clients trust me to preserve those moments through photography.</p>

            <p>I am so excited to be a part of your journey and capture moments to last you a lifetime!</p>

            <p>When I'm not spending time behind my camera or my computer editing, I am a wife and momma to one fur baby! My hubby and I are on our TTC journey (fertility journey to start a family), and we are eager to see what life has in store for us. I have been a special education teacher for a decade and love working with kids! It’s definitely at the heart of what I do each and every day. When I’m not working, you can usually find me jamming out to music in my car, binge watching a Netflix show, or hanging out with friends at local spots around town.</p>

            <p>When you book a session with me, prepare for lots of laughter and making awkward moments magical! (Yes, we all know it can feel awkward to stand in front of the camera.) My ultimate goal when we are together is to capture YOU, and all that makes you and yours who you are. I will do some directing to help you look amazing, but I also know when to step back and catch candid moments. I love to capture candid moments that are perfectly you and capture your vision. My heartfelt hope is to preserve the love, laughter, and all of the moments to last you a lifetime. I will be by your side each step of the way and always just a call or email away. By the end of our time together, my hope is that you feel more like a friend than a client.</p>

            <p>I can’t wait to meet you and share some of the most special moments with you and your loved ones!</p>
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