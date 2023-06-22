@extends($activeTemplate.'layouts.frontend')

@section('content')
@include($activeTemplate.'sections.banner')
@include($activeTemplate.'partials.filters')
<section class="products">
    <div class="sorter">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="view">
                        <i class="fas fa-th active"></i>
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="container">
            <div class="row">
                <?php for($i =0; $i < 12; $i++):?>
                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="panel">
                            <div class="img-box">
                                <div class="badges">
                                    <span>33 <i class="fas fa-image"></i></span>
                                    <span>1 <i class="fas fa-video"></i></span>
                                </div>
                                <img src="{{asset('assets/images/product/1.png')}}" alt="">
                            </div>
                            <div class="details">
                                <h2>BMW 318D Sedan M</h2>
                                <h4>3.0 M SPORT TOURING AUTO XDRIVE EURO 6 (S/S) 5DR</h4>
                                <h6>£19,995</h6>
                                <!-- <div class="features">
                                    <div class="item">
                                        <img src="{{asset('assets/images/stopwatch.png')}}" alt="">
                                        <span>2.9 Seconds</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/fuel.png')}}" alt="">
                                        <span>6.2L V8</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/speedometer.png')}}" alt="">
                                        <span>194 mph</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/gear.png')}}" alt="">
                                        <span>Auto (8Speed)</span>
                                    </div>
                                </div> -->
                                <ul>
                                    <li>
                                        <span>Year</span>
                                        <b>2015</b>
                                    </li>
                                    <li>
                                        <span>Odometer</span>
                                        <b>11,000Mi</b>
                                    </li>
                                    <li>
                                        <span>Trans</span>
                                        <b>Automatic</b>
                                    </li>
                                    <li>
                                        <span>Fuel</span>
                                        <b>Diesel</b>
                                    </li>
                                </ul>
                                <div class="btn-set">
                                    <a href="#"><i class="fab fa-whatsapp"></i> Chat</a>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
                
            </div>
        </div>
    </div>
    <div class="list">
        <div class="container">
            <div class="row">
                <?php for($i=0; $i < 12; $i++):?>
                    <div class="col-xxl-12 col-xl-12">
                        <div class="panel">
                            <div class="img-box">
                                <div class="badges">
                                    <span>33 <i class="fas fa-image"></i></span>
                                    <span>1 <i class="fas fa-video"></i></span>
                                </div>
                                <img src="{{asset('assets/images/product/1.png')}}" alt="">
                            </div>
                            <div class="details">
                                <h2>BMW 318D Sedan M</h2>
                                <h4>3.0 M SPORT TOURING AUTO XDRIVE EURO 6 (S/S) 5DR</h4>
                                <h6>£19,995</h6>
                                <!-- <div class="features">
                                    <div class="item">
                                        <img src="{{asset('assets/images/stopwatch.png')}}" alt="">
                                        <span>2.9 Seconds</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/fuel.png')}}" alt="">
                                        <span>6.2L V8</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/speedometer.png')}}" alt="">
                                        <span>194 mph</span>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('assets/images/gear.png')}}" alt="">
                                        <span>Auto (8Speed)</span>
                                    </div>
                                </div> -->
                                <ul>
                                    <li>
                                        <span>Year</span>
                                        <b>2015</b>
                                    </li>
                                    <li>
                                        <span>Odometer</span>
                                        <b>11,000Mi</b>
                                    </li>
                                    <li>
                                        <span>Trans</span>
                                        <b>Automatic</b>
                                    </li>
                                    <li>
                                        <span>Fuel</span>
                                        <b>Diesel</b>
                                    </li>
                                    <li>
                                        <span>Doors</span>
                                        <b>4</b>
                                    </li>
                                    <li>
                                        <span>Body</span>
                                        <b>Coupe</b>
                                    </li>
                                </ul>
                                <div class="btn-set">
                                    <a href="#"><i class="fab fa-whatsapp"></i> Chat</a>
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</section>
@endsection