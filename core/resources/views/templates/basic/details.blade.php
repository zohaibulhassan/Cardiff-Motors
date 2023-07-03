@extends($activeTemplate . 'layouts.frontend')

@section('content')
    @include($activeTemplate . 'sections.banner')
    @include($activeTemplate . 'partials.filters')
    <div class="product-details">
        <div class="essential">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7">
                        <div class="slider owl-carousel owl-theme">
                            @foreach ($product['gallery'] as $gallery)
                                <div class="item" data-hash="{{$gallery->id}}">
                                    <img src="{{ asset('core/storage/app/gallery/'.$gallery->image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="slider2 owl-carousel owl-theme">
                            @foreach ($product['gallery'] as $gallery)
                            <a href="#zero" class="item" data-hash="{{$gallery->id}}">
                                <img src="{{ asset('core/storage/app/gallery/'.$gallery->image) }}" alt="">
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5">
                        <div class="text-wrap">
                            <h2>{{$product->name}}</h2>
                            <h4>{{$product['brand']->name}}</h4>
                            <ul>
                                <li>
                                    <span>ODOMETER</span>
                                    <b>{{$product->odometer}}</b>
                                </li>
                                <li>
                                    <span>FUEL TYPE</span>
                                    <b>{{$product->fuel_type}}</b>
                                </li>
                                <li>
                                    <span>TRANSMISSION</span>
                                    <b>{{$product->transmission}}</b>
                                </li>
                                <li>
                                    <span>YEAR</span>
                                    <b>{{$product->year}}</b>
                                </li>
                                <li>
                                    <span>BODY</span>
                                    <b>{{$product->body}}</b>
                                </li>
                                <li>
                                    <span>ENGINE SIZE   </span>
                                    <b>{{$product->engine_size}}</b>
                                </li>
                                
                                <li>
                                    <span>DOORS</span>
                                    <b>{{$product->doors}}</b>
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
                                <h2>{{$product->name}}</h2>
                                <p>
                                    {{$product->description}}
                                    {{-- @dd($product['specification'][0]['co2_emissions']) --}}
                                    </p>
                                <a href="#">
                                
                                    <iframe width="560" height="315" src="{{$product->video_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></a>
                            </div>
                            <div class="tab-pane container fade" id="menu1">...</div>
                            <div class="tab-pane container fade" id="menu2">
                                <div class="row">
                                    <div class="col-md-6">
                                            
                                        <div class="form-group">
                                            <label class="form-control-label font-weight-bold">@lang('CO2 Emissions')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="co2_emissions" class="form-control"
                                                placeholder="e.g: CO2 Emissions" value="{{$product['specification'][0]['co2_emissions'] }}" />
                                        </div>
        
        
                                        <div class="form-group">
                                            <label class="form-control-label font-weight-bold">@lang('EuroStatus')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="combined" class="form-control"
                                                placeholder="e.g: Combined" value="{{ $product['specification'][0]['euro_status'] }}" />
                                        </div>
        
                                    </div>
        
        
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label font-weight-bold">@lang('Urban/Non-Urban')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="urban_nonurban" class="form-control"
                                                placeholder="e.g: Urban/Non-Urban"
                                                value="{{ $product['specification'][0]['urban_nonurban'] }}" />
                                        </div>
        
        
        
                                        <div class="form-group">
                                            <label class="form-control-label font-weight-bold">@lang('Insurance Group')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="insurance_group" class="form-control"
                                                placeholder="e.g: Insurance Group"
                                                value="{{ $product['specification'][0]['insurance_group'] }}" />
                                        </div>
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Security')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="security" class="form-control"
                                            placeholder="e.g: Security Features" value="{{ $product['specification'][0]['security'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Speed')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="speed" class="form-control" placeholder="e.g: Speed"
                                            value="{{ $product['specification'][0]['speed'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Top Speed')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="top_speed" class="form-control" placeholder="e.g: Top Speed"
                                            value="{{ $product['specification'][0]['top_speed'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Max Power')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="max_power" class="form-control" placeholder="e.g: Max Power"
                                            value="{{ $product['specification'][0]['max_power'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Max Torque')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="max_torque" class="form-control"
                                            placeholder="e.g: Max Torque" value="{{ $product['specification'][0]['max_torque'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Valve Gear')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="valve_gear" class="form-control"
                                            placeholder="e.g: Valve Gear" value="{{ $product['specification'][0]['valve_gear'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Cylinder Arrangement')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="cyl_arr" class="form-control"
                                            placeholder="e.g: Cylinder Arrangement" value="{{ $product['specification'][0]['cyl_arr'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Gears')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="gears" class="form-control" placeholder="e.g: Gears"
                                            value="{{ $product['specification'][0]['gears'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Aspiration')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="aspiration" class="form-control"
                                            placeholder="e.g: Aspiration" value="{{ $product['specification'][0]['aspiration'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Cylinders')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="cylinders" class="form-control" placeholder="e.g: Cylinders"
                                            value="{{ $product['specification'][0]['cylinders'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('DriveREAR')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="drive_rear" class="form-control"
                                            placeholder="e.g: Rear Drive" value="{{ $product['specification'][0]['drive_rear'] }}" />
                                    </div>
        
                                    <div class="row container">
                                        <div class="form-group col-md-6">
                                            <h4>Dimensions</h4>
                                            <br>
                                            <label class="form-control-label font-weight-bold">@lang('Length')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="length" class="form-control" placeholder="e.g: Length"
                                                value="{{ $product['specification'][0]['length'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <br><br>
                                            <label class="form-control-label font-weight-bold mt-2">@lang('Breath')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="breath" class="form-control" placeholder="e.g: Breath"
                                                value="{{ $product['specification'][0]['breath'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label font-weight-bold">@lang('Height')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="height" class="form-control" placeholder="e.g: Height"
                                                value="{{ $product['specification'][0]['height'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label font-weight-bold">@lang('Max Gross Weight')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="max_gross_weight" class="form-control"
                                                placeholder="e.g : Max Gross Weight"
                                                value="{{ $product['specification'][0]['max_gross_weight'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label font-weight-bold">@lang('Towing Weight (Braked)')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="towing_weight_braked" class="form-control"
                                                placeholder="e.g: Towing Weight (Braked)"
                                                value="{{ $product['specification'][0]['towing_weight_braked'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label font-weight-bold">@lang('Towing Weight (Unbraked)')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="towing_weight_unbraked" class="form-control"
                                                placeholder="e.g: Towing Weight (Unbraked)"
                                                value="{{ $product['specification'][0]['towing_weight_unbraked'] }}" />
                                        </div>
        
                                        <div class="form-group col-md-6">
                                            <label class="form-control-label font-weight-bold">@lang('Seats')
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text" name="seats" class="form-control" placeholder="e.g: Seats"
                                                value="{{ $product['specification'][0]['seats'] }}" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <br>
                                        <h4> SAFETY (NCAP)</h4>
                                        <br>
                                        <label class="form-control-label font-weight-bold">@lang('Adult Occupancy')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="adult" class="form-control"
                                            placeholder="e.g: Adult Occupancy" value="{{ $product['specification'][0]['adult'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <br><br><br>
                                        <label class="form-control-label font-weight-bold mt-2">@lang('Child Occupancy')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="child" class="form-control"
                                            placeholder="e.g: Child Occupancy" value="{{ $product['specification'][0]['child'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Pedestrian Safety')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="pedestrian" class="form-control"
                                            placeholder="e.g: Pedestrian Safety" value="{{ $product['specification'][0]['pedestrian'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Safety Assist')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="safety_assist" class="form-control"
                                            placeholder="e.g: Safety Assist" value="{{ $product['specification'][0]['safety_assist'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Overall Safety')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="overall" class="form-control"
                                            placeholder="e.g: Overall Safety" value="{{ $product['specification'][0]['overall'] }}" />
                                    </div>
        
                                    <div class="form-group col-md-6">
                                        <label class="form-control-label font-weight-bold">@lang('Euro Status')
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="euro_status" class="form-control"
                                            placeholder="e.g: Euro Status" value="{{ $product['specification'][0]['euro_status'] }}" />
                                    </div>
                                </div>
                            </div>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
