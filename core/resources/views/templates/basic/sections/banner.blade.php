@php
$sliders = getContent('banner.element',false,null,true);
@endphp
<div class="owl-carousel owl-theme" id="banner">
    <div class="item">
        <div class="img-box">
            <img src="{{ asset('assets/images/banner-1.png') }}" alt="">
        </div>
        <div class="text-wrap">
            <div class="container">
                <div class="row">                    
                    <div class="col-xxl-5 col-xl-5">
                        <h3>best auto service</h3>
                        <h1>Professional Service Provide</h1>
                        <p>Find the Perfect Car With Our Car Finder Tool</p>
                        <a href="#"><i class="fas fa-plus"></i> discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="item">
        <div class="img-box">
            <img src="{{ asset('assets/images/banner-3.png') }}" alt="">
        </div>
        <div class="text-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xxl-6 col-xl-6">
                        <h1>Living The <span>Dream, </span>Driving The <span>Dream</span>.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quod, excepturi aliquam debitis eos unde porro illo voluptatibus odio in consectetur possimus sapiente deserunt dolor itaque veritatis mollitia! Reprehenderit, veritatis?</p>
                        <a href="#">Browse Showroom</a>
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="img-box">
            <img src="{{ asset('assets/images/banner-4.png') }}" alt="">
        </div>
        <div class="text-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-xxl-6 col-xl-6">
                        <h1>Living The <span>Dream, </span>Driving The <span>Dream</span>.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam quod, excepturi aliquam debitis eos unde porro illo voluptatibus odio in consectetur possimus sapiente deserunt dolor itaque veritatis mollitia! Reprehenderit, veritatis?</p>
                        <a href="#">Browse Showroom</a>
                    </div>
                    <div class="col-xl-3"></div>
                </div>
            </div>
        </div>
    </div> -->
</div>