@php
$services = getContent('service.element', false, null, true);
@endphp
<!-- <div class="tos-links-section pt-60 pb-60 bg-white">
    <div class="container">
        <div class="tos-links row gy-4">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6">
                <a href="javascript:void(0)">
                    <div class="icon">
                        <img src="{{ getImage('assets/images/frontend/service/'.$service->data_values->image,'50x50') }}" alt="icon">
                    </div>
                    <div class="content">
                        <span class="subtitle">{{ __($service->data_values->title) }}</span>
                        <p>{{ __($service->data_values->short_detail) }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div> -->
<div class="brands">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="img-box">
                    <img src="{{ asset('assets/images/logo-black.png') }}" alt="">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="owl-carousel owl-theme" id="brands">
                    <div class="item">
                        <img src="{{ asset('assets/images/brand/brand-1.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/brand/brand-2.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/brand/brand-3.png') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('assets/images/brand/brand-4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>