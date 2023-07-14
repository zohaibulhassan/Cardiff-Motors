@php
$footerAddress = getContent('contact_us.content',true);
$paymentOption = getContent('footer.element',false,null,true);
$footerContent = getContent('footer.content',true);
$socialIcons = getContent('social_icon.element',false,null,true);
$categoryList = App\Models\Category::where('status',1)->with('subcategories')->latest()->limit(6)->get();
$policyPages = getContent('policy_pages.element', false, null, true);
@endphp


<footer>
   <!--  @if ($categoryList->count() > 0)

    <div class="footer-top">
        <div class="container">
            <div class="footer__wrapper">
                @foreach ($categoryList as $category)
                <div class="footer__widget">
                    <h6 class="title">{{ __($category->name) }}</h6>
                    <ul>
                        @foreach ($category->subcategories->take(4) as $subcategory)
                        <li>
                            <a href="{{ route('subcategory.products',['id'=>$subcategory->id,'name'=>slug($subcategory->name)]) }}">
                                {{ __($subcategory->name) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-info">
                        <h2>Contact Us</h2>
                        <p>There are many variations of passaes of orem ipsum available, but the majority have in some form, by ipsum injected</p>
                        <ul>
                            <li>
                                <img src="{{ asset('assets/images/icon-phone.png') }}" alt="">
                                <div class="text">
                                    <label for="">PHONE NUMBER</label>
                                    <p>+0 (000) 954 765</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon-email.png') }}" alt="">
                                <div class="text">
                                    <label for="">EMAIL ADDRESs</label>
                                    <p>info@support.com</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('assets/images/icon-location.png') }}" alt="">
                                <div class="text">
                                    <label for="">address</label>
                                    <p>East 56th Street New York, NY, USA</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="links">
                        <h2>Our Info</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Stock</a></li>
                            <li><a href="#">Sell</a></li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="links">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Stock</a></li>
                            <li><a href="#">Sell</a></li>
                            <li><a href="#">Finance</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="subscribe">
                        <h2>Subscribe Us</h2>
                        <form action="">
                            <div class="fields">
                                <input type="text" name="" placeholder="Subscribe to our newsletter">
                                <button><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="social">
                        <a href="#"><img src="{{ asset('assets/images/fb.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/images/twitter.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/images/monkey.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('assets/images/linkedin.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg--dark bottom">
        <div class="container">
            <div class="copyright-area justify-content-beetween">
                <div class="copyright">
                    @lang('Copyright') &copy; @lang('All Right Reserved by') 
                    {{__($general->sitename)}}
                </div>
                <!-- <div class="policy-page">
                    <img src="{{ asset('assets/images/payment-method.png') }}" alt="">
                </div> -->
            </div>
        </div>
    </div>
</footer>
