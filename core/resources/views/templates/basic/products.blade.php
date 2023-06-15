@extends($activeTemplate.'layouts.frontend')

@section('content')
@include($activeTemplate.'sections.banner')
@include($activeTemplate.'partials.filters')
<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3">
                <div class="panel">
                    <div class="img-box">
                        <img src="{{asset('assets/images/product/1.png')}}" alt="">
                    </div>
                    <div class="details">
                        <h2>BMW 318D Sedan M</h2>
                        <div class="features">
                            <div class="item">
                                <i class="fas fa-stopwatch"></i>
                                <span>2.9 Seconds</span>
                            </div>
                            <div class="item">
                                <i class="fas fa-gas-pump"></i>
                                <span>6.2L V8</span>
                            </div>
                            <div class="item">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>194 mph</span>
                            </div>
                            <div class="item">
                                <i class="fas fa-cog"></i>
                                <span>Auto (8Speed)</span>
                            </div>
                        </div>
                        <a href="#">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection