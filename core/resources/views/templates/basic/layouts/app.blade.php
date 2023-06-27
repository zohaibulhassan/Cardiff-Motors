<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('partials.seo')

    @stack('og')
    <title> {{ $general->sitename(__($pageTitle)) }}</title>

    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/main.css') }}">
    <link rel="shortcut icon" href="{{ getImage(imagePath()['logoIcon']['path'] . '/favicon.png', '?' . time()) }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'css/color.php') }}?color={{ $general->base_color }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    @stack('style-lib')

    @stack('style')

</head>

<body class="overflow-hidden">

    <div class="preloader">
        <div class="loader-bg">
          <div class="loader-inner">
              <span></span>
          </div>
        </div>
    </div>

    @stack('fbComment')

    <div class="overlay"></div>

    @yield('app')

    @php
    $cookie = App\Models\Frontend::where('data_keys','cookie.data')->first();
    @endphp
    @if(@$cookie->data_values->status && !session('cookie_accepted'))
    <div class="cookies-card bg--light text-center cookies--dark radius--10px">
        <div class="cookies-card__icon">
            <i class="fas fa-cookie-bite"></i>
        </div>
        <p class="mt-4 cookies-card__content text--dark"> @php echo @$cookie->data_values->description @endphp
            <a class="d-inline text--base" href="{{ @$cookie->data_values->link }}">@lang('Read Policy')</a>
        </p>
        <div class="cookies-card__btn mt-4">
            <button class="cookies-btn btn--base w-100" id="allow-cookie">@lang('Allow')</button>
        </div>
    </div>
    @endif

    <a href="javascript:void(0)" class="scrollToTop"><i class="las la-angle-double-up"></i></a>

    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/rafcounter.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/lightbox.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/owl.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue.'js/main.js') }}"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script src="{{ asset($activeTemplateTrue.'js/gallery.js')  }}"></script>
    

    @stack('script-lib')

    @stack('script')

    @include('partials.plugins')

    @include('partials.notify')

    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{route('home')}}/change/"+$(this).val() ;
            });
            var url = `{{ route('cookie.accept') }}`;
            $('#allow-cookie').on('click', function(){
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {
                        $('.cookies-card').hide();
                    }
                });
            });
            if($(window).width() < 991)
            {
                $('.category-link .cate-icon').each(function(i, obj) {
                    $(this).children(":first").attr('href','javascript: void(0)');
                });
            } 
        })(jQuery);
    </script>
    <script>
        $('#banner').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots:false,
            mouseDrag : false,
            autoplay:true,
            items:1
            
        })
    </script>
    <script>
        $('#services').owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    <script>
        $('#reviews').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        })
    </script>
    <script>
        $(".products .list").hide();
        $(".fa-list").click(function(){
            $(".products .grid").hide();
            $(".products .list").show();
            $(".fa-list").addClass('active');
            $(".fa-th").removeClass('active');
        });
        $(".fa-th").click(function(){
            $(".products .list").hide();
            $(".products .grid").show();
            $(".fa-th").addClass('active');
            $(".fa-list").removeClass('active');
        });
    </script>
    <script>
        $('.slider').owlCarousel({
            loop:true,
            margin:10,
            items:1,
            dots:false,
            URLhashListener:true
        })
        $('.slider2').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:4,
            dots:false,
            center: true,
            URLhashListener:true
        })
    </script>
    <script>
        $('#products').owlCarousel({
            loop:true,
            margin:10,
            dots:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <script>
        $('#brands').owlCarousel({
            loop:true,
            margin:20,
            nav:false,
            dots:false,
            autoplay:true,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:6
                }
            }
        })
    </script>
    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    /* $('.counter').addClass('animated fadeInDownBig');
    $('h3').addClass('animated fadeIn'); */
    </script>
</body>

</html>