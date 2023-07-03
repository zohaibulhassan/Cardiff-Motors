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
                @foreach ($products as $product)

                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="panel">
                            <div class="img-box">
                                <div class="badges">
                                    <span>{{$product->product_galleries_count}} <i class="fas fa-image"></i></span>
                                    <span>1 <i class="fas fa-video"></i></span>
                                </div>
                                <img src="{{(asset('assets/images/product/'.$product->image))}}" alt="">
                            </div>
                            <div class="details">
                                <h2>{{$product->name}}</h2>
                                <h4>{{$product->description}}</h4>
                                <h6>€{{$product->price}}</h6>
                                <ul>
                                    <li>
                                        <span>Year</span>
                                        <b>{{$product->year}}</b>
                                    </li>
                                    <li>
                                        <span>Odometer</span>
                                        <b>{{$product->odometer}}Mi</b>
                                    </li>
                                    <li>
                                        <span>Trans</span>
                                        <b>{{$product->transmission}}</b>
                                    </li>
                                    <li>
                                        <span>Fuel</span>
                                        <b>{{$product->fuel_type}}</b>
                                    </li>
                                </ul>
                                <div class="btn-set">
                                    <a href="#"><i class="fab fa-whatsapp"></i> Chat</a>
                                    <a href="{{ url('productdetails/'.$product->id) }}"><i class="fas fa-angle-right"></i> More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="list">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xxl-12 col-xl-12">
                        <div class="panel">
                            <div class="img-box">
                                <div class="badges">
                                    <span>{{$product->product_galleries_count}} <i class="fas fa-image"></i></span>
                                    <span>1 <i class="fas fa-video"></i></span>
                                </div>
                                <img src="{{(asset('assets/images/product/'.$product->image))}}" alt="">   
                                                     </div>
                            <div class="details">
                                <h2>{{$product->name}}</h2>
                                <h4>{{$product->description}}</h4>
                                <h6>€{{$product->price}}</h6>
                              
                                <ul>
                                    <li>
                                        <span>Year</span>
                                        <b>{{$product->year}}</b>
                                    </li>
                                    <li>
                                        <span>Odometer</span>
                                        <b>{{$product->odometer}}Mi</b>
                                    </li>
                                    <li>
                                        <span>Trans</span>
                                        <b>{{$product->transmission}}</b>
                                    </li>
                                    <li>
                                        <span>Fuel</span>
                                        <b>{{$product->fuel_type}}</b>
                                    </li>
                                </ul>
                                <div class="btn-set">
                                    <a href="#"><i class="fab fa-whatsapp"></i> Chat</a>
                                    <a href="{{ url('productdetails') }}"><i class="fas fa-angle-right"></i> More Details</a>
                                </div>  
                            </div>
                        </div>
                    @endforeach
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection