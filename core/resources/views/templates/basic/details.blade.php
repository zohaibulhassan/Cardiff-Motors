@extends($activeTemplate.'layouts.frontend')

@section('content')
@include($activeTemplate.'sections.banner')
@include($activeTemplate.'partials.filters')
<div class="product-details">
    <div class="essential">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-7">
                    <div class="slider owl-carousel owl-theme">
                        <div class="item" data-hash="zero">
                            <img src="{{asset('assets/images/product/2.png')}}" alt="">
                        </div>
                        <div class="item" data-hash="one">
                            <img src="{{asset('assets/images/product/3.png')}}" alt="">
                        </div>
                        <div class="item" data-hash="two">
                            <img src="{{asset('assets/images/product/4.png')}}" alt="">
                        </div>
                        <div class="item" data-hash="three">
                            <img src="{{asset('assets/images/product/5.png')}}" alt="">
                        </div>
                        <div class="item" data-hash="four">
                            <img src="{{asset('assets/images/product/6.png')}}" alt="">
                        </div>
                    </div>
                    <div class="slider2 owl-carousel owl-theme">
                        <a href="#zero" class="item" data-hash="zero">
                            <img src="{{asset('assets/images/product/2.png')}}" alt="">
                        </a>
                        <a href="#one" class="item" data-hash="one">
                            <img src="{{asset('assets/images/product/3.png')}}" alt="">
                        </a>
                        <a href="#two" class="item"data-hash="two">
                            <img src="{{asset('assets/images/product/4.png')}}" alt="">
                        </a>
                        <a href="#three" class="item"data-hash="three">
                            <img src="{{asset('assets/images/product/5.png')}}" alt="">
                        </a>
                        <a href="#four" class="item"data-hash="four">
                            <img src="{{asset('assets/images/product/6.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5">
                    <div class="text-wrap">
                        <h2>MCLAREN SENNA</h2>
                        <h4>MSO PAINT+BOWERS & WILKINS+CAM</h4>
                        <ul>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                            <li>
                                <span>ODOMETER</span>
                                <b>572 MILES</b>                                
                            </li>
                        </ul>
                        <div class="btn-set">
                            <button>Reserve Online</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collateral">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <ul class="nav nav-pills  flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home">Further Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu1">Finance Option</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#menu2">Specification</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="home">
                            <h3>MORE ABOUT THIS</h3>
                            <h2>MCLAREN SENNA</h2>
                            <p>SSC Are Proud To Offer For Sale This Stunning and Super Rare McLaren Senna. McLaren Automotive's Latest Addition To The Ultimate Series and Contender In The Heavyweight Hypercar Division. Combined With Striking Looks, Breathtaking Performance and An Extensive Spec List Consisting Of The Following: MSO Defined Black Exterior Paint, Bowers & Wilkins Sound System, McLaren Track Telemetry, Gorilla Glass Door Lower Panel, Gorilla Glass Exterior Door Upper Panel, 6 Point Harness In Blue, Bespoke Floor Mats With Blue Piping, Burton Blue Door Struts, Burton Blue Calipers, Burton Blue Wheel Lock Nuts, Burton Blue Aero Vanes, Blue Contrast Stitching, Galvanic Grey Finish To Interior, Gtechniq Protection, Ultra Lightweight Alloys, Front & Rear Parking Sensors, Rear Camera. Limited Production To Only 500 Units Worldwide. 1 Of 2 Senna's Available At SSC!</p>
                            <a href="#"><img src="{{asset('assets/images/video.png')}}" alt=""></a>
                        </div>
                        <div class="tab-pane container fade" id="menu1">...</div>
                        <div class="tab-pane container fade" id="menu2">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection